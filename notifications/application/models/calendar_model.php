<?php

class Calendar_model extends CI_Model {

	public function getEvents(){
		$query = "SELECT * FROM tbl_studentsevents, tbl_events WHERE tbl_studentsevents.events_id = tbl_events.events_id AND tbl_studentsevents.students_id = ".$this->session->userdata('sId');
		$calEvents = $this->db->query($query);
		return $calEvents->result();
	}
}