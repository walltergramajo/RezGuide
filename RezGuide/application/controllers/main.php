<?php

class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Main Menu";
		$this->load->view('templates/head',$data);
		$this->load->view('main_menu');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}