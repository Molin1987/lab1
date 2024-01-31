<?php
// Подключение к базе данных
require "connect.php";
?>


<!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Админ</title>
        <link rel='stylesheet' type='text/css' media='screen' href='css/admin.css'> 
        <style>
            body{
                text-align: center;
            }
            li{
                list-style: none;
            }
        </style>
    </head> 
    <body> 

    
    <h1>Админ-Панель</h1>
    <hr>
    <?php
            // Проверка соединения
        if (!$con) {
            die("Ошибка подключения: " . mysqli_connect_error());
        }

        // SQL-запрос для выборки новостей
        $query = "SELECT `title`, `image`, `content` FROM news";

        // Выполнение запроса
        $result = mysqli_query($con, $query);

        // Проверка наличия результатов
        if (mysqli_num_rows($result) > 0) {
            // Вывод названий новостей списком
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row["title"] . "</li>";
                echo "<img src='images/news/" . $row["image"] . "'></li>";
                echo "<li>" . $row["content"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Новости не найдены.";
        }

        // Закрытие соединения с базой данных
        mysqli_close($con);
    ?>
    </body> 
</html>