<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classifieds extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Classifieds_model');
	}

	public function index(){
		$data['results'] = $this->Classifieds_model->getClassifiedsBuy();
		$this->load->view('templates/head',$data);
		$this->load->view('classifieds/classifieds_buy');
		$this->load->view('templates/close');
	}

	public function buy(){
		$data['results'] = $this->Classifieds_model->getClassifiedsBuy();
		$this->load->view('templates/head',$data);
		$this->load->view('classifieds/classifieds_buy');
		$this->load->view('templates/close');
	}

	public function sell(){
		$data['results'] = $this->Classifieds_model->getClassifiedsSell();
		$this->load->view('templates/head',$data);
		$this->load->view('classifieds/classifieds_sell');
		$this->load->view('templates/close');
	}

	public function create(){
		$this->load->view('templates/head');
		$this->load->view('classifieds/classifieds_create');
		$this->load->view('templates/close');
	}
}