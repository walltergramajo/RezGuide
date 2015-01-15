<?php

class Add extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$rules = array(
						array(
							'field'   => 'name', 
		                    'label'   => 'Title', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 'desc', 
		                    'label'   => 'Content', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 'location', 
		                    'label'   => 'Location', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 'who', 
		                    'label'   => 'Who Can Enter', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'link', 
		                    'label'   => 'Link', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 's_day', 
		                    'label'   => 'Start Date - Day', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 's_month', 
		                    'label'   => 'Start Date - Month', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 's_year', 
		                    'label'   => 'Start Date - Year', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 'e_day', 
		                    'label'   => 'End Date - Day', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'e_month', 
		                    'label'   => 'End Date - Month', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'e_year', 
		                    'label'   => 'End Date - Year', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'contest_category', 
		                    'label'   => 'db_category', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'event_category', 
		                    'label'   => 'db_category', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'studprice', 
		                    'label'   => 'Student Price', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'gstprice', 
		                    'label'   => 'Guest Price', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'info', 
		                    'label'   => 'More info', 
		                    'rules'   => 'xss_clean'
						)
					);
		$this->form_validation->set_rules($rules);
	}

	public function index(){
		$data['pgTitle'] = "RezGuide Add Main Menu";
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('add/add_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	
	
	public function insert_record($function) {
		$this->load->model('insert_model');
		if ($this->form_validation->run() != FALSE){
			$this->Insert_model->$function();
		}

		if($function == "news_upcoming"){
			$this->news('upcoming');
		}elseif($function == "news_monthly"){
			$this->news('monthly');
		}elseif($function == "news_event"){
			$this->news('event');
		}

		if($function == "fsu_contest"){
			$this->fsu('contests');
		}elseif($function == "fsu_event"){
			$this->fsu('events');
		}

	}

}
