<?php

class Notices extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		// $this->load->library('form_validation');
		// $rules = array(
						
		// 			);
		// $this->form_validation->set_rules($rules);
	}

	public function index(){
		$this->complaint();
	}

	public function complaint(){
		$data['pgTitle'] = "RezGuide Add A Notice";
		$data['section'] = "notices";
		$data['subSection'] = "Complaint";
		$data['subTitle'] = "Add Complaint";
		$data['uri'] = "complaint";

			$data['formstart'] = form_open('notices/insert', array('id' => 'warning'));

			$data['studentName'] = form_input(array(
									'id' => 'nameSearch',
									'name' => 'studentName',
									'type' => 'text',
									'placeholder' => 'John Smith, 000000',
									'onkeyup' => 'ajaxSearch()'
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
		$this->load->view('notices/notices_options_menu');
		$this->load->view('add/noticeform');
		$this->load->view('templates/footer');
		$this->load->view('livesearch_script');
		$this->load->view('templates/close');
	}

	public function fine(){
		$data['pgTitle'] = "RezGuide Add A Notice";
		$data['section'] = "notices";
		$data['subSection'] = "Fine";
		$data['subTitle'] = "Add Fine";
		$data['uri'] = "fine";


			$data['formstart'] = form_open('notices/insert', array('id' => 'warning'));

			$data['studentName'] = form_input(array(
									'id' => 'nameSearch',
									'name' => 'studentName',
									'type' => 'text',
									'placeholder' => 'John Smith, 000000',
									'onkeyup' => 'ajaxSearch()'
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
		$this->load->view('notices/notices_options_menu');
		$this->load->view('add/noticeform');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function warning() {
		$data['pgTitle'] = "RezGuide Add A Notice";
		$data['section'] = "notices";
		$data['subSection'] = "Warning";
		$data['subTitle'] = "Add Warning";
		$data['uri'] = "warning";


			$data['formstart'] = form_open('notices/insert', array('id' => 'warning'));

			$data['studentName'] = form_input(array(
									'id' => 'nameSearch',
									'name' => 'studentName',
									'type' => 'text',
									'placeholder' => 'John Smith, 000000',
									'onkeyup' => 'ajaxSearch()'
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
		$this->load->view('notices/notices_options_menu');
		$this->load->view('add/noticeform');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}