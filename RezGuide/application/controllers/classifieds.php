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
			if($this->input->post('type') === 'buy'){
				$buy = 1;
				$sell = 0;
			}elseif($this->input->post('type') === 'sell'){
				$buy = 0;
				$sell = 1;
			}

			if($this->input->post('condition') === 'new'){
				$new = 1;
				$used = 0;
			}elseif($this->input->post('condition') === 'used'){
				$new = 0;
				$used = 1;
			}

			$classified = array(
				'classifieds_user' => $this->session->userdata('username'),
				'classifieds_title' => $this->input->post('title'),
				'classifieds_description' => $this->input->post('itemDescription'),
				'classifieds_email' => $this->input->post('email'),
				'classifieds_phone' => $this->input->post('phone'),
				'classifieds_buy' => $buy,
				'classifieds_sell' => $sell,
				'classifieds_new' => $new,
				'classifieds_used' => $used,
				'classifieds_price' => $this->input->post('price'),
				'classCat_id' => $this->input->post('category'),
				'students_id' => $this->session->userdata('sId')
			);
			$this->Classifieds_model->createClassified($classified);
			create();
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