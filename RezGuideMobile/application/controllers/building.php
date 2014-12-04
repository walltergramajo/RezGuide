<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Building extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('templates/head');
		$this->load->view('building/building_dashboard');
		$this->load->view('templates/close');
	}

	public function garbage(){
		$this->load->model('Gbhk_model');
		$data['results'] = $this->Gbhk_model->garbageDays();
		$this->load->view('templates/head',$data);
		$this->load->view('building/building_garbage');
		$this->load->view('templates/close');
	}

	public function housekeeping(){
		$this->load->model('Gbhk_model');
		$data['results'] = $this->Gbhk_model->housekeepingDays();
		$this->load->view('templates/head',$data);
		$this->load->view('building/building_housekeeping');
		$this->load->view('templates/close');
	}

	public function rules(){
		$this->load->model('Building_model');
		$data['results'] = $this->Building_model->rules();
		$this->load->view('templates/head',$data);
		$this->load->view('building/building_rules');
		$this->load->view('templates/close');
	}
}