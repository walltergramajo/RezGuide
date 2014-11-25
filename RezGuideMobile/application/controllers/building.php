<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Building extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('building/building_dashboard');
		$this->load->view('templates/close');
	}

	public function garbage(){
		$this->load->view('templates/head');
		$this->load->view('building/building_garbage');
		$this->load->view('templates/close');
	}

	public function housekeeping(){
		$this->load->view('templates/head');
		$this->load->view('building/building_housekeeping');
		$this->load->view('templates/close');
	}

	public function rules(){
		$this->load->view('templates/head');
		$this->load->view('building/building_rules');
		$this->load->view('templates/close');
	}
}