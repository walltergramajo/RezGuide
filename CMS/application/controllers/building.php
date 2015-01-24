<?php

class Building extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('update_model');
	}

	public function index(){
		$this->contests();
	}

	public function contests($edit = null, $record = null){
		if($edit == "edit"){
			if($record != null){
				$data['pgTitle'] = "RezGuide Edit A Building Contest";
				$data['ZoneTitle'] = "Edit";
				$data['sectTitle'] = "Contest";
					$data['controller_uri'] = "building";
					$data['function_uri'] = "contests";
				$contest = $this->update_model->getSingle('tbl_contests', 'contests_id', $record);
					$id = $contest->contests_id;
					$name = $contest->contests_title;
					$desc = $contest->contests_description;
					$location = $contest->contests_location;
					$link = $contest->contests_link;
					$who = $contest->contests_whoenter;
					$s_array = explode("-", $contest->contests_startdate);
					$e_array = explode("-", $contest->contests_enddate);
				$data['formstart'] = form_open('building/update_record/bld_contest', array('id' => 'bldContest'));
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
											'value' => $s_array[0]
					));
					$data['category'] = form_hidden('contest_category', 3);
					$data['id'] = form_hidden('id', $id);
				$this->load->view('templates/head',$data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('templates/add_edit');
				$this->load->view('add/contestform');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "Building Contest Select";
				$data['ZoneTitle'] = "Select";
				$data['sectTitle'] = "Contest";
					$data['controller_uri'] = "building";
					$data['function_uri'] = "contests";
				$data['contests'] = $this->update_model->getAll('tbl_contests', 'contestCat_id', 3);

				$this->load->view('templates/head', $data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('templates/delete_overlay');
				$this->load->view('templates/add_edit');
				$this->load->view('building/building_contests_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('deletescript');
				$this->load->view('templates/close');
			}
		}else{
			$data['pgTitle'] = "RezGuide Add An Upcoming Event";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "Building Contest";
				$data['controller_uri'] = "building";
				$data['function_uri'] = "contests";
			$data['formstart'] = form_open('building/insert_record/bld_contest', array('id' => 'bldContest'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'type' => 'text',
										'placeholder' => 'Title'
				));
				$data['content'] = form_textarea(array(
										'name' => 'desc',
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
				$data['category'] = form_hidden('contest_category', 3);
			$this->load->view('templates/head',$data);
			$this->load->view('building/building_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('templates/add_edit');
			$this->load->view('add/contestform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function events($edit = null, $record = null){
		if($edit == "edit"){
			if($record != null){
				$data['pgTitle'] = "Building Event Select";
				$data['ZoneTitle'] = "Edit";
				$data['sectTitle'] = "Event";
					$data['controller_uri'] = "building";
					$data['function_uri'] = "events";
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
				$data['formstart'] = form_open('building/update_record/bld_event', array('id' => 'bldEvent'));
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
											'value' => $s_array[0]
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
					$data['category'] = form_hidden('event_category', 3);
					$data['id'] = form_hidden('id', $id);
				$this->load->view('templates/head',$data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('templates/add_edit');
				$this->load->view('add/eventform');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "Building Event Select";
				$data['ZoneTitle'] = "Select";
				$data['sectTitle'] = "Event";
					$data['controller_uri'] = "building";
					$data['function_uri'] = "events";
				$data['events'] = $this->update_model->getAll('tbl_events', 'eventsCat_id', 3);

				$this->load->view('templates/head', $data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('templates/delete_overlay');
				$this->load->view('templates/add_edit');
				$this->load->view('building/building_events_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('deletescript');
				$this->load->view('templates/close');
			}
		}else{
			$data['pgTitle'] = "RezGuide Add A Monthly Event";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "Building Event";
				$data['controller_uri'] = "building";
				$data['function_uri'] = "events";
			$data['formstart'] = form_open('building/insert_record/bld_event', array('id' => 'bldContest'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'type' => 'text',
										'placeholder' => 'Title',
										'value' => set_value('name')
				));
				$data['content'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Content',
										'value' => set_value('desc')
				));
				$data['moreinfo'] = form_textarea(array(
										'name' => 'info',
										'placeholder' => 'More Info',
										'value' => set_value('info')
				));
				$data['location'] = form_input(array(
										'name' => 'location',
										'type' => 'text',
										'placeholder' => 'Location',
										'value' => set_value('location')
				));
                $data['who'] = form_input(array(
										'name' => 'who',
										'type' => 'text',
										'placeholder' => 'Who can Enter',
										'value' => set_value('who')
				));
				$data['link'] = form_input(array(
										'name' => 'link',
										'type' => 'text',
										'placeholder' => 'Link',
										'value' => set_value('link')
				));
				$data['s_day'] = form_input(array(
										'name' => 's_day',
										'type' => 'text',
										'class' => 'datefield day_field',
										'placeholder' => 'DD',
										'maxlength' => '2',
										'value' => set_value('s_day')
				));
				$data['s_month'] = form_input(array(
										'name' => 's_month',
										'type' => 'text',
										'class' => 'datefield month_field',
										'placeholder' => 'MM',
										'maxlength' => '2',
										'value' => set_value('s_month')
				));
				$data['s_year'] = form_input(array(
										'name' => 's_year',
										'type' => 'text',
										'class' => 'datefield year_field',
										'placeholder' => 'YYYY',
										'maxlength' => '4',
										'value' => set_value('s_year')
				));
				$data['e_day'] = form_input(array(
										'name' => 'e_day',
										'type' => 'text',
										'class' => 'datefield day_field',
										'placeholder' => 'DD',
										'maxlength' => '2',
										'value' => set_value('e_day')
				));
				$data['e_month'] = form_input(array(
										'name' => 'e_month',
										'type' => 'text',
										'class' => 'datefield month_field',
										'placeholder' => 'MM',
										'maxlength' => '2',
										'value' => set_value('e_month')
				));
				$data['e_year'] = form_input(array(
										'name' => 'e_year',
										'type' => 'text',
										'class' => 'datefield year_field',
										'placeholder' => 'YYYY',
										'maxlength' => '4',
										'value' => set_value('e_year')
				));
				$data['studprice'] = form_input(array(
										'name' => 'studprice',
										'type' => 'text',
										'placeholder' => 'Student Price',
										'value' => set_value('studprice')
				));
				$data['gstprice'] = form_input(array(
										'name' => 'gstprice',
										'type' => 'text',
										'placeholder' => 'Guest Price',
										'value' => set_value('gstprice')
				));
				$data['category'] = form_hidden('events_category', 3);
			$this->load->view('templates/head',$data);
			$this->load->view('building/building_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('templates/add_edit');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function programs($edit = null, $record = null){
		if($edit == 'edit'){
			if($record != null){
				$data['pgTitle'] = "Building Event Select";
				$data['ZoneTitle'] = "Edit";
				$data['sectTitle'] = "Building Program";
					$data['controller_uri'] = "building";
					$data['function_uri'] = "programs";
				$event = $this->update_model->getSingle('tbl_events', 'events_id', $record);
					$id = $event->events_id;
					$name = $event->events_title;
					$desc = $event->events_description;
					$info = $event->events_moreinfo;
					$start = $event->events_startdate;
					$end = $event->events_enddate;
					$location = $event->events_location;
					$link = $event->events_link;
					$who = $event->events_whocome;
					$s_array = explode("-", $event->events_startdate);
					$e_array = explode("-", $event->events_enddate);
				$data['formstart'] = form_open('building/update_record/bld_program', array('id' => 'bldProgram'));
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
											'value' => $s_array[0]
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
					$data['category'] = form_hidden('event_category', 4);
					$data['id'] = form_hidden('id', $id);
				$this->load->view('templates/head',$data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('templates/add_edit');
				$this->load->view('add/eventform');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "Building Event Select";
				$data['ZoneTitle'] = "Select";
				$data['sectTitle'] = "Program";
					$data['controller_uri'] = "building";
					$data['function_uri'] = "programs";
				$data['events'] = $this->update_model->getAll('tbl_events', 'eventsCat_id', 4);

				$this->load->view('templates/head', $data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('templates/delete_overlay');
				$this->load->view('templates/add_edit');
				$this->load->view('building/building_events_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('deletescript');
				$this->load->view('templates/close');
			}
		}else{
			$data['pgTitle'] = "RezGuide Add An Event";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "Building Program";
				$data['controller_uri'] = "building";
				$data['function_uri'] = "programs";
			$data['subSection'] = "Add a Building Program";
			$data['formstart'] = form_open('building/insert_record/bld_program', array('id' => 'bldProgram'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'type' => 'text',
										'placeholder' => 'Title',
										'value' => set_value('name')
				));
				$data['content'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Content',
										'value' => set_value('desc')
				));
				$data['moreinfo'] = form_textarea(array(
										'name' => 'info',
										'placeholder' => 'More Info',
										'value' => set_value('info')
				));

				$data['location'] = form_input(array(
										'name' => 'location',
										'type' => 'text',
										'placeholder' => 'Location',
										'value' => set_value('location')
				));
                $data['who'] = form_input(array(
										'name' => 'who',
										'type' => 'text',
										'placeholder' => 'Who can Enter',
										'value' => set_value('who')
				));
				$data['link'] = form_input(array(
										'name' => 'link',
										'type' => 'text',
										'placeholder' => 'Link',
										'value' => set_value('link')

				));
				$data['s_day'] = form_input(array(
										'name' => 's_day',
										'type' => 'text',
										'class' => 'datefield day_field',
										'placeholder' => 'DD',
										'maxlength' => '2',
										'value' => set_value('s_day')
				));
				$data['s_month'] = form_input(array(
										'name' => 's_month',
										'type' => 'text',
										'class' => 'datefield month_field',
										'placeholder' => 'MM',
										'maxlength' => '2',
										'value' => set_value('s_month')
				));
				$data['s_year'] = form_input(array(
										'name' => 's_year',
										'type' => 'text',
										'class' => 'datefield year_field',
										'placeholder' => 'YYYY',
										'maxlength' => '4',
										'value' => set_value('s_year')
				));
				$data['e_day'] = form_input(array(
										'name' => 'e_day',
										'type' => 'text',
										'class' => 'datefield day_field',
										'placeholder' => 'DD',
										'maxlength' => '2',
										'value' => set_value('e_day')
				));
				$data['e_month'] = form_input(array(
										'name' => 'e_month',
										'type' => 'text',
										'class' => 'datefield month_field',
										'placeholder' => 'MM',
										'maxlength' => '2',
										'value' => set_value('e_month')
				));
				$data['e_year'] = form_input(array(
										'name' => 'e_year',
										'type' => 'text',
										'class' => 'datefield year_field',
										'placeholder' => 'YYYY',
										'maxlength' => '4',
										'value' => set_value('e_year')
				));
				$data['studprice'] = form_input(array(
										'name' => 'studprice',
										'type' => 'text',
										'placeholder' => 'Student Price',
										'value' => set_value('studprice')
				));
				$data['gstprice'] = form_input(array(
										'name' => 'gstprice',
										'type' => 'text',
										'placeholder' => 'Guest Price',
										'value' => set_value('gstprice')
				));
				$data['category'] = form_hidden('events_category', 4);
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('templates/add_edit');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function rules($record = null){
		if($record != null){
			$this->load->helper('text');
			$data['pgTitle'] = "Building Rules &amp; Regulations";
			$data['subTitle'] = "Rules and Regulations";
				$data['controller_uri'] = "building";
				$data['function_uri'] = "rules";
			$data['rules'] =$this->update_model->getAll('tbl_rules');
			$rule = $this->update_model->getSingle('tbl_rules', 'rules_id', $record);
				$id = $rule->rules_id;
				$name = $rule->rules_title;
				$desc = $rule->rules_description;
			$data['formstart'] = form_open('building/update_record/bld_rule', array('id' => 'bldRule'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'class' => 'titleText',
										'type' => 'text',
										'placeholder' => 'Title',
										'value' => $name
				));
				$data['desc'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Description',
										'value' => $desc
				));
				$data['id'] = form_hidden('id', $id);
			$this->load->view('templates/head', $data);
			$this->load->view('building/building_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('templates/delete_overlay');
			$this->load->view('building/building_rules');
			$this->load->view('templates/footer');
			$this->load->view('deletescript');
			$this->load->view('templates/close');
		}else{
			$this->load->helper('text');
			$data['pgTitle'] = "Building Rules &amp; Regulations";
			$data['subTitle'] = "Rules and Regulations";
				$data['controller_uri'] = "building";
				$data['function_uri'] = "rules";
			$data['rules'] = $this->update_model->getAll('tbl_rules');
			$data['formstart'] = form_open('building/insert_record/bld_rule', array('id' => 'bldRule'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'class' => 'titleText',
										'type' => 'text',
										'placeholder' => 'Title'
				));
				$data['desc'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Description'
				));

			$this->load->view('templates/head', $data);
			$this->load->view('building/building_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('templates/delete_overlay');
			$this->load->view('building/building_rules');
			$this->load->view('templates/footer');
			$this->load->view('deletescript');
			$this->load->view('templates/close');
		}
	}

	public function garbage(){
		$data['pgTitle'] = "Building Garbage Day";
		$data['subSection'] = "Garbage Day";
			$data['controller_uri'] = "building";
			$data['function_uri'] = "garbage";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('templates/add_edit');
		$this->load->view('building/building_garbage_housekeeping');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function garbage_edit(){
		$data['pgTitle'] = "Building Garbage Day";
		$data['subSection'] = "Garbage Day";
			$data['controller_uri'] = "building";
			$data['function_uri'] = "rules";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('templates/add_edit');
		$this->load->view('building/garbage_housekeeping_edit');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function insert_record($function) {
		$this->load->model('insert_model');
		//if ($this->form_validation->run() != FALSE){
			$this->insert_model->$function();
		//}

		if($function == "bld_contest"){
			$this->contests();
		}elseif($function == "bld_event"){
			$this->events();
		}elseif($function == "bld_program"){
			$this->programs();
		}elseif($function == "bld_rule"){
			$this->rules();
		}

	}

	public function update_record($function){
		$this->update_model->$function();
		

		if($function == "bld_contest"){
			$this->contests('edit');
		}elseif($function == "bld_event"){
			$this->events('edit');
		}elseif($function == "bld_program"){
			$this->programs('edit');
		}elseif($function == "bld_rule"){
			$this->rules();
		}
	}

	public function delete_record($function, $record){
		$this->load->model('delete_model');
		$this->delete_model->$function($record);

		if($function == "contests"){
			$this->contests('edit');
		}elseif($function == "events"){
			$this->events('edit');
		}elseif($function == "programs"){
			$this->programs('edit');
		}elseif($function == "rules"){
			$this->rules();
		}
	}
}

?>