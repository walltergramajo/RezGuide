<?php

class News_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}

	public function getNews($cat){
		$newsQuery = $this->db->get_where('tbl_news', array('newsCat_id' => $cat));
		return $newsQuery->result();
	}
}