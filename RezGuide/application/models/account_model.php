<?php

class Account_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getPoints($sId){
		$student = $this->db->get_where('tbl_pointsstudent', array('students_id' => $sId));
		$studentPoints = $student->row();
		$points = $this->db->get_where('tbl_points', array('points_id' => $studentPoints->points_id));
		return $points->result();
	}

	public function totalPoints($sId){
		
	}
}