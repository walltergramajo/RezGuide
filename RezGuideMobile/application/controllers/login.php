<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function index(){
		$this->load->view('templates/head');
		$this->load->view('login');
		$this->load->view('templates/close');
	}
}