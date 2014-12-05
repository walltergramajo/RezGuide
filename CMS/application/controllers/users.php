<?php
	class Users extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('update_model');
	}

	public function index(){
		$data['pgTitle'] = "Users Main Menu";
		$this->load->view('templates/head', $data);
		$this->load->view('users/header');
		$this->load->view('users/users_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function add(){
		$data['pgTitle'] = "Add Users";
		$this->load->view('templates/head', $data);
		$this->load->view('users/header');
		$this->load->view('users/users_add');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function edit($userId = null){
		if($userId != null){
			$data['pgTitle'] = "Edit Users";
			$data['record'] = $this->update_model->getSingle('tbl_admins', 'admins_id', $userId);
			$data['formstart'] = form_open('users/update/users', array('id' => 'createUser'));

			$this->load->view('templates/head', $data);
			$this->load->view('users/header');
			$this->load->view('users/users_edit');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "Edit Users";
			$data['record'] = $this->update_model->getAll('tbl_admins');

			$this->load->view('templates/head', $data);
			$this->load->view('users/header');
			$this->load->view('users/users_select');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function delete(){
		$data['pgTitle'] = "Delete Users";
		$this->load->view('templates/head', $data);
		$this->load->view('users/header');
		$this->load->view('users/users_delete');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function update($function){
		$this->load->model('Update_model');
		$this->Update_model->$function();
		$this->index();
	}
}

?>