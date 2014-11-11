<?php

class Json extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function calendarJson($date = null){
		$this->load->model('Calendar_model');
		date_default_timezone_set('America/Toronto');

		if($date == null){
			$date = date('d-m-Y');
		}

		header('Content-type: application/json');
		echo json_encode($this->Calendar_model->getEvents($date));
	}
}