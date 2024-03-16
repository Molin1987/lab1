
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link rel="stylesheet" href="style.css"> 
</head> 
<body bgcolor="#a5a5a5"> 
    <div class="header"> 
        <div class="header-div1"> 
            <p>Тренировочные задания по ЕГЭ</p> 
            <h1>ИНФОРМАТИКА</h1> 
            <p>Тольятинский государственный университет</p> 
        </div> 
        <div class="header-div2"> 
            <p>Вы вошли на сайт как гость</p> 
            <input type="button" value="Войти" placeholder=""> 
            <input type="button" value="Зарегистрироваться" placeholder=""> 
        </div> 
    </div> 
    <div class="body"> 
        <div class="date1"> 
        <div class="timer">
                <p>Таймер:</p>
                <div id="hours">00</div>
                <div>:</div>
                <div id="minutes">00</div>
                <div>:</div>
                <div id="seconds">00</div>
                <?php print(date( "l dS of F Y h:i:s A" )); ?> 
        </div> 
        <div class="task-text"> 
        <?php 
$var1 = 0; 
$var2 = 0; 
$var3 = 0; 
$var4 = 0; 
$var5 = 0; 
$var6 = 0; 
 
$tasks = [ 
 
    "Необходимо перевести значение $var1 из 2 сисемы счисления в 10 систему счисления. В качестве ответа указать число.", 
 
    "Какой минимальный объём памяти (в Кбайт) нужно зарезервировать, чтобы можно было сохранить любое растровое изображение размером $var2 × $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов? В ответе запишите только целое число, единицу измерения писать не нужно.", 
     
    "Напишите количество вхождений символа $var5 в следующем тексте. В ответ записать число вхождений. $var6" 
 
]; 
 
 
function random($min, $max){ 
    return mt_rand($min, $max); 
} 
 
function get2SS($len){ 
    $str=""; 
    for($i=0;$i<$len;$i++){ 
        if($i==0) $str.=1; 
        else $str.=random(0,1); 
    } 
    return $str; 
} 
 
for($i=0;$i<4;$i++){ 
    switch($_GET['task']){ 
        case 0; 
        $var1 = get2SS(random(2,5)); 
        echo "<p>Необходимо перевести значение $var1 из 2 сисемы счисления в 10 систему счисления. В качестве ответа указать число.</p>"; 
        echo "<label>Ответ:</label><input type='number'><label for=''><input type='submit'></label>"; 
        break; 
    } 
} 
 
 
function getColor($tlen){  
    $str="";  
    $digits = array(128, 256, 16); // определенные цифры 
    for($i=0; $i < $tlen; $i++){  
        if($i == 0) { 
            $str .= $digits[array_rand($digits, 1)]; // первая цифра из определенных 
        } else { 
            $str .= $digits[array_rand($digits, 1)]; // случайная цифра из определенных 
        } 
    }  
    return $str;  
} 
 
for($i=0; $i<4; $i++){  
    switch($_GET['task']){  
        case 1:  
            $var2 = getColor(rand(1, 1));  
            $var3 = getColor(rand(1, 1));  
            $var4 = getColor(rand(1, 1));  
            echo "<p>Какой минимальный объём памяти (в Кбайт) нужно зарезервировать, чтобы можно было сохранить любое растровое изображение размером $var2 × $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов? В ответе запишите только целое число, единицу измерения писать не нужно.</p>";  
            echo "<label>Ответ:</label><input type='number'><label for=''><input type='submit'></label>";  
            break;  
    }  
} 
 
 
function getRandomText() { 
    $texts = array( 
        "<br>Я вас любил: любовь еще, быть может,<br> 
        <br>В душе моей угасла не совсем; 
        <br>Но пусть она вас больше не тревожит; 
        <br>Я не хочу печалить вас ничем. 
        <br>Я вас любил безмолвно, безнадежно, 
        <br>То робостью, то ревностью томим; 
        <br>Я вас любил так искренно, так нежно, 
        <br>Как дай вам Бог любимой быть другим.<br>", 
 
        "<br>Сижу за решеткой в темнице сырой.<br> 
        <br>Вскормленный в неволе орел молодой, 
        <br>Мой грустный товарищ, махая крылом, 
        <br>Кровавую пищу клюет под окном, 
        <br>Клюет, и бросает, и смотрит в окно, 
        <br>Как будто со мною задумал одно. 
        <br>Зовет меня взглядом и криком своим 
        <br>И вымолвить хочет: «Давай улетим! 
        <br>Мы вольные
птицы; пора, брат, пора! 
        <br>Туда, где за тучей белеет гора, 
        <br>Туда, где синеют морские края, 
        <br>Туда, где гуляем лишь ветер… да я!..»<br>", 
 
        "<br>Уж небо осенью дышало,<br> 
        <br>Уж реже солнышко блистало, 
        <br>Короче становился день, 
        <br>Лесов таинственная сень 
        <br>С печальным шумом обнажалась, 
        <br>Ложился на поля туман, 
        <br>Гусей крикливых караван 
        <br>Тянулся к югу: приближалась 
        <br>Довольно скучная пора; 
        <br>Стоял ноябрь уж у двора.<br>", 
 
        "<br>В тот год осенняя погода<br> 
        <br>Стояла долго на дворе, 
        <br>Зимы ждала, ждала природа. 
        <br>Снег выпал только в январе 
        <br>На третье в ночь. Проснувшись рано, 
        <br>В окно увидела Татьяна 
        <br>Поутру побелевший двор, 
        <br>Куртины, кровли и забор, 
        <br>На стеклах легкие узоры, 
        <br>Деревья в зимнем серебре, 
        <br>Сорок веселых на дворе 
        <br>И мягко устланные горы 
        <br>Зимы блистательным ковром. 
        <br>Все ярко, все бело кругом.<br>" 
    ); 
 
    $randomIndex = array_rand($texts); // Получаем случайный индекс из массива 
 
    return $texts[$randomIndex]; // Возвращаем случайный текст 
} 
 
function randomRussianLetter() { 
    $letters = "абвгдеёжзийклмнопрстуфхцчшщъыьэюя"; 
    $randomIndex = rand(0, mb_strlen($letters, 'utf-8') - 1); 
    return mb_substr($letters, $randomIndex, 1, 'utf-8'); 
} 
 
for($i=0;$i<4;$i++){    
    switch($_GET['task']){    
        case 2:    
            $var5 = randomRussianLetter();    
            $var6 = getRandomText(); 
            echo "<p>Напишите количество вхождений символа '$var5' в следующем тексте. В ответ записать число вхождений. $var6</p>";    
            echo "<label>Ответ:</label><input type='number'><label for=''><input type='submit'></label>";   
            break;    
    }    
} 
?> 
<div class="submit"> 
                    <label for="refreshButton"><input type="button" id="refreshButton" onclick="location.reload()" class="submit-black" value="Пример решения"></label> 
                    <label for="redirectButton"><input type="button" id="redirectButton" onclick="window.location.href='index.php'" class="submit-black" value="Ответить"></label> 
                </div> 
        </div> 
    </div> 
</body> 
</html>