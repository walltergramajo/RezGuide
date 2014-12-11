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

	public function createClassified($classified){
		
		// if($this->input->post('type') === 'buy'){
		// 	$buy = 1;
		// 	$sell = 0;
		// }elseif($this->input->post('type') === 'sell'){
		// 	$buy = 0;
		// 	$sell = 1;
		// }

		// if($this->input->post('condition') === 'new'){
		// 	$new = 1;
		// 	$used = 0;
		// }elseif($this->input->post('condition') === 'used'){
		// 	$new = 0;
		// 	$used = 1;
		// }

		// $classified = array(
		// 	'classifieds_user' => $this->session->userdata('username'),
		// 	'classifieds_title' => $this->input->post('title'),
		// 	'classifieds_description' => $this->input->post('itemDescription'),
		// 	'classifieds_email' => $this->input->post('email'),
		// 	'classifieds_phone' => $this->input->post('phone'),
		// 	'classifieds_buy' => $buy,
		// 	'classifieds_sell' => $sell,
		// 	'classifieds_new' => $new,
		// 	'classifieds_used' => $used,
		// 	'classifieds_price' => $this->input->post('price'),
		// 	'classCat_id' => $this->input->post('category'),
		// 	'students_id' => $this->session->userdata('sId')
		// );

		$this->db->insert('tbl_classifieds',$classified);
	}
}