<?php

class Classifieds extends CI_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->model('Classifieds_model');
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Classifieds - Sell";
		$data['section'] = "Classifieds";
		$data['results'] = $this->Classifieds_model->getClassifiedsSell();
		$data['scrollTarget'] = "#classifiedSection";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');

		$this->load->view('building/bd_classified_sell');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function sell($cat = null){
		switch ($cat) {
			case 'books':
				$cat = 1;
				break;
			case 'clothing':
				$cat = 2;
				break;
			case 'furniture':
				$cat = 3;
				break;
			case 'electronics':
				$cat = 4;
				break;
			case 'other':
				$cat = 5;
				break;
		}
		$data['pgTitle'] = "RezGuide - Classifieds - Sell";
		$data['section'] = "Classifieds";
		$data['results'] = $this->Classifieds_model->getClassifiedsSell($cat);
		$data['scrollTarget'] = "#classifiedSection";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');

		$this->load->view('building/bd_classified_sell');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function create(){
		$data['pgTitle'] = "RezGuide - Classifieds - Create";
		$data['section'] = "Classifieds";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');

		$this->load->view('building/bd_classified_create');

		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function create_classified(){
		if($this->input->post('submit')){
			$this->Classifieds_model->createClassified();
		}
	}

	public function buy($cat = null){
		switch ($cat) {
			case 'books':
				$cat = 1;
				break;
			case 'clothing':
				$cat = 2;
				break;
			case 'furniture':
				$cat = 3;
				break;
			case 'electronics':
				$cat = 4;
				break;
			case 'other':
				$cat = 5;
				break;
		}
		$data['pgTitle'] = "RezGuide - Classifieds - Buy";
		$data['section'] = "Classifieds";
		$data['results'] = $this->Classifieds_model->getClassifiedsBuy($cat);
		$data['scrollTarget'] = "#classifiedSection";
		$this->load->view('templates/head',$data);
		$this->load->view('building/bd_header');

		$this->load->view('building/bd_classified_buy');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}
}