<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classpath extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('classpath/classpath_start');
		$this->load->view('templates/close');
	}
}