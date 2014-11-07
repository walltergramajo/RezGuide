<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifications {

	public function getunseen() {

		// $CI =& get_instance();
	 //    $CI->load->model('notices_model');

	    if($CI->session->userdata('logged_in') == TRUE) {
		    // $unseen = $CI->notices_model->getAll($CI->session->userdata('sId'));
		    // return $unseen;
		    return "Hello Kat";
		} else {
			return "No notifications";
		}

		return "You have no new notifications Y.";
	}
}