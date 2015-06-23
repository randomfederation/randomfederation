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
