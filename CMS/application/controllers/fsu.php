<?php

class FSU extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('update_model');

		public function index(){
			$data['pgTitle'] = "RezGuide Fanshawe Student Union";
			$data['section'] = "FSU";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/fsu');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

		public function contests(){
			$data['pgTitle'] = "RezGuide Add An Upcoming Event";
			$data['section'] = "FSU";
			$data['uri'] = "contests";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "FSU Contest";

			$data['subSection'] = "Add an FSU Contest";

			$data['formstart'] = form_open('add/insert_record/fsu_contest', array('id' => 'fsuContest'));
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
				$data['category'] = form_hidden('contest_category', 1);
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('FSU/fsu_options_menu');
			$this->load->view('add/eventform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

		public function events(){
			$data['pgTitle'] = "RezGuide Add FSU Event";
			$data['section'] = "FSU";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "FSU Event";
			$data['uri'] = "events";

			$data['subSection'] = "Add an FSU Event";

			$data['formstart'] = form_open('add/insert_record/fsu_event', array('id' => 'fsuEvent'));
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