<?php
    include "../connect.php";
    include "../header.php";

    $news = mysqli_fetch_all(mysqli_query($con,"select news_id, title from news"));

    $id_new = isset($_GET["new"]) ? $_GET["new"] : false;


    if($id_new) $new_info = mysqli_fetch_assoc(mysqli_query($con, "SELECT* FROM news WHERE news_id = $id_new"));
 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Панель администратора</h1>
        <div class="admin_content d-flex">
            <section class="col_1">
                <h2>Список новостей:</h2>
                <ul>
                <?php
                    foreach($news as $new){
                        echo "<li><a href='?new=" . $new[0] ."'>" . $new[1] ."</a></li>";
                    }
                ?>
                <li><a href="/admin"><img style="width: 10%; height: 10%; margin: 10px;" src="/images/icons/icon-plus.png"></a></li>
                </ul>
            </section>
            <section class="col_2">
                <h2> <?=$id_new?"Редактирование новости №$id_new":"Создание новости";?> </h2>
            <form action='<?=$id_new?"/update":"/create";?>NewValid.php' method="post" enctype="multipart/form-data"> 
            <?= "<div class='post_img' style='background-image:url(/images/news/" . (isset($new_info['image']) ? $new_info['image'] : '') . ")'></div>";?>
            <label  for="category">Выберите категорию:</label>  
            <select id="category" name="category">  
                <?php 
                foreach($categories as $category){ 
                    $id_cat = $category[0];
                    $name = $category[1];
                    $is_sel = ($id_cat==$new_info['category_id'])? "selected":''; 
                    echo "<option value='$id_cat'". ($id_new ? $is_sel : '') .">$name</option>";
                    } 
                ?>
            </select>
            <br><br>
            <label for="Title">Заголовок:</label>  
            <input type="text" id="Title" name="Title" class="submit-button-img" value='<?=$id_new?$new_info["title"]:"";?>'><br><br>  
            <label for="text" >Текст:</label><br>  
            <textarea id="text" name="text" rows="4" cols="50"></textarea><br><br>  
            <label for="image">Изображение:</label>  
            <input type="file" id="image" name="image" accept="image/*" class="submit-button-img"><br><br>  
            <input type="submit" value="Отправить" class="submit-button">

        </form>
            </section>
        </div>
    </div>
</body>
</html>