<?php

class Contests_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getContests($cat){
		$contestsQuery = $this->db->get_where('tbl_contests', array('contestCat_id' => $cat));
        return $contestsQuery->result();
	}
}