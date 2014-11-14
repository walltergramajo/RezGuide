<?php

class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		// $this->load->helper('welcome_helper');
	}

	public function index(){
		$data['pgTitle'] = "RezGuide Content Management System Home";
		// $data['greeting'] = welcomeMessage();
		$this->load->view('templates/head',$data);
		$this->load->view('admin_menu');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}