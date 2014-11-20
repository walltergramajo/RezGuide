<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('personal_dashboard');
		$this->load->view('templates/close');
	}
}