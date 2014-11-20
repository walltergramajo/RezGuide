<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('news/news');
		$this->load->view('templates/close');
	}
}