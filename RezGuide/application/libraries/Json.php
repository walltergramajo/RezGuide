<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json {
	public function __construct(){
		$CI =& get_instance();
		$CI->load->helper('url');
		$CI->load->library('session');
	}

	public function calendar_events(){
		$CI =& get_instance();
		$CI->load->model('Calendar_model');
		
		$eventResult = $CI->Calendar_model->getAllEvents();

		if($eventResult == NULL){
			echo "No Events For The Calendar";
		}else{
			header('Content-type: application/json');
			echo json_encode($eventResult);
		}
	}

	public function day_events($date = null){
		$CI =& get_instance();
		$CI->load->model('Calendar_model');
		date_default_timezone_set('America/Toronto');

		if($date == NULL){
			$date = date('Y-m-d');
		}
		
		$eventResult = $CI->Calendar_model->getEvents($date);

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