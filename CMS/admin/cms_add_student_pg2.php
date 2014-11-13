<?php
//	require_once('includes/init.php');
//	confirm_logged_in();
//	
//	
//
//		$_SESSION['firstname'] = $firstname;
//		$_SESSION['lastname'] = $lastname;
//		$_SESSION['image'] = $image;
//		$_SESSION['phone'] = $phone;
//		$_SESSION['number'] = $number;
//		$_SESSION['address'] = $address;
//		$_SESSION['fb'] = $fb;
//		$_SESSION['tw'] = $tw;
//		$_SESSION['ln'] = $ln;
//	
//	if (isset($_POST['submit'])) {
//		
//		
//		$firstname = trim(mysql_prep($_POST['firstname']));
//		$lastname = trim(mysql_prep($_POST['lastname']));
//		$program = trim(mysql_prep($_POST['program']));
//		$number = trim(mysql_prep($_POST['number']));
//		$email = trim(mysql_prep($_POST['email']));
//		$phone = trim(mysql_prep($_POST['phone']));
//		$address = trim(mysql_prep($_POST['address']));
//		$image = trim(mysql_prep($_POST['image']));
//		$points = trim(mysql_prep($_POST['points']));
//		$notifications = trim(mysql_prep($_POST['notifications']));
//		$balance = trim(mysql_prep($_POST['balance']));
//		$fb = trim(mysql_prep($_POST['fb']));
//		$tw = trim(mysql_prep($_POST['tw']));
//		$ln = trim(mysql_prep($_POST['ln']));
//		
//		
//		/*if(empty($_POST['firstname'])){$req .= "First name is required.<br>"; }
//		if(empty($_POST['lastname'])){$req .= "Last name is required.<br>";}
//		if(empty($_POST['number'])){$req .= "Student number is required.<br>";}*/
//		/*if(empty($_POST['email'])){$req .= "Email is required.<br>";}*/
//		/*if(empty($_POST['phone'])){$req .= "Phone number is required.<br>";}
//		if(empty($_POST['address'])){$req .= "Address is required.<br>";}*/
//		
//		if(strlen($req) > 0) {
//			echo "We have these errors:<br>";
//			echo $req;
//			/*$autofirstname = $firstname;
//			$autolastname = $lastname;
//			$autonumber = $number;*/
//			$autoemail = $email;
//			/*$autophone = $phone;
//			$autoaddress = $address;
//			$autoimage = $image;*/
//			
//		}else{
//			$result = createProduct($firstname, $lastname, $program, $number, $email, $phone, $address, $image, $points, $notifications, $balance, $fb, $tw, $ln);
//			$message = $result;
//		}
//		
//	}
//
//	
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Add A Student</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link href="css/cms_styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/fanFavicon.ico" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-3 columns" id="mainLogo">
            	<img src="../img/WA_rgLogoSm.png" alt="RezGuide"> </div>
            <div class="small-9 columns" id="pageTitle">
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="header">Fanshawe Rezguide</h1>
            	<h2 id="titleHeader" class="text-right header">Add A New Student</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section>
    <?php if(!empty($message)){echo $message;} ?>
    	<form action="cms_add_student_pg2.php" method="post" id="newStudent">
        	<div class="row" id="mainInfo">
                <div class="small-12 columns">
                	<div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Residence Status</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="lgTitleDivider"></div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Balance</label>
                        </div>
                        <div class="small-4 columns">
                        	<input type="text" name="balance" placeholder="balance">
                        </div>
                        <div class="small-2 columns">
                        	<label>Points</label>
                        </div>
                        <div class="small-4 columns">
                        	<input type="text" name="points" placeholder="points">
                        </div>
                    </div>
                    <div id="duplicater">
                	<div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Notices</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="lgTitleDivider"></div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Type</label>
                        </div>
                        <div class="small-3 columns">
                        	<select>
                            	<option>Type</option>
                                <option>Fine</option>
                                <option>Complaint</option>
                                <option>Warning</option>
                            </select>
                        </div>
                        <div class="small-2 columns">
                        	<label>Date Issued</label>
                        </div>
                        <div class="small-5 columns">
                        	<input type="text" placeholder="date issued (mm/dd/yyyy)">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Message</label>
                        </div>
                    	<div class="small-10 columns">
                        	<textarea placeholder="Message"></textarea>
                        </div>
                    </div>
                    </div><!--end duplicater-->
                    
                    <div class="row">
                        <div class="small-6  columns">
                            <div class="lgTitleDivider2"></div>
                            <p id="addInput"> Add Notice
                            <img src="../img/WA_addR.png" alt="addNotice">
                            </p>
                        </div>
                        
                        <div class="small-2 columns addImg">
                        	<input class="submitButton" type="submit" name="submit" value="Next">
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="small-8 small-push-4 columns">
                    		<div id="content">
                        	</div>
                        </div>
                    </div>
                    <!--<input class="createButton" type="submit" name="submit" value="Finish">-->
                </div>
            </div>
        </form>
        
        <div class="row">
        	<div class="small-7 small-centered columns">
                <ul id="pageNav">
                    <li>
                        <a href="cms_add_student_pg1.php">
                            <img src="../img/WA_lArrow.png" alt="Previous Page">
                        </a>
                    </li>
                    <li>
                        <a href="cms_add_student_pg1.php">
                            <img src="../img/WA_dotEmpty.png" alt="Page 1">
                        </a>
                    </li>
                    <li>
                        <a href="cms_add_student_pg2.php">
                            <img src="../img/WA_dotFull.png" alt="Page 2">
                        </a>
                    </li>
                    <li>
                        <a href="cms_add_student_pg3.php">
                            <img src="../img/WA_dotEmpty.png" alt="Page 3">
                        </a>
                    </li>
                    <li>
                        <a href="cms_add_student_pg3.php">
                            <img src="../img/WA_rArrow.png" alt="Next Page">
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
                                <img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="../img/CMS_home.png" alt="Home">
                                <p class="menuText header">Home</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_add_main.php">
                                <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="../img/CMS_add.png" alt="Add">
                                <p class="menuText header">Add</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_edit_main.php">
                                <img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="../img/CMS_edit.png" alt="Edit">
                                <p class="menuText header">Edit</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_users_main.php">
                                <img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="../img/CMS_users.png" alt="Users">
                                <p class="menuText header">Users</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="includes/caller.php?caller_id=logout">
                                <img onMouseOver="swapDark('4')" onMouseOut="swapLight('4')" class="botImg" src="../img/CMS_logout.png" alt="Logout">
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
