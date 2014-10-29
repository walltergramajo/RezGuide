<?php

class Main_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function greeting(){	
		$afternoon = "Good afternoon ";
		$evening = "Good evening ";
		$late = "Working late? ";
		$morning = "Good morning! ";


		//Get the current hour
		$current_time = now(); //H is used for hours in a 24 hour clock.
		return $current_time;



		//12 p.m. - 4 p.m.
		// if ($current_time >= 12 && $current_time <= 16) {
		// return $afternoon;
		// }
		// 5 p.m. to 11 p.m.
		// elseif ($current_time >= 17 && $current_time <= 24) {
		// return $evening;
		// }
		//12 a.m. - 5 a.m.
		// elseif ($current_time >= 1 && $current_time <= 5) {
		// return $late;
		// }
		// 6 a.m. to 11 a.m.
		// elseif ($current_time >= 6 && $current_time <= 11) {
		// return $morning;
		// }

	}


}