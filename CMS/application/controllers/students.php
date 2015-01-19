<?php

class Students extends CI_Controller {

	public function index(){
		$data['pgTitle'] = "RezGuide Add A Student";
		$data['section'] = "Add A New Student";
		$data['subTitle'] = "Add Student Info";
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('students/students_options_menu');
		$this->load->view('students/information');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function balance(){
		$data['pgTitle'] = "RezGuide Add A Student";
		$data['section'] = "Add A New Student";
		$data['subTitle'] = "Add Student Info";
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('students/students_options_menu');
		$this->load->view('students/balance');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function mealplan(){
		$data['pgTitle'] = "RezGuide Add A Student";
		$data['section'] = "Add A New Student";
		$data['subTitle'] = "Add Student Info";
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('students/students_options_menu');
		$this->load->view('students/mealplan');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}