<?php

class Campus extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('update_model');
		$this->load->library('form_validation');
	}

	public function index() {
		$this->news();
	}

	public function news($edit = null, $record = null) {
		if($edit == "edit"){
			if($record != null){
				$data['pgTitle'] = "RezGuide Add An Upcoming Event";
				$data['ZoneTitle'] = "Add";
				$data['sectTitle'] = "Campus News";
					$data['controller_uri'] = "campus";
					$data['function_uri'] = "news";
				$news = $this->update_model->getSingle('tbl_news', 'news_id', $record);
						$id = $news->news_id;
						$name = $news->news_title;
						$desc = $news->news_description;
						$date = $news->news_date;
						$time = $news->news_time;
						$location = $news->news_location;
				$data['formstart'] = form_open('add/insert_record/news_upcoming', array('id' => 'newsEvent'));
					$data['location'] = form_input(array(
											'name' => 'location',
											'type' => 'text',
											'placeholder' => $location
					));
		            $data['date'] = form_input(array(
											'name' => 'date',
											'type' => 'text',
											'placeholder' => $date
					));
					$data['time'] = form_input(array(
											'name' => 'time',
											'type' => 'text',
											'placeholder' => $time
					));
					$data['name'] = form_input(array(
											'name' => 'name',
											'type' => 'text',
											'placeholder' => $name
					));
					$data['content'] = form_textarea(array(
											'name' => 'desc',
											'placeholder' => $desc
					));
					$data['category'] = form_hidden('news_category', 1);
				$this->load->view('templates/head',$data);
				$this->load->view('add/add_header');
				$this->load->view('campus/campus_options_menu');
				$this->load->view('templates/add_edit');
				$this->load->view('add/newsform');
				$this->load->view('templates/footer');
				$this->load->view('templates/close');
			}else{
				$data['pgTitle'] = "RezGuide Add An Upcoming Event";
				$data['ZoneTitle'] = "Add";
				$data['sectTitle'] = "Campus News";
					$data['controller_uri'] = "campus";
					$data['function_uri'] = "news";
				$data['news'] = $this->update_model->getAll('tbl_news', 'newsCat_id', 1);

				$this->load->view('templates/head',$data);
				$this->load->view('add/add_header');
				$this->load->view('campus/campus_options_menu');
				$this->load->view('templates/delete_overlay');
				$this->load->view('templates/add_edit');
				$this->load->view('campus/campus_news_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('deletescript.php');
				$this->load->view('templates/close');
			}
		}else{
			$data['pgTitle'] = "RezGuide Add An Upcoming Event";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "Campus News";
				$data['controller_uri'] = "campus";
				$data['function_uri'] = "news";
			$data['formstart'] = form_open('add/insert_record/news_upcoming', array('id' => 'newsEvent'));
				$data['location'] = form_input(array(
										'name' => 'location',
										'type' => 'text',
										'placeholder' => 'Location'
				));
	            $data['date'] = form_input(array(
										'name' => 'date',
										'type' => 'text',
										'placeholder' => 'MM / DD / YYYY'
				));
				$data['time'] = form_input(array(
										'name' => 'time',
										'type' => 'text',
										'placeholder' => 'Time'
				));
				$data['name'] = form_input(array(
										'name' => 'name',
										'type' => 'text',
										'placeholder' => 'Name'
				));
				$data['content'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Content'
				));
				$data['category'] = form_hidden('news_category', 1);
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('campus/campus_options_menu');
			$this->load->view('templates/add_edit');
			$this->load->view('add/newsform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function events(){
		$data['pgTitle'] = "RezGuide Add An Event";
		$data['ZoneTitle'] = "Add";
		$data['sectTitle'] = "Campus Event";
			$data['controller_uri'] = "cammpus";
			$data['function_uri'] = "events";
		$data['formstart'] = form_open('add/insert_record/news_event', array('id' => 'newsEvent'));
			$data['location'] = form_input(array(
									'name' => 'location',
									'type' => 'text',
									'placeholder' => 'Location'
			));
            $data['date'] = form_input(array(
									'name' => 'date',
									'type' => 'text',
									'placeholder' => 'DD / MM / YY'
			));
			$data['time'] = form_input(array(
									'name' => 'time',
									'type' => 'text',
									'placeholder' => 'Time'
			));
			$data['name'] = form_input(array(
									'name' => 'name',
									'type' => 'text',
									'placeholder' => 'Title'
			));
			$data['content'] = form_textarea(array(
									'name' => 'desc',
									'placeholder' => 'Content'
			));
			$data['category'] = form_hidden('news_category', 1);
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('campus/campus_options_menu');
		$this->load->view('templates/add_edit');
		$this->load->view('add/newsform');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function offers() {
		$data['pgTitle'] = "RezGuide Add A Monthly Event";
		$data['ZoneTitle'] = "Add";
		$data['sectTitle'] = "Campus Promotion";
			$data['controller_uri'] = "campus";
			$data['function_uri'] = "offers";
		$data['formstart'] = form_open('add/insert_record/news_monthly', array('id' => 'newsEvent'));
			$data['location'] = form_input(array(
									'name' => 'location',
									'type' => 'text',
									'placeholder' => 'Location'
			));
            $data['date'] = form_input(array(
									'name' => 'date',
									'type' => 'text',
									'placeholder' => 'DD / MM / YY'
			));
			$data['time'] = form_input(array(
									'name' => 'time',
									'type' => 'text',
									'placeholder' => 'Time'
			));
			$data['name'] = form_input(array(
									'name' => 'name',
									'type' => 'text',
									'placeholder' => 'Title'
			));
			$data['content'] = form_textarea(array(
									'name' => 'desc',
									'placeholder' => 'Content'
			));
			$data['category'] = form_hidden('news_category', 2);
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('campus/campus_options_menu');
		$this->load->view('templates/add_edit');
		$this->load->view('add/newsform');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

}