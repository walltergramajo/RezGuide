<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cityguide extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('cityguide/cityguide');
		$this->load->view('templates/close');
	}

	public function events(){
		$this->load->view('templates/head');
		$this->load->view('cityguide/cg_events');
		$this->load->view('templates/close');
	}

	public function movies(){
		$this->load->view('templates/head');
		$this->load->view('cityguide/cg_movies');
		$this->load->view('templates/close');
	}

	public function restaurants(){
		$this->load->view('templates/head');
		$this->load->view('cityguide/cg_restaurants');
		$this->load->view('templates/close');
	}

	public function entertainment(){
		$this->load->view('templates/head');
		$this->load->view('cityguide/cg_entertainment');
		$this->load->view('templates/close');
	}
}