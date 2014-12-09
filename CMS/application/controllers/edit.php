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

	public function students($page = null, $record = null){
		if($page == "studentInfo"){
			$data['pgTitle'] = "RezGuide Select A Student";
			$data['section'] = "Building";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/students/students_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('edit/students/student_edit_pg1');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "balance"){
			$data['pgTitle'] = "RezGuide Select A Student";
			$data['section'] = "Building";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/students/students_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('edit/students/student_edit_pg2');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
		elseif($page == "mealPlan"){
			$data['pgTitle'] = "RezGuide Select A Student";
			$data['section'] = "Building";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/students/students_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('edit/students/student_edit_pg3');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
		elseif($page == "points"){
			$data['pgTitle'] = "RezGuide Select A Student";
			$data['section'] = "Building";
			$this->load->view('templates/head', $data);
			$this->load->view('edit/students/students_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('edit/students/student_edit_pg4');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
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

	public function building($page = null, $record = null){
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
			if($record != null){
				$data['pgTitle'] = "RezGuide Edit A Building Contest";
				$data['sectTitle'] = "Edit Contest";
					$data['section'] = "Building";
					$data['uri'] = "contests";
				$contest = $this->update_model->getSingle('tbl_contests', 'contests_id', $record);
					$id = $contest->contests_id;
					$title = $contest->contests_title;
					$desc = $contest->contests_description;
					$start = $contest->contests_startdate;
					$end = $contest->contests_enddate;
					$location = $contest->contests_location;
					$link = $contest->contests_link;
					$who = $contest->contests_whoenter;
				$data['formstart'] = form_open('edit/update/building_contest', array('id' => 'bldContest'));
					$data['name'] = form_input(array(
											'name' => 'title',
											'type' => 'text',
											'placeholder' => 'Title',
											'value' => $title
					));
					$data['content'] = form_textarea(array(
											'name' => 'description',
											'placeholder' => 'Content',
											'value' => $desc
					));
					$data['location'] = form_input(array(
											'name' => 'location',
											'type' => 'text',
											'placeholder' => 'Location',
											'value' => $location
					));
	                $data['who'] = form_input(array(
											'name' => 'whoenter',
											'type' => 'text',
											'placeholder' => 'Who can Enter',
											'value' => $who
					));
					$data['link'] = form_input(array(
											'name' => 'link',
											'type' => 'text',
											'placeholder' => 'Link',
											'value' => $link
					));
					$data['start'] = form_input(array(
											'name' => 'startdate',
											'type' => 'text',
											'placeholder' => 'Start',
											'value' => $start
					));
					$data['end'] = form_input(array(
											'name' => 'enddate',
											'type' => 'text',
											'placeholder' => 'End',
											'value' => $end
					));
					$data['category'] = form_hidden('category_id', 3);
					$data['id'] = form_hidden('id', $id);
				$this->load->view('templates/head',$data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('add/contestform');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "Building Contest Select";
				$data['sectTitle'] = "Select a Contest";
					$data['section'] = "Building";
					$data['uri'] = "contests";
				$data['contests'] = $this->update_model->getAll('tbl_contests', 'contestCat_id', 3);

				$this->load->view('templates/head', $data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('building/building_contests_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}
		}elseif($page == "events"){
			if($record != null){
				$data['pgTitle'] = "Building Event Select";
				$data['sectTitle'] = "Select an Event";
					$data['section'] = "Building";
					$data['uri'] = "events";
				$event = $this->update_model->getSingle('tbl_events', 'events_id', $record);
					$id = $event->events_id;
					$title = $event->events_title;
					$desc = $event->events_description;
					$info = $event->events_moreinfo;
					$start = $event->events_startdate;
					$end = $event->events_enddate;
					$location = $event->events_location;
					$link = $event->events_link;
					$who = $event->events_whocome;
				$data['formstart'] = form_open('edit/update/building_event', array('id' => 'bldEvent'));
					$data['name'] = form_input(array(
											'name' => 'title',
											'type' => 'text',
											'placeholder' => 'Title',
											'value' => $title
					));
					$data['content'] = form_textarea(array(
											'name' => 'description',
											'placeholder' => 'Content',
											'value' => $desc
					));
					$data['moreinfo'] = form_textarea(array(
											'name' => 'moreinfo',
											'placeholder' => 'More Info',
											'value' => $info
					));
					$data['location'] = form_input(array(
											'name' => 'location',
											'type' => 'text',
											'placeholder' => 'Location',
											'value' => $location
					));
	                $data['who'] = form_input(array(
											'name' => 'whocome',
											'type' => 'text',
											'placeholder' => 'Who can Enter',
											'value' => $who
					));
					$data['link'] = form_input(array(
											'name' => 'link',
											'type' => 'text',
											'placeholder' => 'Link',
											'value' => $link
					));
					$data['start'] = form_input(array(
											'name' => 'startdate',
											'type' => 'text',
											'placeholder' => 'Start',
											'value' => $start
					));
					$data['end'] = form_input(array(
											'name' => 'enddate',
											'type' => 'text',
											'placeholder' => 'End',
											'value' => $end
					));
					$data['studprice'] = form_input(array(
											'name' => 'studprice',
											'type' => 'text',
											'placeholder' => 'Student Price'
					));
					$data['gstprice'] = form_input(array(
											'name' => 'gstprice',
											'type' => 'text',
											'placeholder' => 'Guest Price'
					));
					$data['category'] = form_hidden('category_id', 3);
					$data['id'] = form_hidden('id', $id);
				$this->load->view('templates/head',$data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('add/eventform');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "Building Event Select";
				$data['sectTitle'] = "Select an Event";
					$data['section'] = "Building";
					$data['uri'] = "events";
				$data['events'] = $this->update_model->getAll('tbl_events', 'eventsCat_id', 3);

				$this->load->view('templates/head', $data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('building/building_events_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}
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
		
		if($function == "building_contest"){
			$this->building('contests');
		}elseif($function == "building_event"){
			$this->building('events');
		}
	}
}