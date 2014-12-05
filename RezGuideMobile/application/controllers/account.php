<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Account_model');
	}

	public function index(){
		$data['results'] = $this->Account_model->studentData($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('account/account_profile');
		$this->load->view('templates/close');
	}

	public function profile(){
		$data['results'] = $this->Account_model->studentData($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('account/account_profile');
		$this->load->view('templates/close');
	}

	public function points(){
		$data['results'] = $this->Account_model->getPoints($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('account/account_points');
		$this->load->view('templates/close');
	}

	public function balance(){
		$this->load->view('templates/head');
		$this->load->view('account/account_balance');
		$this->load->view('templates/close');
	}

	public function update(){
		$this->Account_model->updateProfile();
	}
}