<?php

class Json {

	public function calendar_events($date = null){
		$this->load->model('Calendar_model');
		date_default_timezone_set('America/Toronto');

		if($date == NULL){
			$date = date('Y-m-d');
		}
		
		$eventResult = $this->Calendar_model->getEvents($date);

		if($eventResult == NULL){
			echo "No Events For This Day";
		}else{
			header('Content-type: application/json');
			echo json_encode($eventResult);
		}
	}
}

//references

//http://stackoverflow.com/questions/5578259/jquery-ui-datepicker-how-to-add-clickable-events-on-particular-dates
//http://browse-tutorials.com/tutorial/converting-codeigniter-query-json
//http://rogue-systems.com/2013/01/24/return-json-with-codeigniter/
//https://ellislab.com/forums/viewthread/243920/#1063749