<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fsu extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('fsu/fsu');
		$this->load->view('templates/close');
	}

	public function events(){
		$this->load->model('Events_model');
		$data['results'] = $this->Events_model->getEvents(1);
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_events');
		$this->load->view('templates/close');
	}

	public function contests(){
		$this->load->model('Contests_model');
		$data['results'] = $this->Contests_model->getContests(1);
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_contests');
		$this->load->view('templates/close');
	}

	public function info(){
		$this->load->model('FSU_model');
		$data['results'] = $this->FSU_model->getFSUInfo();
		$this->load->view('templates/head',$data);
		$this->load->view('fsu/fsu_info');
		$this->load->view('templates/close');
	}
}