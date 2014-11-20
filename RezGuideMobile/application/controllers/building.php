<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Building extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('building/building_dashboard');
		$this->load->view('templates/close');
	}
}