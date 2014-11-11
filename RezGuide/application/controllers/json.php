<?php

class Json extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Calendar_model');
		date_default_timezone_set('America/Toronto');
	}

	public function index($date = null){

		if($date == null){
			$date = date('d-m-Y');
		}

		header('Content-type: application/json');
		echo json_encode($this->Calendar_model->getEvents($date));
	}

	public function fetchEvents($date = null){
		$count = 0;
		if($date == null){
			$date = date('d-m-Y');
		}
		
		$eventResult = $this->Calendar_model->getEvents($date);
		$num_rows = mysql_num_rows($eventResult);
		echo "[";
		while($result = mysql_fetch_assoc($eventResult)){
			$jsonResult = json_encode($result);
			$count++;
			if($count==$num_rows){
				echo $jsonResult;
			}else{
				echo $jsonResult.",";
			}
		}
		echo "]";
	}
}

//references

//http://stackoverflow.com/questions/5578259/jquery-ui-datepicker-how-to-add-clickable-events-on-particular-dates
//http://browse-tutorials.com/tutorial/converting-codeigniter-query-json
//http://rogue-systems.com/2013/01/24/return-json-with-codeigniter/
//https://ellislab.com/forums/viewthread/243920/#1063749