<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fsu extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('fsu/fsu');
		$this->load->view('templates/close');
	}
}