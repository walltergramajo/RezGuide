<?php 

class Requests_model extends CI_Model {
	public function sendGeneralRequest($request){
		$this->db->insert('tbl_requests',$request);
	}

	// public function requestMediation($request){
	// 	$this->db->insert('tbl_requests',$request);
	// }

	// public function requestWithdraw($request){
	// 	$this->db->insert('tbl_requests',$request);
	// }
}