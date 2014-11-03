<?php

class Fsu extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('FSU_model');
		$data['pgTitle'] = "RezGuide - FSU";
		$data['results'] = $this->FSU_model->getFSUInfo();
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_header');

		$this->load->view('fsu/fsu_general');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function events(){
		$this->load->model('Events_model');
		$data['pgTitle'] = "RezGuide - FSU - Events";
		$data['results'] = $this->Events_model->getEvents(1);
		$data['scrollTarget'] = "#classifiedSection";
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_header');

		$this->load->view('fsu/fsu_events');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function contests(){
		$this->load->model('Contests_model');
		$data['pgTitle'] = "RezGuide - FSU - Contests";
		$data['results'] = $this->Contests_model->getContests(1);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_header');

		$this->load->view('fsu/fsu_contests');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}
}