<?php

class Students extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		
		$this->load->library('form_validation');
	}

	public function index(){
		$this->information();
	}

	public function information($edit = null){
		if($edit == 'edit'){
			$data['pgTitle'] = "RezGuide Add A Student";
			$data['section'] = "Add A New Student";
			$data['subTitle'] = "Add Student Info";
				$data['controller_uri'] = "students";
				$data['function_uri'] = "information";
			$data['studentName'] = form_input(array(
									'id' => 'nameSearch',
									'name' => 'studentName',
									'type' => 'text',
									'placeholder' => 'John Smith, 000000',
									'onkeyup' => 'ajaxSearch()'
			));

			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('templates/add_edit');
			$this->load->view('students/studentsearch');
			$this->load->view('templates/footer');
			$this->load->view('livesearch_script');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Add A Student";
			$data['section'] = "Add A New Student";
			$data['subTitle'] = "Add Student Info";
				$data['controller_uri'] = "students";
				$data['function_uri'] = "information";
			$data['formstart'] = form_open('students/insert_record/stud_info', array('id' => 'newStudent'));
				$data['firstname'] = form_input(array(
						'name' => 'firstname',
						'id' => 'first',
						'type' => 'text',
						'placeholder' => 'First Name',
				));
				$data['lastname'] = form_input(array(
						'name' => 'lastname',
						'id' => 'last',
						'type' => 'text',
						'placeholder' => 'Last Name',
				));
				$data['program'] = form_input(array(
						'name' => 'program',
						'id' => 'program',
						'type' => 'text',
						'placeholder' => 'Program',
				));
				$data['username'] = form_input(array(
						'name' => 'username',
						'type' => 'text',
						'placeholder' => 'Username',
				));
				$data['password'] = form_input(array(
						'name' => 'password',
						'type' => 'text',
						'placeholder' => 'Password',
				));
				$data['cellphone'] = form_input(array(
						'name' => 'cellphone',
						'type' => 'text',
						'placeholder' => 'cellphone#',
				));
				$data['phone'] = form_input(array(
						'name' => 'phone',
						'type' => 'text',
						'placeholder' => 'phone#',
				));
				$data['email'] = form_input(array(
						'name' => 'email',
						'type' => 'email',
						'placeholder' => 'email address',
				));
				$data['studentnum'] = form_input(array(
						'name' => 'studentnum',
						'type' => 'text',
						'placeholder' => 'student#',
				));
				$data['building'] = form_dropdown('building', array(
						'' => 'Building',
						'falcon' => 'Falcon',
						'peregrine' => 'Peregrine',
						'merlin' => 'Merlin',
						'kestrel' => 'Kestrel'
				));
				$data['roomnum'] = form_input(array(
						'name' => 'roomnum',
						'type' => 'text',
						'placeholder' => 'Room Number',
				));
				$data['address'] = form_input(array(
						'name' => 'address',
						'type' => 'text',
						'placeholder' => 'address',
				));
				$data['facebook'] = form_input(array(
						'name' => 'fb',
						'type' => 'text',
						'placeholder' => 'www.facebook.com',
				));
				$data['twitter'] = form_input(array(
						'name' => 'tw',
						'type' => 'text',
						'placeholder' => 'www.twitter.com',
				));
				$data['linkedin'] = form_input(array(
						'name' => 'ln',
						'type' => 'text',
						'placeholder' => 'www.linkedin.com',
				));
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('templates/add_edit');
			$this->load->view('students/information');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function balance(){
		$data['pgTitle'] = "RezGuide Add A Student";
		$data['section'] = "Add A New Student";
		$data['subTitle'] = "Add Student Info";
			$data['controller_uri'] = "students";
			$data['function_uri'] = "balance";
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('students/students_options_menu');
		$this->load->view('templates/add_edit');
		$this->load->view('students/balance');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function mealplan(){
		$data['pgTitle'] = "RezGuide Add A Student";
		$data['section'] = "Add A New Student";
		$data['subTitle'] = "Add Student Info";
			$data['controller_uri'] = "students";
			$data['function_uri'] = "mealplan";
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('students/students_options_menu');
		$this->load->view('templates/add_edit');
		$this->load->view('students/mealplan');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function insert_record($function){
		$this->load->model('insert_model');
		$this->insert_model->$function();
		
		if($function == "stud_info"){
			$this->information();
		}
	}

}