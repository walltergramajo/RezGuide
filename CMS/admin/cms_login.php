<?php

require_once('admin/includes/init.php');

//Get their ip
$ip = $_SERVER["REMOTE_ADDR"];

if (isset($_POST['submit'])) {
	$username = trim(mysql_prep($_POST['username']));
	$password = trim(mysql_prep($_POST['password']));
	//echo $username;
	$result = logIn($username, $password);
	$message = $result;
}



?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RezGuide CMS Login</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/cms_styles.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <header class="hide">
    	<h1 class="hide"> Login </h1>
    </header>
    <div id="loginLogo" class="row">
        	<div class="small-6 small-centered columns text-center">
            	<img src="img/FINAL_LOGO.png" alt="Reznet!">
            </div>
    </div>
    <section id="loginArea">
        <div class="row">
            <div class="large-6 small-centered columns text-center">
            <p id="school" class="header">Fanshawe</p>
            </div>
        </div>
        <div class="row">
            <div class="large-6 small-centered columns text-center">
            <p id="rezTitle" class="header">Rezguide</p>
            </div>
        </div>
        <form action="cms_login.php" method="post">
            <div class="row">
                <div class="small-4 small-centered columns text-center">
                <label class="loginField">Username</label>
                <input type="text" name="username" value="" placeholder="username"/>
                </div>
            </div>
            <div class="row">
                <div class="small-4 small-centered columns text-center">
                <label class="loginField">Password</label>
                <input type="password" name="password" value="" placeholder="password" />
                </div>
            </div>
            <div class="row">
                <div class="small-6 small-centered columns text-center">
                <input id="loginGoLogin" type="submit" name="submit" src="img/login.png" value="">
                </div>
            </div>
        </form>
    </section>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
