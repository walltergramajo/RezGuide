<?php

class Students extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function allStudents(){
		$this->load->model('Students_model');
		
		$data['pgTitle'] = "Students";
		$data['results'] = $this->Students_model->getAllStudents();
		$this->load->view('templates/head', $data);
		
		$this->load->view('student_view', $data);

		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function oneStudent($who){
		$data['pgTitle'] = "Students";
		$single = $this->Students_model->getOneStudent($who);

		$this->load->view('templates/head', $data);

		$this->load->view('sudent_view', $single);

		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}
}