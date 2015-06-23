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
		<?php 
			//English to russian month`s names convertion
			function russian_date() {
				$date = explode(".", date("d.m.Y"));
				switch ($date[1]) {
				case 1: $m ='января'; break;
				case 2: $m ='февраля'; break;
				case 3: $m ='марта'; break;
				case 4: $m ='апреля'; break;
				case 5: $m ='мая'; break;
				case 6: $m ='июня'; break;
				case 7: $m ='июля'; break;
				case 8: $m ='августа'; break;
				case 9: $m ='сентября'; break;
				case 10: $m ='октября'; break;
				case 11: $m ='ноября'; break;
				case 12: $m ='декабря'; break;
			}
				echo $date[0].'&nbsp;'.$m.'&nbsp;'.$date[2];
			}

			//Dollars convertion task
			$dollarCost = mt_rand(1 , 100).' руб. '.mt_rand(1 , 99). ' коп.';
			$rubHave = mt_rand(1 , 10000).' руб. '.mt_rand(1 , 99). ' коп.';
			$dollarAmount = round($rubHave / $dollarCost, 2);
		?>
		<div class="github">
			<a href="https://github.com/randomfederation/randomfederation/blob/master/currency.php" class="github-link" title="Github сурс для currency.php" target="_blank"></a>
		</div>
		<header>
			<a href="index.php"><img src="img/rand-fed-logo.png" alt="rand fed logo"></a>
			<!-- <img src="http://i.imgur.com/SET67TJ.png" alt=""> -->
		</header>
		<main>
			<h1>Официальный курс валюты Центрального Банка Рандомной Федерации на <?php echo russian_date();?>:</h1>
			<h2>Доллар США: <?php echo $dollarCost;?></h2>
			<h2>У вас имеется: <?php echo $rubHave;?></h2>
			<h2>Вы можете купить: <?php echo $dollarAmount;?> дол.</h2>
			<input class="reload-button" type="button" value="Обновить" onClick="window.location.reload()">
		</main>
		<footer>
			<span class="copy">&copy <?php echo date('Y')?> Министерство финансов Рандомной Федерации | Все права защищены</span>
			<a href="index.php">Главная</a>
			<a href="dice.php">Сыграйте в кости с президентом прямо сейчас!</a>
		</footer>
	</div>
</body>
</html>
