<?php

class Contests_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();

		$this->load->database();
	}

	public function getContests(){
		$eventsQuery = $this->db->get('tbl_contests');
		return $eventsQuery->result();
	}
}