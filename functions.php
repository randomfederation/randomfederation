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

	//$dollarCost = mt_rand(1 , 100).' руб. '.mt_rand(1 , 99). ' коп.';
	$dollarCostWhole = mt_rand(1 , 100); // стоимость доллара от одного до ста
	$dollarCostCents = mt_rand(1 , 99); // центы к стоимости
	//$rubHave = mt_rand(1 , 10000).' руб. '.mt_rand(1 , 99). ' коп.';
	$rubHaveWhole =  mt_rand(1 , 10000); //  количество рублей от  одного до 10000
	$rubHaveKop =  mt_rand(1 , 99); //  копейки к рублям

	$dollarCost = $dollarCostWhole * 100 + $dollarCostCents; // стоимость долларов в центах

	$rubHave = $rubHaveWhole * 100 +  $rubHaveKop; // кол-во рублей в копейках
	//$dollarAmount = round($rubHave / $dollarCost, 2);
	//$dollarAmount  = round($rubHave / $dollarCost , 2); // количество долларов в центах
	$dollarAmount  = $rubHave / $dollarCost; // количество долларов, которое можно купить в центах

	$dollarCost_display = $dollarCostWhole.' руб. '.$dollarCostCents. ' коп.';
	$rubHave_display = $rubHaveWhole.' руб. '.$rubHaveKop. ' коп.';
	$dollarAmount_display = round($dollarAmount, 2).' дол.';

