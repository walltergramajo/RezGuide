<?php

class Insert_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function notice() {
		$data = array(
					'' => '',
		);

		$this->db->insert('tbl_notices', $data); 
	}

}