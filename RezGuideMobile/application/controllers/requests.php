<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requests extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('requests/requests_general');
		$this->load->view('templates/close');
	}

	public function general(){
		$this->load->view('templates/head');
		$this->load->view('requests/requests_general');
		$this->load->view('templates/close');
	}

	public function mediation(){
		$this->load->view('templates/head');
		$this->load->view('requests/requests_mediation');
		$this->load->view('templates/close');
	}

	public function withdraw(){
		$this->load->view('templates/head');
		$this->load->view('requests/requests_withdraw');
		$this->load->view('templates/close');
	}

	public function sendRequest($cat){
		$this->load->model('Requests_model');

		if($cat == 1){
			$requestName = "General request from ".$this->input->post('studentName');
		}
		elseif($cat == 2){
			$requestName = "Mediation request from ".$this->input->post('studentName')." concerning ".$this->input->post('roommateName');
		}
		elseif($cat == 3){
			$requestName = "Request to withdraw from ".$this->input->post('studentName');
		}

		date_default_timezone_set('America/Toronto');
		$timestamp = time();
		$datetime = date('Y-m-d',$timestamp);

		$request = array(
			'students_id' => $this->session->userdata('sId'),
			'requestsCat_id' => $cat,
			'requests_date' => $datetime,
			'requests_message' => $this->input->post('message'),
			'requests_name' => $requestName
		);

		$this->Requests_model->sendGeneralRequest($request);
		$this->index();
	}
}