<?php
	class Building_Events extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	function index(){
		$data['pgTitle'] = "Building Events Menu";
		$this->load->view('templates/head', $data);
		$this->load->view('building/building_header');
		$this->load->view('building/building_events_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function contests(){
		$data['pgTitle'] = "Building Contest Select";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('edit/building/building_contests_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function event_select(){
		$data['pgTitle'] = "Building Event Select";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('edit/building/building_events_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function program_select(){
		$data['pgTitle'] = "Building Program Select";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('edit/building/building_program_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}
}

?>