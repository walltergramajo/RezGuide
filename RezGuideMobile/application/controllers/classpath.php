<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classpath extends CI_Controller {
	public function index(){
		$this->load->view('templates/head');
		$this->load->view('classpath/classpath');
		$this->load->view('templates/close');
	}

	public function schedule(){
		$this->load->view('templates/head');
		$this->load->view('classpath/schedule');
		$this->load->view('templates/close');
	}

	public function guide_select(){
		$this->load->view('templates/head');
		$this->load->view('classpath/guide_select');
		$this->load->view('templates/close');
	}

	public function text_guide(){
		$this->load->view('templates/head');
		$this->load->view('classpath/text_guide');
		$this->load->view('templates/close');
	}

	public function path_guide(){
		$this->load->view('templates/head');
		$this->load->view('classpath/path_guide');
		$this->load->view('templates/close');
	}

	public function threeDmap(){
		$this->load->view('templates/head');
		$this->load->view('classpath/3d_map');
		$this->load->view('templates/close');
	}

	public function begin_classpath(){
		$this->load->view('templates/head');
		$this->load->view('classpath/classpath_input');
		$this->load->view('templates/close');
	}
}