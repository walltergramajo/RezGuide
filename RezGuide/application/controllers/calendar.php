<?php

class Calendar extends CI_Controller {
	
	public function showCal(){
		$data['pgTitle'] = "Calendar";
		$this->load->view('templates/head', $data);

		$prefs = array(
			'show_next_prev' => TRUE,
			'next_prev_url' => base_url().'index.php/calendar/showCal'
		);

		$this->load->library('calendar', $prefs);

		
		$this->load->view('building/bd_header');

		$data['calendar'] = $this->calendar->generate($this->uri->segment(3),$this->uri->segment(4));
		$this->load->view('calendar_view',$data);

		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}
}
