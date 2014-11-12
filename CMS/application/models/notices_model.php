<?php

class Notices_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getComplaints($u){
		$complaints = $this->db->get_where('tbl_notices', array('noticesCat_id' => 3,'students_id' => $u));
		return $complaints->result();
	}

	public function getMaintenance($u){
		$maintenance = $this->db->get_where('tbl_notices', array('noticesCat_id' => 2,'students_id' => $u));
		return $maintenance->result();
	}

	public function getWarnings($u){
		$warnings = $this->db->get_where('tbl_notices', array('noticesCat_id' => 1,'students_id' => $u));
		return $warnings->result();
	}

	public function insert($_Post){
		$data = array(
					'notices_description' => $_POST['content'],
					'notices_description' => $this->input->post('content'),
					'notices_date' => $_Post['date'],
					'noticesCat_id' => $_Post['notices_category']
		);

		$this->db->insert('tbl_notices', $data); 
	}
}