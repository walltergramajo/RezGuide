<?php
	class Building extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	function index(){
		$data['pgTitle'] = "Building Main Menu";
		$this->load->view('templates/head', $data);
		$this->load->view('building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function contests(){
		$data['pgTitle'] = "Building Contests Add";
		$this->load->view('templates/head', $data);
		$this->load->view('building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('building/building_contests');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function contests_edit(){
		$data['pgTitle'] = "Building Contests Edit";
		$this->load->view('templates/head', $data);
		$this->load->view('building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('building/building_contests_edit_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function garbage(){
		$data['pgTitle'] = "Building Garbage Day";
		$data['subSection'] = "Garbage Day";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('building/building_garbage_housekeeping');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function housekeeping(){
		$data['pgTitle'] = "Building Housekeeping Day";
		$data['subSection'] = "Housekeeping Day";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/header');
		$this->load->view('edit/building/building_housekeeping');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function rules(){
		$data['pgTitle'] = "Building Rules &amp; Regulations";
		$data['subSection'] = "Rules and Regulations";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('edit/building/building_rules');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function events(){
		$data['pgTitle'] = "Building Events Main";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/header');
		$this->load->view('edit/building/building_events_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}
}

?>