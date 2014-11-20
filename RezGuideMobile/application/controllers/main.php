<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('main_menu');
		$this->load->view('templates/close');
	}
}