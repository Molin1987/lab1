<?php   
include "connect.php";   
include "header.php";   
 
$cat = isset($_GET["new"]) ? $_GET["new"] : false;  
$sort = isset($_GET["sort"]) ? $_GET["sort"] : "DESC"; // По умолчанию сортировка по убыванию  
$query_get_category = "select * from categories";    
$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category));   
$count_news = mysqli_num_rows($news); // Получите общее количество новостных статей 
 
if($cat == false) { 
    $news = mysqli_query($con, "SELECT * FROM news ORDER BY publish_date $sort"); 
} else { 
    $news = mysqli_query($con, "SELECT * FROM news WHERE category_id=$cat ORDER BY publish_date $sort"); 
} 
 
$paginate_count = 2; // Количество новостных статей на странице 
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Текущий номер страницы 
$offset = $page * $paginate_count - $paginate_count; // Вычислите смещение для SQL-запроса 
 
if ($cat == false) { 
    $news = mysqli_query($con, "SELECT * FROM news ORDER BY publish_date $sort LIMIT $paginate_count OFFSET $offset"); 
} else { 
    $news = mysqli_query($con, "SELECT * FROM news WHERE category_id=$cat ORDER BY publish_date $sort LIMIT $paginate_count OFFSET $offset"); 
} 
 
?>    
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Пингвины</title> 
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
</head> 
<body> 
<form class="forms"> 
    <label for="sort">Сортировать:</label> 
    <select name="sort" id="sort" onchange="this.form.submit()"> 
        <option value="DESC" <?php if($sort == "DESC") echo "selected";?>>По убыванию</option> 
        <option value="ASC" <?php if($sort == "ASC") echo "selected";?>>По возрастанию</option> 
    </select> 
    <select style="display: none;" name="new" id="new" onchange="this.form.submit()"> 
        <option value="">Все категории</option> 
        <?php 
        foreach($categories as $category){ 
            $selected = ($cat == $category[0]) ? "selected" : ""; 
            echo "<option value='{$category[0]}' $selected>{$category[1]}</option>"; 
        } 
        ?> 
    </select> 
</form> 
<div class="main"> 
    <div class="last-news"> 
        <?php 
        if (mysqli_num_rows($news) == 0){ 
            echo "<h3>Данных нет</h3>"; 
        } else { 
            while($new = mysqli_fetch_assoc($news)){ 
                echo "<div class='card'>"; 
                $new_id = $new["news_id"]; 
                echo "<img src='images/news/" . $new['image'] . "'>"; 
                echo "<h2 class='c_title'>" . $new['title'] . "</h2>"; 
                echo "<a href='oneNew.php?new=$new_id'>" . $new['news_id'] . "</a>"; 
                echo "</div>"; 
            } 
        } 
        ?> 
        <div class="pagination"> 
    <li> 
        <?php 
        for ($i = 1; $i <= ceil($count_news / $paginate_count); $i++) { 
            echo "<li><a href='?page=$i" . ($sort ? "&sort=$sort" : "") . ($cat ? "&new=$cat" : "") . "'>$i</a></li>"; 
        } 
       ?> 
    </li>  
    </div> 
    </div> 
</div> 
</body> 
</html>