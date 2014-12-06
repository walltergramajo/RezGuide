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

	public function get_autocomplete($search_data) {
        $this->db->select('students_id, students_firstname, students_lastname, students_stNumber, rbuilding_id, students_roomNumber');
        $this->db->like('students_firstname', $search_data);
        $this->db->or_like('students_lastname', $search_data);
        //$this->db->or_like('students_stNumber', $search_data);

        $results = $this->db->get('tbl_students', 10);

  //       $result_data = "[";
  //       foreach($results->result() as $row):
  //       	$result_data .= "{";
		// 	$result_data .= "\"id\" : ". $row->students_id .",";
		// 	$result_data .= "\"firstname\" : \"". $row->students_firstname ."\",";
		// 	$result_data .= "\"lastname\" : \"". $row->students_lastname ."\",";
		// 	$result_data .= "\"studentnumber\" : \"". $row->students_stNumber ."\",";
		// 	$result_data .= "\"rbuilding\" : \"". $row->rbuilding_id ."\",";
		// 	$result_data .= "\"roomnum\" : \"". $row->students_roomNumber ."\"";
		// 	$result_data .= "},";
  //       endforeach;
  //       $result_data = chop($result_data, ",");
		// $result_data .= "]";

		// echo $result_data;

        //echo $search_data;
		echo json_encode($results->result());
    }

}