<?php

class Notifications extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Notifications";
		$data['allAlerts'] = $this->fetchnotifications->getnotifications();
		//$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('notifications/notifications_head',$data);

		$this->load->view('notifications/all_notifications');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

}