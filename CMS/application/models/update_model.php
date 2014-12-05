<?php

class Update_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getAll($table){
		$allData = $this->db->get($table);
		return $allData->result();
	}

	public function getSingle($table, $col, $id){
		$singleData = $this->db->get_where($table, array($col => $id));
		return $singleData->result();
	}

	public function directory() {
		$name = $_POST['name'];
		$namearray = explode(' ', trim($name));
		$record = array(
					'directory_firstname' => $namearray[0],
					'directory_lastname' => end($namearray),
					'directory_position' => $_POST['position'],
					'directory_email' => $_POST['email'],
					'directory_officenumber' => $_POST['officenumber'],
					'directory_username' => $_POST['username'],
					'directory_password' => $_POST['password']		);

		$this->db->where('directory_id', $_POST['id']);
		$this->db->update('tbl_directory', $record);

	}

}