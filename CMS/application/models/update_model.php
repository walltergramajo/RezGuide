<?php

class Update_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getAll($table, $col=null, $cat=null){
		if($cat != null){
			$allData = $this->db->get_where($table, array($col => $cat));
		}else{
			$allData = $this->db->get($table);
		}
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

	public function bld_contest() {
		$startdate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$enddate = $_POST['e_year'] . "-" . $_POST['e_month'] . "-" . $_POST['e_day'];
		$record = array(
					'contests_title' => $_POST['name'],
					'contests_description' => $_POST['desc'],
					'contests_startdate' => $startdate,
					'contests_enddate' => $enddate,
					'contests_location' => $_POST['location'],
					'contests_link' => $_POST['link'],
					'contestCat_id' => $_POST['contest_category'],
					'contests_whoenter' => $_POST['who']
				);

		$this->db->where('contests_id', $_POST['id']);
		$this->db->update('tbl_contests', $record);

	}

	public function bld_event() {
		$startdate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$enddate = $_POST['e_year'] . "-" . $_POST['e_month'] . "-" . $_POST['e_day'];
		$caldate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$record = array(
					'events_title' => $_POST['name'],
					'events_description' => $_POST['desc'],
					'events_moreinfo' => $_POST['info'],
					'events_startdate' => $startdate,
					'events_caldate' => $startdate,
					'events_enddate' => $enddate,
					'events_location' => $_POST['location'],
					'events_link' => $_POST['link'],
					'eventsCat_id' => $_POST['event_category'],
					'events_whocome' => $_POST['who']
				);

		$this->db->where('events_id', $_POST['id']);
		$this->db->update('tbl_events', $record);

	}

	public function bld_program() {
		$startdate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$enddate = $_POST['e_year'] . "-" . $_POST['e_month'] . "-" . $_POST['e_day'];
		$caldate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$record = array(
					'events_title' => $_POST['name'],
					'events_description' => $_POST['desc'],
					'events_moreinfo' => $_POST['info'],
					'events_startdate' => $startdate,
					'events_caldate' => $startdate,
					'events_enddate' => $enddate,
					'events_location' => $_POST['location'],
					'events_link' => $_POST['link'],
					'eventsCat_id' => $_POST['event_category'],
					'events_whocome' => $_POST['who']
				);

		$this->db->where('events_id', $_POST['id']);
		$this->db->update('tbl_events', $record);

	}

	public function bld_rule() {
		$record = array(
					'rules_title' => $_POST['name'],
					'rules_description' => $_POST['desc']
				);

		$this->db->where('rules_id', $_POST['id']);
		$this->db->update('tbl_rules', $record);
	}

	public function fsu_contest() {
		$startdate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$enddate = $_POST['e_year'] . "-" . $_POST['e_month'] . "-" . $_POST['e_day'];
		$record = array(
					'contests_title' => $_POST['name'],
					'contests_description' => $_POST['desc'],
					'contests_startdate' => $startdate,
					'contests_enddate' => $enddate,
					'contests_location' => $_POST['location'],
					'contests_link' => $_POST['link'],
					'contestCat_id' => $_POST['contest_category'],
					'contests_whoenter' => $_POST['who']
				);

		$this->db->where('contests_id', $_POST['id']);
		$this->db->update('tbl_contests', $record);

	}

	public function fsu_event() {
		$startdate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$enddate = $_POST['e_year'] . "-" . $_POST['e_month'] . "-" . $_POST['e_day'];
		$caldate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$record = array(
					'events_title' => $_POST['name'],
					'events_description' => $_POST['desc'],
					'events_moreinfo' => $_POST['info'],
					'events_startdate' => $startdate,
					'events_caldate' => $startdate,
					'events_enddate' => $enddate,
					'events_location' => $_POST['location'],
					'events_link' => $_POST['link'],
					'eventsCat_id' => $_POST['event_category'],
					'events_whocome' => $_POST['who']
				);

		$this->db->where('events_id', $_POST['id']);
		$this->db->update('tbl_events', $record);

	}



}