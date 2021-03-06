<?php include 'functions.php';?>
<!-- https://github.com/randomfederation/randomfederation/blob/master/functions.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Рандомная федерация | Главная</title>
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/index.css">
</head>
<body>
	<div class="wrapper center">
		<div class="github">
			<a href="https://github.com/randomfederation/randomfederation/blob/master/index.php" class="github-link" title="Github сурс для index.php" target="_blank"></a>
		</div>
		<header>
			<a href="index.php"><img src="img/rand-fed-logo.png" alt="rand fed logo"></a>
		</header>
		<main>
			<h1>Добро пожаловать на официальный сайт Рандомной Федерации!</h1>
			<h1>AVE mt_rand()!</h1>
		</main>
		<footer>
			<span class="copy">&copy; <?= date('Y')?> Рандомная Федерация | Все права защищены</span>
			<a href="currency.php">Узнайте курс валют!</a>
			<a href="dice.php">Сыграйте в кости с президентом прямо сейчас!</a>
		</footer>
	</div>
</body>
</html>
