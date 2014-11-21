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
			$this->load->view('add/noticeform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "fine"){
			$data['pgTitle'] = "RezGuide Add A Notice";
			$data['section'] = "Notices";
			$data['subSection'] = "Fine";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/noticeform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "warning"){
			$data['pgTitle'] = "RezGuide Add A Notice";
			$data['section'] = "Notices";
			$data['subSection'] = "Warning";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/noticeform');
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

	public function news($page = null){
		// $this->load->model('Notices_model');
		if($page == "upcoming"){
			$data['pgTitle'] = "RezGuide Add An Upcoming Event";
			$data['section'] = "News";
			$data['subSection'] = "an upcoming event";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/newsform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "monthly"){
			$data['pgTitle'] = "RezGuide Add A Monthly Event";
			$data['section'] = "News";
			$data['subSection'] = "a monthly event";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/newsform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "event"){
			$data['pgTitle'] = "RezGuide Add An Event";
			$data['section'] = "News";
			$data['subSection'] = "an event";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/newsform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide News Main Menu";
			$data['section'] = "News";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/news');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function building($page = null){
		// $this->load->model('Notices_model');
		if($page == "contests"){
			$data['pgTitle'] = "RezGuide Add An Upcoming Event";
			$data['section'] = "Building";
			$data['subSection'] = "a Building Contest";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "events"){
			$data['pgTitle'] = "RezGuide Add A Monthly Event";
			$data['section'] = "Building";
			$data['subSection'] = "a Building Event";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "programs"){
			$data['pgTitle'] = "RezGuide Add An Event";
			$data['section'] = "Building";
			$data['subSection'] = "a Building Program";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Building Events Main Menu";
			$data['section'] = "Building";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/building');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function fsu($page = null){
		// $this->load->model('Notices_model');
		if($page == "contests"){
			$data['pgTitle'] = "RezGuide Add An Upcoming Event";
			$data['section'] = "FSU";
			$data['subSection'] = "an FSU Contest";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "events"){
			$data['pgTitle'] = "RezGuide Add FSU Event";
			$data['section'] = "FSU";
			$data['subSection'] = "an FSU Event";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Fanshawe Student Union";
			$data['section'] = "FSU";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/fsu');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function general($page = null){
		// $this->load->model('Notices_model');
		if($page == "city"){
			$data['pgTitle'] = "RezGuide Add A City Location";
			$data['section'] = "General";
			$data['subSection'] = "City Locations";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/general/city');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "directory"){
			$data['pgTitle'] = "RezGuide Add A User to Directory";
			$data['section'] = "General";
			$data['subSection'] = "Directory";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/general/directory');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "information"){
			$data['pgTitle'] = "RezGuide Add LTC Information";
			$data['section'] = "General";
			$data['subSection'] = "LTC Information";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/general/information');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Fanshawe Student Union";
			$data['section'] = "General";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/general');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	

}











