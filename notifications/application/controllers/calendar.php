<?php

class Calendar extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('Calendar_model');

		$data['events'] = $this->Calendar_model->getEvents();
		$data['pgTitle'] = "Calendar";
		$this->load->view('templates/head', $data);
		$this->load->view('calendar/calendar_header');
		$this->load->view('calendar/calendar');

		$this->load->view('calendar/calEvents');
		$this->load->view('templates/close');
	}

}
