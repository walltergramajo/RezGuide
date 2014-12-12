<?php

class Add extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$rules = array(
						array(
							'field'   => 'name', 
		                    'label'   => 'Title', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 'desc', 
		                    'label'   => 'Content', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 'location', 
		                    'label'   => 'Location', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 'who', 
		                    'label'   => 'Who Can Enter', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'link', 
		                    'label'   => 'Link', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 's_day', 
		                    'label'   => 'Start Date - Day', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 's_month', 
		                    'label'   => 'Start Date - Month', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 's_year', 
		                    'label'   => 'Start Date - Year', 
		                    'rules'   => 'required|xss_clean'
						),
						array(
							'field'   => 'e_day', 
		                    'label'   => 'End Date - Day', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'e_month', 
		                    'label'   => 'End Date - Month', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'e_year', 
		                    'label'   => 'End Date - Year', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'contest_category', 
		                    'label'   => 'db_category', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'event_category', 
		                    'label'   => 'db_category', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'studprice', 
		                    'label'   => 'Student Price', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'gstprice', 
		                    'label'   => 'Guest Price', 
		                    'rules'   => 'xss_clean'
						),
						array(
							'field'   => 'info', 
		                    'label'   => 'More info', 
		                    'rules'   => 'xss_clean'
						)
					);
		$this->form_validation->set_rules($rules);
	}

	public function index(){
		$data['pgTitle'] = "RezGuide Add Main Menu";
		$this->load->view('templates/head',$data);
		$this->load->view('add/add_header');
		$this->load->view('add/add_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function notice($page = null){
		// $this->load->model('Notices_model');
		if($page == "complaint"){
			$data['pgTitle'] = "RezGuide Add A Notice";
			$data['section'] = "Notices";
			$data['subSection'] = "Complaint";
			$data['uri'] = "complaint";

				$data['formstart'] = form_open('notices/insert', array('id' => 'warning'));

				$data['studentName'] = form_input(array(
										'id' => 'nameSearch',
										'name' => 'studentName',
										'type' => 'text',
										'placeholder' => 'John Smith, 000000',
										'onkeyup' => 'ajaxSearch()'
				));
                $data['type'] = form_dropdown('type', array(
										'' => 'Type',
										'1' => 'Complaint 1',
										'2' => 'Complaint 2',
										'3' => 'Complaint 3'
				));
				$data['date'] = form_input(array(
										'id' => 'complaintdate',
										'name' => 'date',
										'type' => 'text',
										'placeholder' => 'yyyy/mm/dd'
				));
                $data['building'] = form_dropdown('building', array(
										'' => 'Building',
										'merlin' => 'Merlin',
										'falcon' => 'Falcon',
										'peregrine' => 'Peregrine',
										'kestrel' => 'Kestrel'
				));
				$data['roomNum'] = form_input(array(
										'id' => 'room1',
										'name' => 'roomNum',
										'type' => 'number',
										'placeholder' => 'Room #'
				));
				$data['content'] = form_textarea(array(
										'id' => 'contentText',
										'name' => 'content',
										'type' => 'text',
										'placeholder' => 'Content'
				));
				$data['notices_category'] = form_hidden('notices_category', 1);

			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('notices/notices_options_menu');
			$this->load->view('add/noticeform');
			$this->load->view('templates/footer');
			$this->load->view('livesearch_script');
			$this->load->view('templates/close');
		}elseif($page == "fine"){
			$data['pgTitle'] = "RezGuide Add A Notice";
			$data['section'] = "Notices";
			$data['subSection'] = "Fine";

			$data['uri'] = "fine";


				$data['formstart'] = form_open('notices/insert', array('id' => 'warning'));

				$data['studentName'] = form_input(array(
										'id' => 'nameSearch',
										'name' => 'studentName',
										'type' => 'text',
										'placeholder' => 'John Smith, 000000',
										'onkeyup' => 'ajaxSearch()'
				));
                $data['type'] = form_dropdown('type', array(
										'' => 'Type',
										'1' => 'Complaint 1',
										'2' => 'Complaint 2',
										'3' => 'Complaint 3'
				));
				$data['date'] = form_input(array(
										'id' => 'complaintdate',
										'name' => 'date',
										'type' => 'text',
										'placeholder' => 'yyyy/mm/dd'
				));
                $data['building'] = form_dropdown('building', array(
										'' => 'Building',
										'merlin' => 'Merlin',
										'falcon' => 'Falcon',
										'peregrine' => 'Peregrine',
										'kestrel' => 'Kestrel'
				));
				$data['roomNum'] = form_input(array(
										'id' => 'room1',
										'name' => 'roomNum',
										'type' => 'number',
										'placeholder' => 'Room #'
				));
				$data['content'] = form_textarea(array(
										'id' => 'contentText',
										'name' => 'content',
										'type' => 'text',
										'placeholder' => 'Content'
				));
				$data['notices_category'] = form_hidden('notices_category', 1);


			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('notices/notices_options_menu');
			$this->load->view('add/noticeform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "warning"){
			$data['pgTitle'] = "RezGuide Add A Notice";
			$data['section'] = "Notices";
			$data['subSection'] = "Warning";

			$data['uri'] = "warning";


				$data['formstart'] = form_open('notices/insert', array('id' => 'warning'));

				$data['studentName'] = form_input(array(
										'id' => 'nameSearch',
										'name' => 'studentName',
										'type' => 'text',
										'placeholder' => 'John Smith, 000000',
										'onkeyup' => 'ajaxSearch()'
				));
                $data['type'] = form_dropdown('type', array(
										'' => 'Type',
										'1' => 'Complaint 1',
										'2' => 'Complaint 2',
										'3' => 'Complaint 3'
				));
				$data['date'] = form_input(array(
										'id' => 'complaintdate',
										'name' => 'date',
										'type' => 'text',
										'placeholder' => 'yyyy/mm/dd'
				));
                $data['building'] = form_dropdown('building', array(
										'' => 'Building',
										'merlin' => 'Merlin',
										'falcon' => 'Falcon',
										'peregrine' => 'Peregrine',
										'kestrel' => 'Kestrel'
				));
				$data['roomNum'] = form_input(array(
										'id' => 'room1',
										'name' => 'roomNum',
										'type' => 'number',
										'placeholder' => 'Room #'
				));
				$data['content'] = form_textarea(array(
										'id' => 'contentText',
										'name' => 'content',
										'type' => 'text',
										'placeholder' => 'Content'
				));
				$data['notices_category'] = form_hidden('notices_category', 1);
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('notices/notices_options_menu');
			$this->load->view('add/noticeform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Notices Main Menu";
			$data['section'] = "Notices";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/notices');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function students($page = null){
		if($page == "pg3") {
			$data['pgTitle'] = "RezGuide Add A Student";
			$data['section'] = "Add A New Student";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('add/students/page3');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else if($page == "pg2") {
			$data['pgTitle'] = "RezGuide Add A Student";
			$data['section'] = "Add A New Student";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('add/students/page2');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Add A Student";
			$data['section'] = "Add A New Student";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('students/students_options_menu');
			$this->load->view('add/students/page1');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function news($page = null){
		// $this->load->model('Notices_model');
		if($page == "upcoming"){
			$data['pgTitle'] = "RezGuide Add An Upcoming Event";
			$data['section'] = "News";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "Campus News";
			$data['uri'] = "News";
			$data['subSection'] = "Add an upcoming event";
			$data['formstart'] = form_open('add/insert_record/news_upcoming', array('id' => 'newsEvent'));
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
				$data['category'] = form_hidden('news_category', 3);
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('campus/campus_options_menu');
			$this->load->view('add/newsform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "monthly"){
			$data['pgTitle'] = "RezGuide Add A Monthly Event";
			$data['section'] = "News";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "Campus Promotion";
			$data['uri'] = "Special Offers";
			$data['subSection'] = "Add a monthly event";
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
			$this->load->view('add/newsform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "event"){
			$data['pgTitle'] = "RezGuide Add An Event";
			$data['section'] = "News";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "Campus Event";
			$data['uri'] = "Event";
			$data['subSection'] = "Add an event";
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
			$this->load->view('add/newsform');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide News Main Menu";
			$data['section'] = "News";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/news');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function fsu($page = null){
		// $this->load->model('Notices_model');
		if($page == "contests"){
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
				$data['start'] = form_input(array(
										'name' => 'start',
										'type' => 'text',
										'placeholder' => 'Start'
				));
				$data['end'] = form_input(array(
										'name' => 'end',
										'type' => 'text',
										'placeholder' => 'End'
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
		}elseif($page == "events"){
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
				$data['start'] = form_input(array(
										'name' => 'start',
										'type' => 'text',
										'placeholder' => 'Start'
				));
				$data['end'] = form_input(array(
										'name' => 'end',
										'type' => 'text',
										'placeholder' => 'End'
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
		}else{
			$data['pgTitle'] = "RezGuide Fanshawe Student Union";
			$data['section'] = "FSU";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/fsu');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}

	public function general($page = null){
		// $this->load->model('Notices_model');
		if($page == "city"){
			$data['pgTitle'] = "RezGuide Add A City Location";
			$data['section'] = "General";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "City Info";
			$data['subSection'] = "City Locations";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('general/general_options_menu');
			$this->load->view('add/general/city');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "directory"){
			$data['pgTitle'] = "RezGuide Add A User to Directory";
			$data['section'] = "General";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "Directory Info";
			$data['subSection'] = "Directory";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('general/general_options_menu');
			$this->load->view('add/general/directory');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}elseif($page == "information"){
			$data['pgTitle'] = "RezGuide Add LTC Information";
			$data['section'] = "General";
			$data['ZoneTitle'] = "Add";
			$data['sectTitle'] = "General Info";
			$data['subSection'] = "LTC Information";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('general/general_options_menu');
			$this->load->view('add/general/information');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$data['pgTitle'] = "RezGuide Fanshawe Student Union";
			$data['section'] = "General";
			$this->load->view('templates/head',$data);
			$this->load->view('add/add_header');
			$this->load->view('add/general');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}

	}
	
	public function insert_record($function) {
		$this->load->model('insert_model');
		if ($this->form_validation->run() != FALSE){
			$this->Insert_model->$function();
		}

		if($function == "news_upcoming"){
			$this->news('upcoming');
		}elseif($function == "news_monthly"){
			$this->news('monthly');
		}elseif($function == "news_event"){
			$this->news('event');
		}

		if($function == "fsu_contest"){
			$this->fsu('contests');
		}elseif($function == "fsu_event"){
			$this->fsu('events');
		}

	}

}
