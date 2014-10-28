<?php

class Dashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Personal Dashboard";
		$this->load->view('templates/head',$data);

		$this->load->view('personal/personal_dashboard');

		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function account($page = null){
		
		if($page == "balance"){
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Account Balance";
			$data['section'] = "Your Profile";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_account_balance');

			$this->load->view('templates/footer');
			$this->load->view('templates/close');

		}elseif($page == "points"){
			$this->load->model('Account_model');

			$data['pgTitle'] = "RezGuide - Personal Dashboard - My Points";
			$data['section'] = "Account";
			$data['results'] = $this->Account_model->getPoints($this->session->userdata('sId'));
			$data['scrollTarget'] = "#pointsScroll";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_account_points');

			$this->load->view('templates/footer');
			//$this->load->view('includes/nicescroll');
			$this->load->view('templates/close');

		}elseif($page == "edit_p2"){
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Edit Account";
			$data['section'] = "Your Profile";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_account_edit_p2');

			$this->load->view('templates/footer');
			$this->load->view('templates/close');

		}else{
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Edit Account";
			$data['section'] = "Your Profile";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_account_edit');

			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function notices($page = null){
		$this->load->model('Notices_model');
		if($page == "warnings"){
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Notices - Warnings";
			$data['section'] = "Notices";
			$data['results'] = $this->Notices_model->getWarnings($this->session->userdata('sId'));
			//$data['scrollTarget'] = ".accordionScroll";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_notices_warnings');

			$this->load->view('templates/footer');
			//$this->load->view('includes/nicescroll');
			$this->load->view('templates/close');

		}elseif($page == "balance"){
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Notices - Balance";
			$data['section'] = "Notices";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_notices_balance');

			$this->load->view('templates/footer');
			$this->load->view('templates/close');

		}elseif($page == "maintenance"){
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Notices - Maintenance";
			$data['section'] = "Notices";
			$data['results'] = $this->Notices_model->getMaintenance($this->session->userdata('sId'));
			//$data['scrollTarget'] = ".accordionScroll";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_notices_maintenance');

			$this->load->view('templates/footer');
			//$this->load->view('includes/nicescroll');
			$this->load->view('templates/close');

		}else{
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Notices - Complaints";
			$data['section'] = "Notices";
			$data['results'] = $this->Notices_model->getComplaints($this->session->userdata('sId'));
			//$data['scrollTarget'] = ".accordionScroll";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_notices_complaints');

			$this->load->view('templates/footer');
			//$this->load->view('includes/nicescroll');
			$this->load->view('templates/close');
		}
	}

	public function requests($page = null){

		if($page == "mediation"){
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Requests - Mediation";
			$data['section'] = "Requests";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_requests_mediation');

			$this->load->view('templates/footer');
			$this->load->view('templates/close');

		}elseif($page == "withdraw"){
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Requests - Withdraw";
			$data['section'] = "Requests";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_requests_withdraw');

			$this->load->view('templates/footer');
			$this->load->view('templates/close');

		}else{
			$data['pgTitle'] = "RezGuide - Personal Dashboard - Requests";
			$data['section'] = "Requests";
			$this->load->view('templates/head',$data);
			$this->load->view('personal/pd_header');

			$this->load->view('personal/pd_requests_general');

			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}
}