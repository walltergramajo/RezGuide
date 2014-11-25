<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('chat/chat_intro');
		$this->load->view('templates/close');
	}

	public function intro(){
		$this->load->view('templates/head');
		$this->load->view('chat/chat_intro');
		$this->load->view('templates/close');
	}

	public function login(){
		$this->load->view('templates/head');
		$this->load->view('chat/chat_login');
		$this->load->view('templates/close');
	}

	public function chatlog(){
		$this->load->view('templates/head');
		$this->load->view('chat/chat');
		$this->load->view('templates/close');
	}
}