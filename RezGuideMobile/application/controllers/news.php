<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('news/news');
		$this->load->view('templates/close');
	}

	public function general(){
		$this->load->model('News_model');
		$data['results'] = $this->News_model->getNews(1);
		$this->load->view('templates/head',$data);
		$this->load->view('news/news_general');
		$this->load->view('templates/close');
	}

	public function monthly(){
		$this->load->model('News_model');
		$data['results'] = $this->News_model->getNews(2);
		$this->load->view('templates/head',$data);
		$this->load->view('news/news_monthlyreport');
		$this->load->view('templates/close');
	}

	public function coming_events(){
		$this->load->model('News_model');
		$data['results'] = $this->News_model->getNews(3);
		$this->load->view('templates/head',$data);
		$this->load->view('news/news_comingevents');
		$this->load->view('templates/close');
	}
}