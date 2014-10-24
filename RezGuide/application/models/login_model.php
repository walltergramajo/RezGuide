<?php

class Login_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();

		$this->load->database();
	}

	public function verify($u,$p){
		//just filler ------------------
		if($u != null && $p != null){
			return "confirmed";
		}else{
			return "confirmed";
		}
		//------------------------------
	}

	public function login(){
		
	}

	public function getStudentData($sid){
		//$this->load->
	}
}