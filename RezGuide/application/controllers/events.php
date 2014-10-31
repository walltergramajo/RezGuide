<?php

class Events extends CI_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->model('Events_model');
		$this->load->model('Contests_model');
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Events";
		$data['section'] = "Events";
		$data['results'] = $this->Events_model->getEvents(3);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');

		$this->load->view('building/bd_events_events');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function contests(){
		$data['pgTitle'] = "RezGuide - Events - Contests";
		$data['section'] = "Contests";
		$data['results'] = $this->Contests_model->getContests(2);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');

		$this->load->view('building/bd_events_contests');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function programs(){
		$data['pgTitle'] = "RezGuide - Events - Programs";
		$data['section'] = "Programs";
		//$data['results'] = $this->Events_model->getEvents();
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');

		$this->load->view('building/bd_events_programs');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}
}