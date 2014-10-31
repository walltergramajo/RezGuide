<?php

class News extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('News_model');
	}

	public function index(){
		$data['pgTitle'] = "RezGuide - News";
		$data['results'] = $this->News_model->getNews(1);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('news/news_header');

		$this->load->view('news/news_general');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function comingevents(){
		$data['pgTitle'] = "RezGuide - News";
		$data['results'] = $this->News_model->getNews(3);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('news/news_header');

		$this->load->view('news/news_comingevents');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}

	public function monthly(){
		$data['pgTitle'] = "RezGuide - News";
		$data['results'] = $this->News_model->getNews(2);
		$data['scrollTarget'] = ".accordionScroll";
		$this->load->view('templates/head',$data);
		$this->load->view('news/news_header');

		$this->load->view('news/news_monthly');

		$this->load->view('templates/footer');
		//$this->load->view('includes/nicescroll');
		$this->load->view('templates/close');
	}
}