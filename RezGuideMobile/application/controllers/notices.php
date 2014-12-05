<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notices extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Notices_model');
	}

	public function index(){
		$data['results'] = $this->Notices_model->getComplaints($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('notices/notices_complaints');
		$this->load->view('templates/close');
	}

	public function complaints(){
		$data['results'] = $this->Notices_model->getComplaints($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('notices/notices_complaints');
		$this->load->view('templates/close');
	}

	public function warnings(){
		$data['results'] = $this->Notices_model->getWarnings($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('notices/notices_warnings');
		$this->load->view('templates/close');
	}

	public function maintenance(){
		$data['results'] = $this->Notices_model->getMaintenance($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('notices/notices_maintenance');
		$this->load->view('templates/close');
	}
}