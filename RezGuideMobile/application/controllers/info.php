<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('info/general_info');
		$this->load->view('templates/close');
	}

	public function ltc(){
		$this->load->view('templates/head');
		$this->load->view('info/ltc');
		$this->load->view('templates/close');
	}

	public function directory(){
		$this->load->model('Directory_model');
		$data['results'] = $this->Directory_model->getDirectory();
		$this->load->view('templates/head',$data);
		$this->load->view('info/directory');
		$this->load->view('templates/close');
	}
}