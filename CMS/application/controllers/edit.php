<?php

class Edit extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide Edit Main Menu";
		$this->load->view('templates/head',$data);
		$this->load->view('/edit/edit_header');
		$this->load->view('/edit/edit_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}