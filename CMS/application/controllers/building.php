<?php
	class Building extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	function index(){
		$data['pgTitle'] = "Building Main Menu";
		$this->load->view('templates/head', $data);
		$this->load->view('building/header');
		$this->load->view('building/building_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function garbage(){
		$data['pgTitle'] = "Building Garbage Day";
		$this->load->view('templates/head', $data);
		$this->load->view('building/header');
		$this->load->view('building/building_garbage');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function housekeeping(){
		$data['pgTitle'] = "Building Housekeeping Day";
		$this->load->view('templates/head', $data);
		$this->load->view('building/header');
		$this->load->view('building/building_housekeeping');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function rules(){
		$data['pgTitle'] = "Building Rules &amp; Regulations";
		$this->load->view('templates/head', $data);
		$this->load->view('building/header');
		$this->load->view('building/building_rules');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function events(){
		$data['pgTitle'] = "Building Events Main";
		$this->load->view('templates/head', $data);
		$this->load->view('building/header');
		$this->load->view('building/building_events_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}
}

?>