<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('events/events_programs');
		$this->load->view('templates/close');
	}

	public function programs(){
		$this->load->view('templates/head');
		$this->load->view('events/events_programs');
		$this->load->view('templates/close');
	}

	public function building_events(){
		$this->load->view('templates/head');
		$this->load->view('events/events_events');
		$this->load->view('templates/close');
	}

	public function contests(){
		$this->load->view('templates/head');
		$this->load->view('events/events_contests');
		$this->load->view('templates/close');
	}
}