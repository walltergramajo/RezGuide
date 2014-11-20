<?php

class Gbhk_model extends CI_Model {
	public function garbageDays(){
		$query = "SELECT * FROM tbl_rbuildgbhk, tbl_gbhk WHERE tbl_rbuildgbhk.gbhk_id = tbl_gbhk.gbhk_id AND tbl_rbuildgbhk.rbuilding_id = ".$this->session->userdata('rbuilding')." AND gbhk_garbage = 1";
		$gbDays = $this->db->query($query);
		return $gbDays->result();
	}

	public function housekeepingDays(){
		$query = "SELECT * FROM tbl_rbuildgbhk, tbl_gbhk WHERE tbl_rbuildgbhk.gbhk_id = tbl_gbhk.gbhk_id AND tbl_rbuildgbhk.rbuilding_id = ".$this->session->userdata('rbuilding')." AND gbhk_housekeeping = 1";
		$hkDays = $this->db->query($query);
		return $hkDays->result();
	}
}