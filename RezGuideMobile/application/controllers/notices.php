<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notices extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('notices/notices_complaints');
		$this->load->view('templates/close');
	}

	public function complaints(){
		$this->load->view('templates/head');
		$this->load->view('notices/notices_complaints');
		$this->load->view('templates/close');
	}

	public function warnings(){
		$this->load->view('templates/head');
		$this->load->view('notices/notices_warnings');
		$this->load->view('templates/close');
	}

	public function maintenance(){
		$this->load->view('templates/head');
		$this->load->view('notices/notices_maintenance');
		$this->load->view('templates/close');
	}
}