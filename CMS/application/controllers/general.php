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

	public function directory($edit = null){
		// $this->load->model('Notices_model');
		if($edit == "edit"){

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