<?php

class Building_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function rules(){
		$allRules = $this->db->get('tbl_rules');
		return $allRules->result();
	}

}