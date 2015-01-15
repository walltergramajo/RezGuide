<?php

class Campus extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		// $this->load->library('form_validation');
		// $rules = array(
						
		// 			);
		// $this->form_validation->set_rules($rules);
	}

	public function index() {
		$this->news();
	}

	public function news() {
		$data['pgTitle'] = "RezGuide Add An Upcoming Event";
		$data['ZoneTitle'] = "Add";
		$data['sectTitle'] = "Campus News";
			$data['controller_uri'] = "campus";
			$data['function_uri'] = "news";
		$data['formstart'] = form_open('add/insert_record/news_upcoming', array('id' => 'newsEvent'));
			$data['location'] = form_input(array(
									'name' => 'location',
									'type' => 'text',
									'placeholder' => 'Location'
			));
            $data['date'] = form_input(array(
									'name' => 'date',
									'type' => 'text',
									'placeholder' => 'DD / MM / YY'
			));
			$data['time'] = form_input(array(
									'name' => 'time',
									'type' => 'text',
									'placeholder' => 'Time'
			));
			$data['name'] = form_input(array(
									'name' => 'name',
									'type' => 'text',
									'placeholder' => 'Title'
			));
			$data['content'] = form_textarea(array(
									'name' => 'desc',
									'placeholder' => 'Content'
			));
			$data['category'] = form_hidden('news_category', 3);
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('campus/campus_options_menu');
		$this->load->view('templates/add_edit');
		$this->load->view('add/newsform');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function events(){
		$data['pgTitle'] = "RezGuide Add An Event";
		$data['ZoneTitle'] = "Add";
		$data['sectTitle'] = "Campus Event";
			$data['controller_uri'] = "cammpus";
			$data['function_uri'] = "events";
		$data['formstart'] = form_open('add/insert_record/news_event', array('id' => 'newsEvent'));
			$data['location'] = form_input(array(
									'name' => 'location',
									'type' => 'text',
									'placeholder' => 'Location'
			));
            $data['date'] = form_input(array(
									'name' => 'date',
									'type' => 'text',
									'placeholder' => 'DD / MM / YY'
			));
			$data['time'] = form_input(array(
									'name' => 'time',
									'type' => 'text',
									'placeholder' => 'Time'
			));
			$data['name'] = form_input(array(
									'name' => 'name',
									'type' => 'text',
									'placeholder' => 'Title'
			));
			$data['content'] = form_textarea(array(
									'name' => 'desc',
									'placeholder' => 'Content'
			));
			$data['category'] = form_hidden('news_category', 1);
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('campus/campus_options_menu');
		$this->load->view('templates/add_edit');
		$this->load->view('add/newsform');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function offers() {
		$data['pgTitle'] = "RezGuide Add A Monthly Event";
		$data['ZoneTitle'] = "Add";
		$data['sectTitle'] = "Campus Promotion";
			$data['controller_uri'] = "campus";
			$data['function_uri'] = "offers";
		$data['formstart'] = form_open('add/insert_record/news_monthly', array('id' => 'newsEvent'));
			$data['location'] = form_input(array(
									'name' => 'location',
									'type' => 'text',
									'placeholder' => 'Location'
			));
            $data['date'] = form_input(array(
									'name' => 'date',
									'type' => 'text',
									'placeholder' => 'DD / MM / YY'
			));
			$data['time'] = form_input(array(
									'name' => 'time',
									'type' => 'text',
									'placeholder' => 'Time'
			));
			$data['name'] = form_input(array(
									'name' => 'name',
									'type' => 'text',
									'placeholder' => 'Title'
			));
			$data['content'] = form_textarea(array(
									'name' => 'desc',
									'placeholder' => 'Content'
			));
			$data['category'] = form_hidden('news_category', 2);
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('campus/campus_options_menu');
		$this->load->view('add/newsform');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}