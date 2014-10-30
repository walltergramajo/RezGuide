<?php

class Calendar extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "Calendar";
		$this->load->view('templates/head', $data);
		$this->load->view('calendar/calendar_header');
		//$this->load->view('calendar_test');

		$this->load->view('calendar/calendar');

		$this->load->view('templates/footer');
		$this->load->view('includes/calendar_datepicker');
		$this->load->view('includes/datepicker');
		$this->load->view('templates/close');
	}
}
