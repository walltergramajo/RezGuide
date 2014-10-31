<?php

class Add extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide Add Main Menu";
		$this->load->view('templates/head',$data);
		$this->load->view('/add/add_header');
		$this->load->view('/add/add_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}