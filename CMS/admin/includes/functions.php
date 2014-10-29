<?php
	require_once('init.php');
	//set deault timezone
	
	date_default_timezone_set('America/Toronto');
	
	function mysql_prep($value){
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists("mysql_real_escape_string");
		
		if($new_enough_php) { //PHP v4.3.0 or higher
			if($magic_quotes_active) {
				$value = stripslashes($value);
			}
			$value = mysql_real_escape_string($value);
		}else{
			if(!$magic_quotes_active){
				$value = addslashes($value);
			}
		}
		return $value;
	}
	
	function logIn($username, $password) {
		
		
		$loginstring = "SELECT * FROM tbl_admins WHERE admins_username='{$username}' AND admins_password='{$password}'";
		//echo $loginstring;
		$user_set = mysql_query($loginstring);
		
		if(mysql_num_rows($user_set)) {
			$found_user = mysql_fetch_array($user_set);
			$id = $found_user['admins_id'];
			$_SESSION['admins_id'] = $id;
			$_SESSION['admins_username'] = $found_user['admins_username'];
			//echo $id;
			if(mysql_query($loginstring)) {
			//updates the ip address, login date.
			$updatestring = "UPDATE tbl_admin SET admin_ip='{$ip}', admin_Attempts = 0, admin_LastLogInDate='{$date}' WHERE admin_id ='{$id}'";	
			//echo $updatestring;
			$updatequery = mysql_query($updatestring);
			
		}
			
			if(mysql_query($loginstring)) {
				$updatestring = "UPDATE tbl_admins SET admins_ip='{$ip}' WHERE admins_id='{$id}'";	
				//echo $updatestring;
				$updatequery = mysql_query($updatestring);
			}
			
			redirect_to("admin/cms_main.php");
		}else {
			$message = "Username/Password combination is incorrect.<br>Please make sure that your caps lock key is turned off and try again.";	
			return $message;
		}
	}
	
	function redirect_to($location = NULL) {
		
		if($location != NULL) {
				header("Location: {$location}");
				exit;
		}
	}
	
function welcomeMessage(){	
	$afternoon = "Good afternoon ";
	$evening = "Good evening ";
	$late = "Working late? ";
	$morning = "Good morning! ";


	//Get the current hour
	$current_time = date("H"); //H is used for hours in a 24 hour clock.
	//echo $current_time;

	//12 p.m. - 4 p.m.
	if ($current_time >= 12 && $current_time <= 16) {
	return $afternoon;
	}
	// 5 p.m. to 11 p.m.
	elseif ($current_time >= 17 && $current_time <= 24) {
	return $evening;
	}
	//12 a.m. - 5 a.m.
	elseif ($current_time >= 1 && $current_time <= 5) {
	return $late;
	}
	// 6 a.m. to 11 a.m.
	elseif ($current_time >= 6 && $current_time <= 11) {
	return $morning;
	}

}

	
?>