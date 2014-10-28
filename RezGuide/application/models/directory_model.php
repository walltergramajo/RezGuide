<?php

class Directory_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getDirectory(){
		$allStaff = $this->db->get('tbl_directory');
		return $allStaff->result();
	}

}