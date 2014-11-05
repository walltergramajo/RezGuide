<?php

class Account_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getPoints($sId){
		$query = "SELECT * FROM tbl_pointsstudent, tbl_points WHERE tbl_pointsstudent.points_id = tbl_points.points_id AND tbl_pointsstudent.students_id = ".$sId;
		$points = $this->db->query($query);
		return $points->result();

		// $student = $this->db->get_where('tbl_pointsstudent', array('students_id' => $sId));
		// $studentPoints = $student->result();
		// $points = $this->db->get_where('tbl_points', array('points_id' => $studentPoints->points_id));
		// return $points->result();
	}

	public function totalPoints($sId){
		
	}
}