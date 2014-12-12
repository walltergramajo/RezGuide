<?php

class City_Model extends CI_Model {
	public function getCity($cat){
		if($cat == null){
			$cat = 1;
		}
		$cityQuery = $this->db->get_where('tbl_city', array('cityCat_id' => $cat));
		return $cityQuery->result();
	}
}