<?php

class Delete_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function rules($record) {
		$this->db->delete('tbl_rules', array('rules_id' => $record));
	}


}