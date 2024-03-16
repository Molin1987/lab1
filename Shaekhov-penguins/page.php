<?php

include "header.php";
$user_id = $_SESSION['user_id'];
$user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `users` WHERE `user_id` = '$user_id'"));

?>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Личный кабинет</title>
 <link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="page-lichniy-kab">
		<p class="lichniy-kab">Личный кабинет</p>

		<form action="update_user.php" method="post">
		<label for="login">Логин:</label>
			<input class="text-lichniy-kab" required type="text" name="login" value="<?php echo $user['login']; ?>">
		<br>
		<label for="name">Имя:</label>
			<input class="text-lichniy-kab" required type="text" name="name" value="<?php echo $user['name']; ?>">
		<br>
		<button type="submit" style="margin: 2px 0px 15px 0px;" class="exit-but">Отправить</button>
		<div class="btn-exit"><a class="exit-but" href="exit.php">Выйти</a></div>
		</form>


	</div>
</body>
</html>
