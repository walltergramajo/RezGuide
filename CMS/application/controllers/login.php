<?php

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Login";
		$this->load->view('templates/head',$data);
		$this->load->view('login');
		$this->load->view('templates/close');
	}

	public function submit(){
		$user = $_GET['uname'];
		$pass = $_GET['pword'];

		$this->load->model('login_model');
		$result = $this->login_model->verify($user,$pass);

		if($result == "confirmed"){
			$data['pgTitle'] = "RezGuide Content Management System Home";
			$this->load->view('templates/head',$data);
			$this->load->view('admin_menu');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function logout(){
		$this->load->model('login_model');
		$this->login_model->logout();
		$data['pgTitle'] = "RezGuide - Login";
		$this->load->view('templates/head',$data);
		$this->load->view('login');
		$this->load->view('templates/close');
	}
}