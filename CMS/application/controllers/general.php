<?php

class General extends CI_Controller {

	public function city($edit = null){
		// $this->load->model('Notices_model');
		if($edit == "edit"){

		}else{
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
		}
	}

	public function directory($edit = null, $record = null){
		// $this->load->model('Notices_model');
		if($edit == "edit"){
			if($record != null){
				$data['pgTitle'] = "Edit Directory Listing";
				$data['ZoneTitle'] = "Edit";
				$data['sectTitle'] = "Directory";
					$data['section'] = "General";
					$data['uri'] = "directory";
				$event = $this->update_model->getSingle('tbl_directory', 'diretory_id', $record);
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
			}else{
				$data['pgTitle'] = "Select Directory Listing to Edit";
				$data['ZoneTitle'] = "Edit";
				$data['sectTitle'] = "Directory";
					$data['section'] = "General";
					$data['uri'] = "directory";
				$data['events'] = $this->update_model->getAll('tbl_directory', 'directory_id');

				$this->load->view('templates/head', $data);
				$this->load->view('building/building_header');
				$this->load->view('building/building_options_menu');
				$this->load->view('building/building_events_edit_select');
				$this->load->view('templates/footer');
				$this->load->view('deletescript.php');
				$this->load->view('templates/close');
			}
		}else{
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
		}
	}

	public function information($edit = null){
		// $this->load->model('Notices_model');
		if($edit == "edit"){

		}else{
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
		}
	}


}