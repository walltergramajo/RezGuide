<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('calendar');
		$this->load->view('templates/close');
	}
}