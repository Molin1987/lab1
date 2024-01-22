<?php
  if(isset($_POST['binary'])){
    $binary = $_POST['binary'];
    if(preg_match("/^[01]+$/", $binary)) {
      $decimal = bindec($binary);
      echo "Двоичное число $binary равно $decimal в десятичной";
    } else {
      echo "Введите двоичное число";
    }
  } else {
    echo "Введите двоичное число";
  }
?>



<!-- Для фиксации случайных значений задаём переменную $IS, а для фиксации времени начала ответа пользователя на билет – переменную $T:
	$IS=mt_rand(1000,1000000)+(time()%1000);
	mt_srand($IS);
	$T=time(); -->