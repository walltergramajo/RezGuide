<?php

class Notifications_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getAll($u, $getwhat, $wasseen){
		$this->db->select($getwhat);
		$this->db->from('tbl_notices');
		$this->db->where(array('students_id' => $u, 'seen' => $wasseen));
		$this->db->order_by('timestamp', 'desc');

		$allnotices = $this->db->get();
		return $allnotices->result();
	}
}