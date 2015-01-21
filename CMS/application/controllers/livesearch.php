<?php

class Livesearch extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Students_model");
	}

	public function autocomplete() {
	    $search_data = $this->input->post('search_data');
	    	$data['controller_uri'] = 'students';
	    	$data['function_uri'] = 'information';
	    $data['students'] = $this->Students_model->get_autocomplete($search_data);

	    $resultslist = $this->load->view('students/searchresults',$data);

	    //echo $results;

	    echo $resultslist;
	    //echo $search_data;
	}

}