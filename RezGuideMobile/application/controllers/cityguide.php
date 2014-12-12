<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cityguide extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('cityguide/cityguide');
		$this->load->view('templates/close');
	}

	public function events(){
		$this->load->model('Events_model');
		$data['results'] = $this->Events_model->getEvents(2);
		$this->load->view('templates/head',$data);
		$this->load->view('cityguide/cg_events');
		$this->load->view('templates/close');
	}

	public function movies(){
		$this->load->model('City_model');
		$data['results'] = $this->City_model->getCity(3);
		$this->load->view('templates/head',$data);
		$this->load->view('cityguide/cg_movies');
		$this->load->view('templates/close');
	}

	public function restaurants(){
		$this->load->model('City_model');
		$data['results'] = $this->City_model->getCity(4);
		$this->load->view('templates/head',$data);
		$this->load->view('cityguide/cg_restaurants');
		$this->load->view('templates/close');
	}

	public function entertainment(){
		$this->load->model('City_model');
		$data['results'] = $this->City_model->getCity(2);
		$this->load->view('templates/head',$data);
		$this->load->view('cityguide/cg_entertainment');
		$this->load->view('templates/close');
	}
}