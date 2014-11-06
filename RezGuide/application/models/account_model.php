<?php

class Account_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getPoints($sId){
		$query = "SELECT * FROM tbl_pointsstudent, tbl_points WHERE tbl_pointsstudent.points_id = tbl_points.points_id AND tbl_pointsstudent.students_id = ".$sId;
		$points = $this->db->query($query);
		return $points->result();
	}

	public function totalPoints($sId){
		
	}

	public function studentData($sId){
		$query = $this->db->get_where('tbl_students', array('students_id' => $sId));
		return $query->result_array();
	}
}