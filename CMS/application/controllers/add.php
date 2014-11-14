<?php

class Add extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	public function index(){
		$data['pgTitle'] = "RezGuide Add Main Menu";
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('add/add_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function notice($page = null){
		// $this->load->model('Notices_model');
		if($page == "complaint"){
			$data['pgTitle'] = "RezGuide Add A Notice";
			$data['section'] = "Notices";
			$data['subSection'] = "Complaint";

				$data['formstart'] = form_open('notices/insert', array('id' => 'warning'));

				$data['studentNum'] = form_input(array(
										'id' => 'studNum',
										'name' => 'studentNum',
										'type' => 'number',
										'placeholder' => '0000000'
				));
                $data['type'] = form_dropdown('type', array(
										'' => 'Type',
										'1' => 'Complaint 1',
										'2' => 'Complaint 2',
										'3' => 'Complaint 3'
				));
				$data['date'] = form_input(array(
										'id' => 'complaintdate',
										'name' => 'date',
										'type' => 'text',
										'placeholder' => 'yyyy/mm/dd'
				));
                $data['building'] = form_dropdown('building', array(
										'' => 'Building',
										'merlin' => 'Merlin',
										'falcon' => 'Falcon',
										'peregrine' => 'Peregrine',
										'kestrel' => 'Kestrel'
				));
				$data['roomNum'] = form_input(array(
										'id' => 'room1',
										'name' => 'roomNum',
										'type' => 'number',
										'placeholder' => 'Room #'
				));
				$data['content'] = form_textarea(array(
										'id' => 'contentText',
										'name' => 'content',
										'type' => 'text',
										'placeholder' => 'Content'
				));
				$data['notices_category'] = form_hidden('notices_category', 1);

			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/notices/complaint');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "fine"){
			$data['pgTitle'] = "RezGuide Add A Notice";
			$data['section'] = "Notices";
			$data['subSection'] = "Fine";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/notices/fine');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "warning"){
			$data['pgTitle'] = "RezGuide Add A Notice";
			$data['section'] = "Notices";
			$data['subSection'] = "Warning";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/notices/warning');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Notices Main Menu";
			$data['section'] = "Notices";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/notices');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function students($page = null){
		if($page == "pg3") {
			$data['pgTitle'] = "RezGuide Add A Student";
			$data['section'] = "A New Student";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/students/page3');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else if($page == "pg2") {
			$data['pgTitle'] = "RezGuide Add A Student";
			$data['section'] = "A New Student";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/students/page2');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Add A Student";
			$data['section'] = "A New Student";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/students/page1');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

}











