<?php

class Students_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getAllStudents(){
		$allStudents = $this->db->get('tbl_students');
		return $allStudents->result();
	}

	public function getStudent($id){
		$student = $this->db->get_where('tbl_students', array('students_id' => $id));
		return $student->result();
	}

}