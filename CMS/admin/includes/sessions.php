<?php

	require_once('init.php');

	session_start();
	
	function confirm_logged_in() {
		if (!isset($_SESSION['admins_id'])) {
			// redirect_to("admin/cms_main.php");
		}
	}
	
	function logged_out() {
		session_destroy();
		redirect_to("../../cms_login.php");
	}

?>