<?php

class Building_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();

		$this->load->database();
	}

	public function rules(){
		$allRules = $this->db->get('tbl_rules');
		return $allRules->result();
	}

}