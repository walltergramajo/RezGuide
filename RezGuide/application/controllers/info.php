<?php

class Info extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('City_model');
		$data['pgTitle'] = "RezGuide - Info";
		$data['results'] = $this->City_model->getCity(1);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('info/info_header');

		$this->load->view('info/info_general');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function cityguide($cat = null){
		$this->load->model('City_model');

		switch ($cat) {
			case 'general':
				$cat = 1;
				break;

			case 'entertainment':
				$cat = 2;
				break;

			case 'movies':
				$cat = 3;
				break;

			case 'restaurants':
				$cat = 4;
				break;
			
			default:
				$cat = null;
				break;
		}

		$data['pgTitle'] = "RezGuide - City Guide";
		$data['results'] = $this->City_model->getCity($cat);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('info/info_header');

		$this->load->view('info/info_cityguide');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function directory(){
		$this->load->model('Directory_model');
		$data['pgTitle'] = "RezGuide - Directory";
		$data['results'] = $this->Directory_model->getDirectory();
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('info/info_header');

		$this->load->view('info/info_directory');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}
}