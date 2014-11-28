<?php
	class General extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	function index(){
		$data['pgTitle'] = "General Main Menu";
		$this->load->view('templates/head', $data);
		$this->load->view('general/header');
		$this->load->view('general/general_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function city(){
		$data['pgTitle'] = "Edit City Location";
		$this->load->view('templates/head', $data);
		$this->load->view('general/header');
		$this->load->view('general/general_city_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}	

	function directory(){
		$data['pgTitle'] = "Edit City Location";
		$this->load->view('templates/head', $data);
		$this->load->view('general/header');
		$this->load->view('general/general_directory_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}	

	function information(){
		$data['pgTitle'] = "Edit City Location";
		$this->load->view('templates/head', $data);
		$this->load->view('general/header');
		$this->load->view('general/general_information_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}	

	
}

?>