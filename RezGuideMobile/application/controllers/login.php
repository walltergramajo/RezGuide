<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function index(){
		$this->load->view('templates/head');
		$this->load->view('login');
		$this->load->view('templates/close');
	}

	public function submit(){
		$user = $_GET['uname'];
		$pass = $_GET['pword'];

		$this->load->model('login_model');
		$result = $this->login_model->verify($user,$pass);

		if($result == "confirmed"){
			$this->load->view('templates/head');
			$this->load->view('main_menu');
			$this->load->view('templates/close');
		}else{
			$this->load->view('templates/head');
			$this->load->view('login');
			$this->load->view('templates/close');
		}
	}

	public function logout(){
		$this->load->model('login_model');
		$this->login_model->logout();
		$this->load->view('templates/head');
		$this->load->view('login');
		$this->load->view('templates/close');
	}
}