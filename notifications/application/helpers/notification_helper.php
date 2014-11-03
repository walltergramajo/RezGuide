<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getUnseen(){	

	$CI = get_instance();
	$CI->load->model('notices_model');
	$notifications = $this->Notices_model->getAll($this->session->userdata('sId'));
	return $notifications;

}