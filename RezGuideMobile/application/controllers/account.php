<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Account_model');
	}

	public function index(){
		$data['results'] = $this->Account_model->studentData($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('account/account_profile');
		$this->load->view('templates/close');
	}

	public function profile(){
		$data['results'] = $this->Account_model->studentData($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('account/account_profile');
		$this->load->view('templates/close');
	}

	public function points(){
		$data['results'] = $this->Account_model->getPoints($this->session->userdata('sId'));
		$this->load->view('templates/head',$data);
		$this->load->view('account/account_points');
		$this->load->view('templates/close');
	}

	public function balance(){
		$this->load->view('templates/head');
		$this->load->view('account/account_balance');
		$this->load->view('templates/close');
	}

	public function update(){
		$formData = array(
			'students_firstname' => $this->input->post('first_name'),
			'students_lastname' => $this->input->post('last_name'),
			'students_program' => $this->input->post('program'),
			'students_cellphone' => $this->input->post('cell_phone'),
			'students_address' => $this->input->post('address'),
			'students_facebook' => $this->input->post('facebook'),
			'students_twitter' => $this->input->post('twitter')
		);
		$id = $this->session->userdata('sId');
		$this->Account_model->updateProfile($formData,$id);
		profile();
	}
}