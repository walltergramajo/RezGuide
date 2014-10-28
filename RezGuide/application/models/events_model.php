<?php

class Events_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getEvents($cat){
		$eventsQuery = $this->db->get_where('tbl_events', array('eventsCat_id' => $cat));
		return $eventsQuery->result();
	}
}