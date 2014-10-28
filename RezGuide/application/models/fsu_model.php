<?php

class FSU_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getFSUInfo(){
		$fsuInfo = $this->db->get('tbl_fsuinfo');
		return $fsuInfo->result();
	}

}