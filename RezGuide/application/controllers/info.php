<?php

class Info extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Info";
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('info/info_header');

		$this->load->view('info/info_general');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function cityguide(){
		$this->load->model('Events_model');
		$data['pgTitle'] = "RezGuide - City Guide";
		$data['results'] = $this->Events_model->getEvents(2);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('info/info_header');

		$this->load->view('info/info_cityguide');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function directory(){
		$this->load->model('Directory_model');
		$data['pgTitle'] = "RezGuide - Directory";
		$data['results'] = $this->Directory_model->getDirectory();
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('info/info_header');

		$this->load->view('info/info_directory');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}
}