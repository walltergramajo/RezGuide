<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('news/news');
		$this->load->view('templates/close');
	}

	public function general(){
		$this->load->view('templates/head');
		$this->load->view('news/news_general');
		$this->load->view('templates/close');
	}

	public function monthly(){
		$this->load->view('templates/head');
		$this->load->view('news/news_monthlyreport');
		$this->load->view('templates/close');
	}

	public function coming_events(){
		$this->load->view('templates/head');
		$this->load->view('news/news_comingevents');
		$this->load->view('templates/close');
	}
}