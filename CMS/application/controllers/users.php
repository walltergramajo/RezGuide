<?php
	class users extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	function index(){
		$data['pgTitle'] = "Users Main Menu";
		$this->load->view('templates/head', $data);
		$this->load->view('users/header');
		$this->load->view('users/users_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function users_add(){
		$data['pgTitle'] = "Add Users";
		$this->load->view('templates/head', $data);
		$this->load->view('users/header');
		$this->load->view('users/users_add');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function users_edit(){
		$data['pgTitle'] = "Edit Users";
		$this->load->view('templates/head', $data);
		$this->load->view('users/header');
		$this->load->view('users/users_edit');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function users_delete(){
		$data['pgTitle'] = "Delete Users";
		$this->load->view('templates/head', $data);
		$this->load->view('users/header');
		$this->load->view('users/users_delete');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}
}

?>