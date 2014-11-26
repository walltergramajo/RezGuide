<?php
	class fsu extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	function index(){
		$data['pgTitle'] = "FSU Main Menu";
		$this->load->view('templates/head', $data);
		$this->load->view('fsu/header');
		$this->load->view('fsu/fsu_main');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function fsu_general(){
		$data['pgTitle'] = "FSU General";
		$this->load->view('templates/head', $data);
		$this->load->view('fsu/header');
		$this->load->view('fsu/fsu_general');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function fsu_contests(){
		$data['pgTitle'] = "FSU Contest Select";
		$this->load->view('templates/head', $data);
		$this->load->view('fsu/header');
		$this->load->view('fsu/fsu_contest_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function fsu_events(){
		$data['pgTitle'] = "FSU Event Select";
		$this->load->view('templates/head', $data);
		$this->load->view('fsu/header');
		$this->load->view('fsu/fsu_events');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	
}

?>