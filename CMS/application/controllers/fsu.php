<?php

class Fsu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('update_model');
	}

	public function index(){
		$this->contests();
	}

	public function contests($edit = null, $record = null){
		if($edit == 'edit'){
			if($record != null) {
				$data['pgTitle'] = "RezGuide Add An Upcoming Event";
					$data['section'] = "FSU";
					$data['uri'] = "contests";
				$data['ZoneTitle'] = "Add";
				$data['sectTitle'] = "FSU Contest";
				$contest = $this->update_model->getSingle('tbl_contests', 'contests_id', $record);
					$id = $contest->contests_id;
					$name = $contest->contests_title;
					$desc = $contest->contests_description;
					$location = $contest->contests_location;
					$link = $contest->contests_link;
					$who = $contest->contests_whoenter;
					$s_array = explode("-", $contest->contests_startdate);
					$e_array = explode("-", $contest->contests_enddate);
				$data['formstart'] = form_open('fsu/insert_record/fsu_contest', array('id' => 'fsuContest'));
					$data['name'] = form_input(array(
											'name' => 'name',
											'type' => 'text',
											'placeholder' => 'Title',
											'value' => $name
					));
					$data['content'] = form_textarea(array(
											'name' => 'desc',
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
											'name' => 'who',
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
					$data['s_day'] = form_input(array(
											'name' => 's_day',
											'type' => 'text',
											'class' => 'datefield day_field',
											'placeholder' => 'DD',
											'maxlength' => '2',
											'value' => $s_array[2]
					));
					$data['s_month'] = form_input(array(
											'name' => 's_month',
											'type' => 'text',
											'class' => 'datefield month_field',
											'placeholder' => 'MM',
											'maxlength' => '2',
											'value' => $s_array[1]
					));
					$data['s_year'] = form_input(array(
											'name' => 's_year',
											'type' => 'text',
											'class' => 'datefield year_field',
											'placeholder' => 'YYYY',
											'maxlength' => '4',
											'value' => $s_array[0]
					));
					$data['e_day'] = form_input(array(
											'name' => 'e_day',
											'type' => 'text',
											'class' => 'datefield day_field',
											'placeholder' => 'DD',
											'maxlength' => '2',
											'value' => $e_array[2]
					));
					$data['e_month'] = form_input(array(
											'name' => 'e_month',
											'type' => 'text',
											'class' => 'datefield month_field',
											'placeholder' => 'MM',
											'maxlength' => '2',
											'value' => $e_array[1]
					));
					$data['e_year'] = form_input(array(
											'name' => 'e_year',
											'type' => 'text',
											'class' => 'datefield year_field',
											'placeholder' => 'YYYY',
											'maxlength' => '4',
											'value' => $e_array[0]
					));
					$data['category'] = form_hidden('contest_category', 1);
					$data['id'] = form_hidden('id', $id);
				$this->load->view('templates/head',$data);
				$this->load->view('add/add_header');
				$this->load->view('FSU/fsu_options_menu');
				$this->load->view('add/contestform');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "FSU Contest Select";
				$data['ZoneTitle'] = "Select";
				$data['sectTitle'] = "Contest";
					$data['section'] = "FSU";
					$data['uri'] = "contests";
				$data['contests'] = $this->update_model->getAll('tbl_contests', 'contestCat_id', 1);

				$this->load->view('templates/head', $data);
				$this->load->view('building/building_header');
				$this->load->view('fsu/fsu_options_menu');
				$this->load->view('fsu/fsu_contests_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('deletescript.php');
				$this->load->view('templates/close');
			}
		}else{
			$data['pgTitle'] = "RezGuide Add An Upcoming Event";
				$data['section'] = "FSU";
				$data['uri'] = "contests";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "FSU Contest";

			$data['subSection'] = "Add an FSU Contest";

			$data['formstart'] = form_open('fsu/insert_record/fsu_contest', array('id' => 'fsuContest'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'type' => 'text',
										'placeholder' => 'Title'
				));
				$data['content'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Content'
				));
				$data['info'] = form_textarea(array(
										'name' => 'info',
										'placeholder' => 'Content'
				));
				$data['location'] = form_input(array(
										'name' => 'location',
										'type' => 'text',
										'placeholder' => 'Location'
				));
	            $data['who'] = form_input(array(
										'name' => 'who',
										'type' => 'text',
										'placeholder' => 'Who can Enter'
				));
				$data['link'] = form_input(array(
										'name' => 'link',
										'type' => 'text',
										'placeholder' => 'Link'
				));
				$data['s_day'] = form_input(array(
										'name' => 's_day',
										'type' => 'text',
										'class' => 'datefield day_field',
										'placeholder' => 'DD',
										'maxlength' => '2'
				));
				$data['s_month'] = form_input(array(
										'name' => 's_month',
										'type' => 'text',
										'class' => 'datefield month_field',
										'placeholder' => 'MM',
										'maxlength' => '2'
				));
				$data['s_year'] = form_input(array(
										'name' => 's_year',
										'type' => 'text',
										'class' => 'datefield year_field',
										'placeholder' => 'YYYY',
										'maxlength' => '4'
				));
				$data['e_day'] = form_input(array(
										'name' => 'e_day',
										'type' => 'text',
										'class' => 'datefield day_field',
										'placeholder' => 'DD',
										'maxlength' => '2'
				));
				$data['e_month'] = form_input(array(
										'name' => 'e_month',
										'type' => 'text',
										'class' => 'datefield month_field',
										'placeholder' => 'MM',
										'maxlength' => '2'
				));
				$data['e_year'] = form_input(array(
										'name' => 'e_year',
										'type' => 'text',
										'class' => 'datefield year_field',
										'placeholder' => 'YYYY',
										'maxlength' => '4'
				));
				$data['category'] = form_hidden('contest_category', 1);
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('FSU/fsu_options_menu');
			$this->load->view('add/contestform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function events($edit = null, $record = null){
		if($edit == 'edit'){
			if($record != null){
				$data['pgTitle'] = "RezGuide Add FSU Event";
					$data['section'] = "FSU";
					$data['uri'] = "events";
				$data['ZoneTitle'] = "Add";
				$data['sectTitle'] = "FSU Event";
				$event = $this->update_model->getSingle('tbl_events', 'events_id', $record);
						$id = $event->events_id;
						$name = $event->events_title;
						$desc = $event->events_description;
						$info = $event->events_moreinfo;
						$location = $event->events_location;
						$link = $event->events_link;
						$who = $event->events_whocome;
						$studprice = $event->events_studentprice;
						$gstprice = $event->events_guestprice;
						$s_array = explode("-", $event->events_startdate);
						$e_array = explode("-", $event->events_enddate);
				$data['formstart'] = form_open('fsu/insert_record/fsu_event', array('id' => 'fsuEvent'));
					$data['name'] = form_input(array(
											'name' => 'name',
											'type' => 'text',
											'placeholder' => 'Title',
											'value' => $name
					));
					$data['content'] = form_textarea(array(
											'name' => 'desc',
											'placeholder' => 'Content',
											'value' => $desc
					));
					$data['moreinfo'] = form_textarea(array(
											'name' => 'info',
											'placeholder' => 'Content',
											'value' => $info
					));
					$data['location'] = form_input(array(
											'name' => 'location',
											'type' => 'text',
											'placeholder' => 'Location',
											'value' => $location
					));
		            $data['who'] = form_input(array(
											'name' => 'who',
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
					$data['s_day'] = form_input(array(
											'name' => 's_day',
											'type' => 'text',
											'class' => 'datefield day_field',
											'placeholder' => 'DD',
											'maxlength' => '2',
											'value' => $s_array[2]
					));
					$data['s_month'] = form_input(array(
											'name' => 's_month',
											'type' => 'text',
											'class' => 'datefield month_field',
											'placeholder' => 'MM',
											'maxlength' => '2',
											'value' => $s_array[1]
					));
					$data['s_year'] = form_input(array(
											'name' => 's_year',
											'type' => 'text',
											'class' => 'datefield year_field',
											'placeholder' => 'YYYY',
											'maxlength' => '4',
											'value' => $s_array[0]
					));
					$data['e_day'] = form_input(array(
											'name' => 'e_day',
											'type' => 'text',
											'class' => 'datefield day_field',
											'placeholder' => 'DD',
											'maxlength' => '2',
											'value' => $e_array[2]
					));
					$data['e_month'] = form_input(array(
											'name' => 'e_month',
											'type' => 'text',
											'class' => 'datefield month_field',
											'placeholder' => 'MM',
											'maxlength' => '2',
											'value' => $e_array[1]
					));
					$data['e_year'] = form_input(array(
											'name' => 'e_year',
											'type' => 'text',
											'class' => 'datefield year_field',
											'placeholder' => 'YYYY',
											'maxlength' => '4',
											'value' => $e_array[0]
					));
					$data['studprice'] = form_input(array(
											'name' => 'studprice',
											'type' => 'text',
											'placeholder' => 'Student Price',
											'value' => $studprice
					));
					$data['gstprice'] = form_input(array(
											'name' => 'gstprice',
											'type' => 'text',
											'placeholder' => 'Guest Price',
											'value' => $gstprice
					));
					$data['category'] = form_hidden('events_category', 1);
					$data['id'] = form_hidden('id', $id);
				$this->load->view('templates/head',$data);
				$this->load->view('add/add_header');
				$this->load->view('FSU/fsu_options_menu');
				$this->load->view('add/eventform');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "fsu Event Select";
				$data['ZoneTitle'] = "Select";
				$data['sectTitle'] = "Event";
					$data['section'] = "fsu";
					$data['uri'] = "events";
				$data['events'] = $this->update_model->getAll('tbl_events', 'eventsCat_id', 1);

				$this->load->view('templates/head', $data);
				$this->load->view('building/building_header');
				$this->load->view('fsu/fsu_options_menu');
				$this->load->view('fsu/fsu_events_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('deletescript.php');
				$this->load->view('templates/close');
			}
		}else{
			$data['pgTitle'] = "RezGuide Add FSU Event";
				$data['section'] = "FSU";
				$data['uri'] = "events";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "FSU Event";
			$data['formstart'] = form_open('fsu/insert_record/fsu_event', array('id' => 'fsuEvent'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'type' => 'text',
										'placeholder' => 'Title'
				));
				$data['content'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Content'
				));
				$data['moreinfo'] = form_textarea(array(
										'name' => 'info',
										'placeholder' => 'Content'
				));
				$data['location'] = form_input(array(
										'name' => 'location',
										'type' => 'text',
										'placeholder' => 'Location'
				));
	            $data['who'] = form_input(array(
										'name' => 'who',
										'type' => 'text',
										'placeholder' => 'Who can Enter'
				));
				$data['link'] = form_input(array(
										'name' => 'link',
										'type' => 'text',
										'placeholder' => 'Link'
				));
				$data['s_day'] = form_input(array(
										'name' => 's_day',
										'type' => 'text',
										'class' => 'datefield day_field',
										'placeholder' => 'DD',
										'maxlength' => '2'
				));
				$data['s_month'] = form_input(array(
										'name' => 's_month',
										'type' => 'text',
										'class' => 'datefield month_field',
										'placeholder' => 'MM',
										'maxlength' => '2'
				));
				$data['s_year'] = form_input(array(
										'name' => 's_year',
										'type' => 'text',
										'class' => 'datefield year_field',
										'placeholder' => 'YYYY',
										'maxlength' => '4'
				));
				$data['e_day'] = form_input(array(
										'name' => 'e_day',
										'type' => 'text',
										'class' => 'datefield day_field',
										'placeholder' => 'DD',
										'maxlength' => '2'
				));
				$data['e_month'] = form_input(array(
										'name' => 'e_month',
										'type' => 'text',
										'class' => 'datefield month_field',
										'placeholder' => 'MM',
										'maxlength' => '2'
				));
				$data['e_year'] = form_input(array(
										'name' => 'e_year',
										'type' => 'text',
										'class' => 'datefield year_field',
										'placeholder' => 'YYYY',
										'maxlength' => '4'
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
				$data['category'] = form_hidden('events_category', 1);
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('FSU/fsu_options_menu');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function insert_record($function) {
		$this->load->model('insert_model');
		//if ($this->form_validation->run() != FALSE){
			$this->insert_model->$function();
		//}

		if($function == "fsu_contest"){
			$this->contests();
		}elseif($function == "fsu_event"){
			$this->events();
		}

	}

	public function update_record($function){
		$this->update_model->$function();
		

		if($function == "fsu_contest"){
			$this->contests('edit');
		}elseif($function == "fsu_event"){
			$this->events('edit');
		}
	}

	public function delete_record($function, $record){
		$this->load->model('delete_model');
		$this->delete_model->$function($record);

		if($function == "contests"){
			$this->contests('edit');
		}
	}

}