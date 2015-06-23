<?php include 'functions.php';?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Currency</title>
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/currency.css">
</head>
<body>
	<div class="wrapper center">
		<div class="github">
			<a href="https://github.com/randomfederation/randomfederation/blob/master/currency.php" class="github-link" title="Github сурс для currency.php" target="_blank"></a>
		</div>
		<header>
			<a href="index.php"><img src="img/rand-fed-logo.png" alt="rand fed logo"></a>
		</header>
		<main>
			<h1>Официальный курс валюты Центрального Банка Рандомной Федерации на <?php echo russian_date();?>:</h1>
			<h2>Доллар США: <?= $dollarCost_display;?></h2>
			<h2>У вас имеется: <?= $rubHave_display;?></h2>
			<h2>Вы можете купить: <?= $dollarAmount_display;?></h2>
			<input class="reload-button" type="button" value="Обновить" onClick="window.location.reload()">
		</main>
		<footer>
			<span class="copy">&copy; <?= date('Y')?> Министерство финансов Рандомной Федерации | Все права защищены</span>
			<a href="index.php">Главная</a>
			<a href="dice.php">Сыграйте в кости с президентом прямо сейчас!</a>
		</footer>
	</div>
</body>
</html>
