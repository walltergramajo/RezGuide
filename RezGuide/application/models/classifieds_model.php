<?php

class Classifieds_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getClassifiedsSell($cat = null){
		if($cat === null){
			$classQuery = $this->db->get_where('tbl_classifieds', array('classifieds_sell' => 1));
			return $classQuery->result();
		}else{
			$classQuery = $this->db->get_where('tbl_classifieds', array('classifieds_sell' => 1,'classCat_id' => $cat));
			return $classQuery->result();
		}
	}

	public function getClassifiedsBuy($cat = null){
		if($cat === null){
			$classQuery = $this->db->get_where('tbl_classifieds', array('classifieds_buy' => 1));
			return $classQuery->result();
		}else{
			$classQuery = $this->db->get_where('tbl_classifieds', array('classifieds_buy' => 1,'classCat_id' => $cat));
			return $classQuery->result();
		}
	}
}