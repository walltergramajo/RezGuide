<?php

class Chat extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - Chat";
		$this->load->view('templates/head',$data);
		$this->load->view('chat/chat_header');

		$this->load->view('chat/chat_start');

		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	public function chat_channel(){
		$data['pgTitle'] = "RezGuide - Chat";
		$data['scrollTarget'] = ".chatScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('chat/chat_header');

		$this->load->view('chat/chat_main');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}
}