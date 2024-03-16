<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body bgcolor="#a5a5a5">
    <div class="bg-all">
    <div class="header">
        <div class="header-div1">
            <h2>Тренировочные задания по ЕГЭ</h2>
            <h1>ИНФОРМАТИКА</h1>
            <h4>Тольятинский государственный университет</h4>
        </div>
        <div class="header-div2">
            <p>Вы вошли на сайт как гость</p>
            <input type="button" value="Войти" class="submit-grey" placeholder="">
            <input type="button" value="Зарегистрироваться" class="submit-grey" placeholder="">
        </div>
    </div>
    <div class="body">
        <div class="date">
                <div class="timer">
                <p>Таймер:</p>
                <div id="hours">00</div>
                <div>:</div>
                <div id="minutes">00</div>
                <div>:</div>
                <div id="seconds">00</div>
                </div>
                <?php print(date( "l dS of F Y h:i:s A" )); ?>
        </div>
        <div class="task-text">
            <form action="">
                <h1 style="display: flex; justify-content: center;">Билет 1. Вычисление количества вариантов</h1>
                <div>
                    <p>1.  Переведи из двоичной системе счисления в десятиричную систему счисления.</p>
                    <label for=""><a href="/task.php?task=0"><input type="button" value="Примеры" class="but-all"></label></a>
                </div>
                <div>
                    <p>2. Какой минимальный объём памяти (в Кбайт) нужно зарезервировать, чтобы можно было сохранить любое растровое изображение размером 128×128 пикселей при условии, что в изображении могут использоваться n-ое количество различных цветов? В ответе запишите только целое число, единицу измерения писать не нужно.</p>
                    <label for=""><a href="/task.php?task=1"><input type="button" value="Примеры" class="but-all"></label></a>                
                </div>
                <div>
                    <p>3. Подсчет количества вхождений рандомного символа
                    </p>
                    <label for=""><a href="/task.php?task=2"><input type="button" value="Примеры" class="but-all"></label></a>
                </div>
                <div class="submit">
                </div>
                <div class="submit">
                    <label for=""><input class="submit-black" type="button" value="Пример решения"></label>
                    <label for=""><input type="submit" class="submit-black" value="Ответить"></label>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>