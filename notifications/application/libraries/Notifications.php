<?php

class Notifications {

	public function getunseen() {

		$CI =& get_instance();
	    $CI->load->model('Notifications_model');

	    if($CI->session->userdata('logged_in') == TRUE) {
		    $unseen = $CI->Notifications_model->getAll($CI->session->userdata('sId'));
		    return $unseen;
		    // $theusername = $CI->session->userdata('username');
		    // return $theusername;
		} else {
			return "No notifications";
		}

		// return "You have no new notifications.";
	}
}