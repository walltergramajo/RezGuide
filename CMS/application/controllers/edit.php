<?php

class Edit extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('update_model');
	}

	public function index(){
		$data['pgTitle'] = "RezGuide Edit Main Menu";
		$this->load->view('templates/head',$data);
		$this->load->view('/edit/edit_header');
		$this->load->view('/edit/edit_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function notices(){
		$data['pgTitle'] = "RezGuide Select A Notice";
		$data['section'] = "Building";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/notices/notices_header');
		$this->load->view('edit/notices/notices_edit');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function students(){
		$data['pgTitle'] = "RezGuide Select A Student";
		$data['section'] = "Building";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/students/students_header');
		$this->load->view('edit/students/student_edit');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}
	
	public function news(){
		$data['pgTitle'] = "RezGuide Select A Student";
		$data['section'] = "Building";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/news/news_header');
		$this->load->view('edit/news/news_edit');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function building($page = null, $subsection = null){
		if($page == "garbage"){
			$data['pgTitle'] = "Building Garbage Day";
			$data['section'] = "Building";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/building/building_header');
			$this->load->view('edit/building/building_garbage');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "housekeeping"){
			$data['pgTitle'] = "Building Housekeeping Day";
			$data['section'] = "Building";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/building/building_header');
			$this->load->view('edit/building/building_housekeeping');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "rules"){
			$data['pgTitle'] = "Building Rules &amp; Regulations";
			$data['section'] = "Building";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/building/building_header');
			$this->load->view('edit/building/building_rules');
			$this->load->view('templates/close');
		}elseif($page == "contests"){
			$this->load->model('contests_model');
			$data['pgTitle'] = "Building Contest Select";
				$data['section'] = "Building";
				$data['uri'] = "contests";
			$data['contests'] = $this->contests_model->getContests(3);

			$this->load->view('templates/head', $data);
			$this->load->view('edit/building/building_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('building/building_contests_edit_select');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "events"){
			$this->load->model('events_model');
			$data['pgTitle'] = "Building Event Select";
				$data['section'] = "Building";
				$data['uri'] = "events";
			$data['events'] = $this->events_model->getEvents(3);

			$this->load->view('templates/head', $data);
			$this->load->view('edit/building/building_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('building/building_events_edit_select');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide News Main Menu";
			$data['section'] = "Building";
			$this->load->view('templates/head',$data);
			$this->load->view('edit/edit_header');
			$this->load->view('edit/building');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function fsu($page = null){
		if($page == "general"){
			$data['pgTitle'] = "FSU General";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/fsu/header');
			$this->load->view('edit/fsu/fsu_general');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "contests"){
			$data['pgTitle'] = "FSU Contest Select";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/fsu/header');
			$this->load->view('edit/fsu/fsu_contest_select');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "events"){
			$data['pgTitle'] = "FSU Event Select";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/fsu/header');
			$this->load->view('edit/fsu/fsu_events');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "FSU Main Menu";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/fsu/header');
			$this->load->view('edit/fsu/fsu_main');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function general($page = null, $userId = null){
		if($page == "city"){
			$data['pgTitle'] = "Edit City Location";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/general/general_header');
			$this->load->view('edit/general/general_city_select');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "directory"){
			if($userId != null){
				$data['pgTitle'] = "Edit Directory Record";
				$data['record'] = $this->update_model->getSingle('tbl_directory', 'directory_id', $userId);
				$data['formstart'] = form_open('users/update/directory', array('id' => 'createUser'));

				$this->load->view('templates/head', $data);
				$this->load->view('edit/general/general_header');
				$this->load->view('edit/general/general_directory_edit');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "Edit Directory";
				$data['record'] = $this->update_model->getAll('tbl_directory');

				$this->load->view('templates/head', $data);
				$this->load->view('edit/general/general_header');
				$this->load->view('edit/general/general_directory_select');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}
		}elseif($page == "information"){
			$data['pgTitle'] = "Edit City Location";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/general/general_header');
			$this->load->view('edit/general/general_information_select');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "General Main Menu";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/general/general_header');
			$this->load->view('edit/general/general_main');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function update($function){
		$this->load->model('Update_model');
		$this->Update_model->$function();
		$this->index();
	}
}