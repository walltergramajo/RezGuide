<?php

class Calendar extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index($date = null){
		$this->load->model('Calendar_model');

		if($date == null){
			$date = date();
		}
		$data['events'] = $this->Calendar_model->getEvents($date);
		$data['pgTitle'] = "Calendar";
		$this->load->view('templates/head', $data);
		$this->load->view('calendar/calendar_header');
		$this->load->view('calendar/calendar');

		$this->load->view('calendar/calEvents');
		$this->load->view('templates/close');
	}

}
