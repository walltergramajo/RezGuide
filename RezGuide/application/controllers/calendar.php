<?php

class Calendar extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "Calendar";
		$this->load->view('templates/head', $data);
		$this->load->view('calendar/calendar_header');
		$this->load->view('calendar/calendar_2');
		$this->load->view('templates/close');
	}

	public function events_calendar(){
		$this->load->library('Json');
		$data['events'] = $this->json->calendar_events();
		$this->load->view('calendar/calEvents', $data);
	}

	public function day($date){
		$this->load->library('Json');
		$data['events'] = $this->json->day_events($date);
		$this->load->view('calendar/calEvents', $data);
	}

}
