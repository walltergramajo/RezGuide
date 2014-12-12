<?php

class Insert_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	/**
	*	Insert all news items to tbl_news with appropriate newsCat_id
	*/

	public function news_upcoming() {
		$record = array(
					'news_title' => $_POST['name'],
					'news_location' => $_POST['location'],
					'news_datetime' => $_POST['date'],
					'news_description' => $_POST['desc'],
					'newsCat_id' => $_POST['news_category']
		);

		$this->db->insert('tbl_news', $record); 
	}

	public function news_monthly() {
		$record = array(
					'news_title' => $_POST['name'],
					'news_location' => $_POST['location'],
					'news_datetime' => $_POST['date'],
					'news_description' => $_POST['desc'],
					'newsCat_id' => $_POST['news_category']
		);

		$this->db->insert('tbl_news', $record); 
	}

	public function news_event() {
		$record = array(
					'news_title' => $_POST['name'],
					'news_location' => $_POST['location'],
					'news_datetime' => $_POST['date'],
					'news_description' => $_POST['desc'],
					'newsCat_id' => $_POST['news_category']
		);

		$this->db->insert('tbl_news', $record); 
	}

	/**
	*	Insert FSU contests to tbl_contests, and FSU events to tbl_events
	*/

	public function fsu_contest() {
		$record = array(
					'contests_title' => $_POST['name'],
					'contests_description' => $_POST['desc'],
					'contests_location' => $_POST['location'],
					'contests_startdate' => $_POST['start'],
					'contests_enddate' => $_POST['end'],
					'contests_link' => $_POST['link'],
					'contestCat_id' => $_POST['contest_category']
		);

		$this->db->insert('tbl_contests', $record); 
	}

	public function fsu_event() {
		$record = array(
					'events_title' => $_POST['name'],
					'events_description' => $_POST['desc'],
					'events_location' => $_POST['location'],
					'events_startdate' => $_POST['start'],
					'events_enddate' => $_POST['end'],
					'events_link' => $_POST['link'],
					'events_whocome' => $_POST['who'],
					'eventsCat_id' => $_POST['events_category']
		);

		$this->db->insert('tbl_events', $record); 
	}

	/**
	*	Insert Building contests to tbl_contests, and Building events to tbl_events
	*/

	public function bld_contest() {
		$startdate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$enddate = $_POST['e_year'] . "-" . $_POST['e_month'] . "-" . $_POST['e_day'];
		$caldate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$record = array(
					'contests_title' => $_POST['name'],
					'contests_description' => $_POST['desc'],
					'contests_location' => $_POST['location'],
					'contests_startdate' => $startdate,
					'contests_enddate' => $enddate,
					'contests_link' => $_POST['link'],
					'contests_whoenter' => $_POST['who'],
					'contestCat_id' => $_POST['contest_category']
		);

		$this->db->insert('tbl_contests', $record); 
	}

	public function bld_event() {
		$startdate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$enddate = $_POST['e_year'] . "-" . $_POST['e_month'] . "-" . $_POST['e_day'];
		$caldate = $_POST['s_year'] . "-" . $_POST['s_month'] . "-" . $_POST['s_day'];
		$record = array(
					'events_title' => $_POST['name'],
					'events_description' => $_POST['desc'],
					'events_location' => $_POST['location'],
					'events_startdate' => $startdate,
					'events_caldate' => $startdate,
					'events_enddate' => $enddate,
					'events_link' => $_POST['link'],
					'events_whocome' => $_POST['who'],
					'events_studentprice' => $_POST['studprice'],
					'events_guestprice' => $_POST['gstprice'],
					'eventsCat_id' => $_POST['events_category']
		);

		$this->db->insert('tbl_events', $record); 
	}

	public function bld_program() {
		$record = array(
					'events_title' => $_POST['name'],
					'events_description' => $_POST['desc'],
					'events_location' => $_POST['location'],
					'events_startdate' => $_POST['start'],
					'events_enddate' => $_POST['end'],
					'events_link' => $_POST['link'],
					'events_whocome' => $_POST['who'],
					'eventsCat_id' => $_POST['events_category']
		);

		$this->db->insert('tbl_events', $record); 
	}

	public function bld_rule() {
		$record = array(
					'rules_title' => $_POST['name'],
					'rules_description' => $_POST['desc'],
					'rules_date' => date(l jS\, Y)
				);

		$this->db->insert('tbl_rules', $record);
	}


}