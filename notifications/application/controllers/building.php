<?php

class Building extends CI_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->model('Building_model');
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Building Dashboard";
		$data['section'] = "";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header_main');
		
		$this->load->view('building/building_main');

		$this->load->view('templates/footer');
		$this->load->view('templates/close');

	}

	public function garbage(){
		$data['pgTitle'] = "RezGuide - Building Dashboard - Garbage";
		$data['section'] = "Garbage";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');

		$this->load->view('building/bd_building_garbage');

		$this->load->view('templates/footer');
		$this->load->view('templates/close');

	}

	public function housekeeping(){
		$data['pgTitle'] = "RezGuide - Building Dashboard - Housekeeping";
		$data['section'] = "Housekeeping";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');
		
		$this->load->view('building/bd_building_housekeeping');

		$this->load->view('templates/footer');
		$this->load->view('templates/close');

	}

	public function rules(){
		
		$data['pgTitle'] = "RezGuide - Building Dashboard - Rules";
		$data['section'] = "Rules";
		$data['results'] = $this->Building_model->rules();
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');
		
		$this->load->view('building/bd_building_rules');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');

	}

}