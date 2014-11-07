<?php
	require_once('includes/init.php');
	confirm_logged_in();
	
	if (isset($_POST['submit'])) {
		
		
		$firstname = trim(mysql_prep($_POST['firstname']));
		$lastname = trim(mysql_prep($_POST['lastname']));
		$program = trim(mysql_prep($_POST['program']));
		$number = trim(mysql_prep($_POST['number']));
		/*$email = trim(mysql_prep($_POST['email']));*/
		$phone = trim(mysql_prep($_POST['phone']));
		$address = trim(mysql_prep($_POST['address']));
		$image = trim(mysql_prep($_POST['image']));
		/*$points = trim(mysql_prep($_POST['points']));*/
		/*$notifications = trim(mysql_prep($_POST['notifications']));
		$balance = trim(mysql_prep($_POST['balance']));*/
		$fb = trim(mysql_prep($_POST['fb']));
		$tw = trim(mysql_prep($_POST['tw']));
		$ln = trim(mysql_prep($_POST['ln']));
		
		
		if(empty($_POST['firstname'])){$req .= "First name is required.<br>"; }
		if(empty($_POST['lastname'])){$req .= "Last name is required.<br>";}
		if(empty($_POST['number'])){$req .= "Student number is required.<br>";}
		/*if(empty($_POST['email'])){$req .= "Email is required.<br>";}*/
		if(empty($_POST['phone'])){$req .= "Phone number is required.<br>";}
		if(empty($_POST['address'])){$req .= "Address is required.<br>";}
		
		if(strlen($req) > 0) {
			echo "We have these errors:<br>";
			echo $req;
			$autofirstname = $firstname;
			$autolastname = $lastname;
			$autonumber = $number;
			$autoemail = $email;
			$autophone = $phone;
			$autoaddress = $address;
			$autoimage = $image;
			
		}else{
			$result = createProduct($firstname, $lastname, $number, $email, $phone, $address, $image, $points, $notifications, $balance, $fb, $tw, $ln);
			$message = $result;
		}
		
	}

	
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Add A Student</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link href="css/cms_styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-3 columns" id="mainLogo">
            	<img src="../img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-9 columns" id="pageTitle">
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="header">Fanshawe Rezguide</h1>
            	<h2 id="titleHeader" class="text-right header">Add A New Student</h2>
                </div>
            </div>
        </div>
    </header>
    <div id="welcomeMessage">
    </div>
    <section>
    	<?php if(!empty($message)){echo $message;} ?>
    	<form action="cms_add_student_pg2.php" method="post" id="newStudent">
        	<div class="row">
            	<div class="small-4 columns">
                	<div class="row">
                    	<div class="small-12 columns">
                        	<img src="../img/ProfileImg.png" alt="Choose an Image">
                            <div id="browseButton2" class="small-10 small-push-3 columns">
                        		<div class="small button">
                            		<span>choose image</span>
                        			<input id="imageButton" type="file" name="image" value="<?php if(!empty($autoimage)){echo $autoimage;} ?>">
                           	 	</div>
                        	</div>
                        </div>
                    </div>
                    <div id="nameProg">
                        <div class="row">
                            <div class="small-10 small-centered columns">
                                <input id="first" type="text" name="firstname" placeholder="First Name" value="<?php if(!empty($autofirstname)){echo $autofirstname;} ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-10 small-centered columns">
                                <input id="last" type="text" name="lastname" placeholder="Last Name" value="<?php if(!empty($autolastname)){echo $autolastname;} ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-8 small-centered columns">
                                <input id="program" type="text" name="program" placeholder="Program" value="<?php if(!empty($autoprogram)){echo $autoprogram;} ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-8 columns" id="mainInfo">
                	<div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Contact Information</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="smTitleDivider"></div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Cellphone</label>
                        </div>
                        <div class="small-4 small-push-1 columns">
                        	<input type="text" name="phone" placeholder="cellphone#" value="<?php if(!empty($autophone)){echo $autophone;} ?>">
                        </div>
                        <div class="small-2 small-push-1 columns">
                        	<label>Student #</label>
                        </div>
                        <div class="small-3 columns">
                        	<input type="text" name="number" nameplaceholder="student#" value="<?php if(!empty($autonumber)){echo $autonumber;} ?>">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>build/floor/room</label>
                        </div>
                        <div class="small-9 columns">
                        	<input type="text" name="address" placeholder="building/floor/room" value="<?php if(!empty($autoaddress)){echo $autoaddress;} ?>">
                        </div>
                    </div>
                	<div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Social Media</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="smTitleDivider"></div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Facebook</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" name="fb" placeholder="www.facebook.com" >
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Twitter</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" name="tw" placeholder="www.twitter.com">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>LinkedIn</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" name="ln" placeholder="www.linkedin.com">
                        </div>
                        <input class="createButton" type="submit" name="submit" value="Next">
                    </div>
                </div>
            </div>
        </form>
        
        <div class="row">
        	<div class="small-6 small-centered columns">
                <ul id="pageNav">
                    <li>
                        <a href="#">
                            <img src="../img/prev.png" alt="Previous Page">
                        </a>
                    </li>
                    <li>
                        <a href="cms_add_student_pg1.php">
                            <img src="../img/selected.png" alt="Page 1">
                        </a>
                    </li>
                    <li>
                        <a href="cms_add_student_pg2.php">
                            <img src="../img/unselected.png" alt="Page 2">
                        </a>
                    </li>
                    <li>
                        <a href="cms_add_student_pg3.php">
                            <img src="../img/unselected.png" alt="Page 3">
                        </a>
                    </li>
                    <li>
                        <a href="cms_add_student_pg2.php">
                            <img src="../img/next.png" alt="Next Page">
                        </a>
                    </li>
                </ul>
        	</div>
        </div>
    </section>
    
    <div class="filler"> </div>
    <footer>
    	<div class="row text-center">
        	<div class="small-6 small-centered columns">
                <nav class="row">
                    <div class="small-12 columns">
                        <ul id="footerNav">
                            <li>
                                <a class="botAnchor" href="cms_main.php">
                                <img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="../img/homeIcon.png" alt="Home">
                                <p class="menuText header">Home</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_add_main.php">
                                <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="../img/addIcon.png" alt="Add">
                                <p class="menuText header">Add</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_edit_main.php">
                                <img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="../img/editNavIcon.png" alt="Edit">
                                <p class="menuText header">Edit</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_users_main.php">
                                <img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="../img/usersNavIcon.png" alt="Users">
                                <p class="menuText header">Users</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="includes/caller.php?caller_id=logout">
                                <img onMouseOver="swapDark('4')" onMouseOut="swapLight('4')" class="botImg" src="../img/logoutIcon.png" alt="Logout">
                                <p class="menuText header">Logout</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
        	</div>
        </div>
    </footer>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="../js/main.js"></script>
  </body>
</html>
