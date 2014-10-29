<?php

class Main extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('main_model');
		$data['pgTitle'] = "RezGuide Content Management System Home";
		$data['greetings'] = $this->Main_model->greeting();
		$this->load->view('templates/head',$data);
		$this->load->view('admin_menu',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}