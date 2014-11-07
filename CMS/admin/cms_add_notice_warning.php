<?php
	require_once('includes/init.php');
	confirm_logged_in();
	
	$category = "warning";
	
	if (isset($_POST['submit'])) {
		
		
		$studentNum = trim(mysql_prep($_POST['studentNum']));
		$type = trim(mysql_prep($_POST['type']));
		$date = trim(mysql_prep($_POST['date']));
		$building = trim(mysql_prep($_POST['building']));
		$roomNum = trim(mysql_prep($_POST['roomNum']));
		$content = trim(mysql_prep($_POST['content']));
		
		
		if(empty($_POST['studentNum'])){$req .= "Student number is required.<br>"; }
		if(empty($_POST['date'])){$req .= "Date is required.<br>";}
		if(empty($_POST['roomNum'])){$req .= "Room number is required.<br>";}
		if(empty($_POST['content'])){$req .= "Complaint description is required.<br>";}
		
		if(strlen($req) > 0) {
			echo "We have these errors:<br>";
			echo $req;
			$autostudentNum = $studentNum;
			$autotype = $type;
			$autodate = $date;
			$autobuilding = $building;
			$autoroomNum = $roomNum;
			$autocontent = $content;
			
		}else{
			$result = createComplaint($studentNum, $type, $date, $building, $roomNum, $content, $category);
			$message = $result;
		}
		
	}

	
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Add A Notice</title>
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
            	<h2 id="titleHeader" class="text-right header">Add Warning</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section>
    	<?php if(!empty($message)){echo $message;} ?>
    	<form action="cms_add_notice_warning.php" method="post" id="warning">
            <div class="row">
                <div class="small-2 columns">
                    <label>Student #</label>
                </div>
                <div class="small-4 columns">
                	<input id="studNum" name="studentNum" type="number" placeholder="0000000" value="<?php if(!empty($autostudNum)){echo $autostudNum;} ?>">
                </div>
                <div class="small-2 columns">
                    <label>Type</label>
                </div>
                <div class="small-4 columns">
                	<select name="type">
                    	<option value="">Type</option>
                        <option value="1">Complaint 1</option>
                        <option value="2">Complaint 2</option>
                        <option value="3">Complaint 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
            	<div class="small-2 columns">
                	<label>mm/dd/yyyy</label>
                </div>
                <div class="small-2 columns">
                	<input id="complaintdate" name="date" type="text" placeholder="mm/dd/yyyy" value="<?php if(!empty($autodate)){echo $autodate;} ?>">
                </div>
                <div class="small-2 columns">
                	<label>Building</label>
                </div>
                <div class="small-2 columns">
                	<select name="building">
                    	<option value="">Building</option>
                        <option value="Merlin">Merlin</option>
                        <option value="Falcon">Falcon</option>
                        <option value="Paragon">Paragon</option>
                        <option value="Kestrel">Kestrel</option>
                    </select>
                </div>
                <div class="small-2 columns">
                	<label>Room #</label>
                </div>
                <div class="small-2 columns">
                	<input id="room1" name="roomNum" type="number" placeholder="Room #" value="<?php if(!empty($autoroomNum)){echo $autoroomNum;} ?>">
                </div>
            </div>
            <div class="row">
            	<div class="small-2 columns">
                	<label>Content</label>
                </div>
                <div class="small-10 columns">
                	<textarea id="contentText" type="text" name="content" placeholder="Content" value="<?php if(!empty($autocontentText)){echo $autocontentText;} ?>"></textarea>
                </div>
            </div>
            <div class="row">
            	<div class="small-12 columns">
                	<input type="submit" name="submit" id="add" value=" ">
                </div>
            </div>
        </form>
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
