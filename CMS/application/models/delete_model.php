<?php

class Delete_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function contests($record) {
		$this->db->delete('tbl_contests', array('contests_id' => $record));
	}

	public function events($record) {
		$this->db->delete('tbl_events', array('events_id' => $record));
	}

	public function rules($record) {
		$this->db->delete('tbl_rules', array('rules_id' => $record));
	}


}