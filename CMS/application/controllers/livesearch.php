<?php

class Livesearch extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Students_model");
	}

	public function autocomplete() {
	    $search_data = $this->input->post('search_data');
	    $query = $this->Students_model->get_autocomplete($search_data);

	    //$results = $query->result();

	    //echo $results;

	    echo $query;
	    //echo $search_data;
	}

}