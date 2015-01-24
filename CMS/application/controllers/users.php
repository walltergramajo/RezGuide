<?php
	class Users extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('update_model');
	}

	public function index(){
		$this->add();
	}

	public function add(){
		$data['pgTitle'] = "Add Users";
		$data['ZoneTitle'] = "Add";
		$data['sectTitle'] = "User";
			$data['controller_uri'] = "users";
		$data['formstart'] = form_open('users/insert_record/user', array('id' => 'createUser'));
			$data['firstname'] = form_input(array(
									'name' => 'firstname',
									'id' => 'firstname',
									'type' => 'text',
									'placeholder' => 'First Name'
			));
			$data['lastname'] = form_input(array(
									'name' => 'lastname',
									'id' => 'lastname',
									'type' => 'text',
									'placeholder' => 'Last Name'
			));
			$data['email'] = form_input(array(
									'name' => 'email',
									'id' => 'email',
									'type' => 'email',
									'placeholder' => 'Email'
			));
			$data['position'] = form_dropdown('position', array(
									'' => 'Select a Position',
									'position1' => 'Position 1',
									'position2' => 'Position 2',
									'position3' => 'Position 3',
									'position4' => 'Position 4',
									'position5' => 'Position 5'
			));
			$data['empnum'] = form_input(array(
									'name' => 'empnum',
									'id' => 'empnum',
									'type' => 'text',
									'placeholder' => 'Employee Number'
			));
			$data['username'] = form_input(array(
									'name' => 'username',
									'id' => 'username',
									'type' => 'text',
									'placeholder' => 'Username'
			));
			$data['password'] = form_input(array(
									'name' => 'password',
									'id' => 'password',
									'type' => 'password',
									'placeholder' => 'Password'
			));
			$data['adminlevel'] = form_hidden('adminlevel', 2);
		$this->load->view('templates/head', $data);
		$this->load->view('users/header');
		$this->load->view('users/users_add_edit');
		$this->load->view('users/users_add');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function edit($userId = null){
		if($userId != null){
			$data['pgTitle'] = "Edit Users";
				$data['controller_uri'] = "users";
			$data['record'] = $this->update_model->getSingle('tbl_admins', 'admins_id', $userId);
			$data['formstart'] = form_open('users/update/users', array('id' => 'createUser'));

			$this->load->view('templates/head', $data);
			$this->load->view('users/header');
			$this->load->view('users/users_add_edit');
			$this->load->view('users/users_edit');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "Edit Users";
				$data['controller_uri'] = "users";
			$data['record'] = $this->update_model->getAll('tbl_admins');

			$this->load->view('templates/head', $data);
			$this->load->view('users/header');
			$this->load->view('templates/delete_overlay');
			$this->load->view('users/users_add_edit');
			$this->load->view('users/users_select');
			$this->load->view('templates/footer');
			$this->load->view('deletescript');
			$this->load->view('templates/close');
		}
	}

	public function insert_record($function) {
		$this->load->model('insert_model');
		//if ($this->form_validation->run() != FALSE){
			$this->insert_model->$function();
		//}

		if($function == "user"){
			$this->add();
		}

	}

	public function update($function){
		$this->load->model('Update_model');
		$this->Update_model->$function();
		$this->index();
	}

	public function delete_record($function, $record){
		$this->load->model('delete_model');
		$this->delete_model->$function($record);

		if($function == "user"){
			$this->edit();
		}
	}
}

?>