<?php

class Fsu extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - FSU";
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_header');

		$this->load->view('fsu/fsu_general');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function events(){
		$data['pgTitle'] = "RezGuide - FSU - Events";
		$data['scrollTarget'] = "#classifiedSection";
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_header');

		$this->load->view('fsu/fsu_events');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function contests(){
		$data['pgTitle'] = "RezGuide - FSU - Contests";
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_header');

		$this->load->view('fsu/fsu_contests');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}
}