<?php

class Calendar extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "Calendar";
		$this->load->view('templates/head', $data);
		$this->load->view('calendar/calendar_header');

		$this->load->view('calendar/calendar');

		// $prefs = array(
		// 	'show_next_prev' => TRUE,
		// 	'next_prev_url' => base_url().'index.php/calendar/showCal'
		// );

		// $this->load->library('calendar', $prefs);

		
		// $this->load->view('building/bd_header');

		// $data['calendar'] = $this->calendar->generate($this->uri->segment(3),$this->uri->segment(4));
		// $this->load->view('calendar_view',$data);

		$this->load->view('templates/footer');
		$this->load->view('includes/calendar_datepicker');
		// $this->load->view('includes/datepicker');
		$this->load->view('templates/close');
	}
}
