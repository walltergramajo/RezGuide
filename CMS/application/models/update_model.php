<?php

class Update_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getAll($table, $col, $cat){
		$allData = $this->db->get_where($table, array($col => $cat));
		return $allData->result();
	}

	public function getSingle($table, $col, $id){
		$singleData = $this->db->get_where($table, array($col => $id));
		return $singleData->row();
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

	public function users() {
		$name = $_POST['name'];
		$namearray = explode(' ', trim($name));
		$record = array(
					'admins_firstname' => $namearray[0],
					'admins_lastname' => end($namearray),
					'admins_position' => $_POST['position'],
					'admins_email' => $_POST['email'],
					'admins_empnumber' => $_POST['empnumber'],
					'admins_username' => $_POST['username'],
					'admins_password' => $_POST['password']		);

		$this->db->where('admins_id', $_POST['id']);
		$this->db->update('tbl_admins', $record);

	}

	public function building_contest() {
		$record = array(
					'contests_title' => $_POST['title'],
					'contests_description' => $_POST['description'],
					'contests_startdate' => $_POST['startdate'],
					'contests_enddate' => $_POST['enddate'],
					'contests_location' => $_POST['location'],
					'contests_link' => $_POST['link'],
					'contestCat_id' => $_POST['category_id'],
					'contests_whoenter' => $_POST['whoenter']
				);

		$this->db->where('contests_id', $_POST['id']);
		$this->db->update('tbl_contests', $record);

	}

	public function building_event() {
		$record = array(
					'events_title' => $_POST['title'],
					'events_description' => $_POST['description'],
					'events_moreinfo' => $_POST['moreinfo'],
					'events_startdate' => $_POST['startdate'],
					'events_enddate' => $_POST['enddate'],
					'events_location' => $_POST['location'],
					'events_link' => $_POST['link'],
					'eventsCat_id' => $_POST['category_id'],
					'events_whocome' => $_POST['whocome']
				);

		$this->db->where('events_id', $_POST['id']);
		$this->db->update('tbl_events', $record);

	}

}