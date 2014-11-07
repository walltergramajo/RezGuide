<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function welcomeMessage(){	
	$afternoon = "Good afternoon ";
	$evening = "Good evening ";
	$late = "Working late? ";
	$morning = "Good morning! ";

	date_default_timezone_set('America/Toronto');

	//Get the current hour
	$current_time = date("H"); //H is used for hours in a 24 hour clock.
	//echo $current_time;

	//12 p.m. - 4 p.m.
	if ($current_time >= 12 && $current_time <= 16) {
	return $afternoon;
	}
	// 5 p.m. to 11 p.m.
	elseif ($current_time >= 17 && $current_time <= 24) {
	return $evening;
	}
	//12 a.m. - 5 a.m.
	elseif ($current_time >= 1 && $current_time <= 5) {
	return $late;
	}
	// 6 a.m. to 11 a.m.
	elseif ($current_time >= 6 && $current_time <= 11) {
	return $morning;
	}

}