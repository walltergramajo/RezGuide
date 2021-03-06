<?php

class Login_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function verify($u,$p){
		//just filler login verification ------------------
		if($u != null && $p != null){
			$this->getStudentData($u,$p);
			return "confirmed";
		}else{
			return "confirmed";
		}
		//-------------------------------------------------
	}

	public function getStudentData($u,$p){
		$userQuery = $this->db->get_where('tbl_students', array('students_username' => $u, 'students_password' => $p));
		$userResult = $userQuery->row();
		$userArray = array(
					'username' => $u,
					'users_name' => $userResult->students_firstname,
					'sId' => $userResult->students_id,
					'rbuilding' => $userResult->rbuilding_id,
					'logged_in' => TRUE
				);

		$this->session->set_userdata($userArray);
	}

	public function logout(){
		$this->session->sess_destroy();
	}
}