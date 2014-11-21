<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('account/account_profile');
		$this->load->view('templates/close');
	}

	public function profile(){
		$this->load->view('templates/head');
		$this->load->view('account/account_profile');
		$this->load->view('templates/close');
	}

	public function points(){
		$this->load->view('templates/head');
		$this->load->view('account/account_points');
		$this->load->view('templates/close');
	}

	public function balance(){
		$this->load->view('templates/head');
		$this->load->view('account/account_balance');
		$this->load->view('templates/close');
	}
}