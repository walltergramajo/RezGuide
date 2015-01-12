<?php

class Fetchnotifications {

	public function getnotifications($col = null, $wasseen) {

		$CI =& get_instance();
		$CI->load->model('Notifications_model');

	    if($CI->session->userdata('logged_in') == TRUE) {
		    $unseen = $CI->Notifications_model->getAll($CI->session->userdata('sId'), $col, $wasseen);
		    return $unseen;
		} else {
			return "No notifications";
		}

	}

}