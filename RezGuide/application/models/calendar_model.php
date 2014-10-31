<?php

class Calendar_model extends CI_Model {

	public function getEvents(){
		$student = $this->db->get_where('tbl_studentsevents', array('students_id' => $this->session->userdata('sId')));
		$studentEvents = $student->result_array();
		$calEvents = $this->db->get_where('tbl_events', array('events_id' => $studentEvents['events_id']));
		return $calEvents->result_array();
	}
}