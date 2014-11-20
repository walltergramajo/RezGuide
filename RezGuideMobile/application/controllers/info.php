<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('info/general_info');
		$this->load->view('templates/close');
	}
}