<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requests extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('requests/requests_general');
		$this->load->view('templates/close');
	}

	public function general(){
		$this->load->view('templates/head');
		$this->load->view('requests/requests_general');
		$this->load->view('templates/close');
	}

	public function mediation(){
		$this->load->view('templates/head');
		$this->load->view('requests/requests_mediation');
		$this->load->view('templates/close');
	}

	public function withdraw(){
		$this->load->view('templates/head');
		$this->load->view('requests/requests_withdraw');
		$this->load->view('templates/close');
	}
}