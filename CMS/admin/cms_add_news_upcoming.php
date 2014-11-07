<?php
	require_once('includes/init.php');
	confirm_logged_in();
	
	$category = "upcoming";
	
	if (isset($_POST['submit'])) {
		
		
		$file = trim(mysql_prep($_POST['file']));
		$location = trim(mysql_prep($_POST['location']));
		$date = trim(mysql_prep($_POST['date']));
		$time = trim(mysql_prep($_POST['time']));
		$name = trim(mysql_prep($_POST['name']));
		$desc = trim(mysql_prep($_POST['desc']));
		$image_type = $_FILES['file']['type'];
		$dir = "images";
	
		if($_FILES['file']['size']!=0){
			if($image_type=='image/jpeg' || $image_type=='image/jpg' && $image_type=='image/pjpeg'){
				echo $image_type;
				$tmp_name = $_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_name, $dir."/".$_FILES['file']['name']);
			}else{
				echo "wrong file type";
			}
		}else{
			echo "no file";
		}
		
		
		if(empty($_POST['location'])){$req .= "Location is required.<br>"; }
		if(empty($_POST['date'])){$req .= "Date is required.<br>";}
		if(empty($_POST['time'])){$req .= "Event time is required.<br>";}
		if(empty($_POST['name'])){$req .= "Title is required.<br>";}
		if(empty($_POST['desc'])){$req .= "Description is required.<br>";}
		
		if(strlen($req) > 0) {
			echo "We have these errors:<br>";
			echo $req;
			$autolocation = $location;
			$autodate = $date;
			$autotime = $time;
			$autoname = $name;
			$autodesc = $desc;
			
		}else{
			$result = createNews($file, $location, $date, $time, $name, $desc, $category);
			$message = $result;
		}
		
	}

	
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Add An Upcoming Event</title>
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
            	<h2 id="titleHeader" class="text-right header">Add An Upcoming Event</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section>
    <?php if(!empty($message)){echo $message;} ?>
    	<form  enctype="multipart/form-data" action="cms_add_news_upcoming.php" method="post" id="newsEvent">
        	<div class="row">
            	<div class="small-4 columns" id="locDateTime">
                	<div class="row">
                    	<div class="small-12 columns">
                        	<div id="imgContainer">
                        	<img id="img" src="../img/camera.png" alt="Choose an Image">
                            </div>
                            <div id="browseButton2" class="small-10 small-push-3 columns">
                        		<div class="small button">
                            		<span>choose image</span>
                        			<input onchange="readURL(this);" name="file" id="imageButton" type="file" value="choose image">
                           	 	</div>
                        	</div>
                        </div>
                    </div>
                    <div class="locDateTimeInputs">
                        <div class="row">
                            <div class="small-3 columns">
                                <label>location</label>
                            </div>
                            <div class="small-9 columns">
                                <input name="location" type="text" placeholder="location">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label>mm/dd/yyyy</label>
                            </div>
                            <div class="small-9 columns">
                                <input name="date" type="text" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label>time</label>
                            </div>
                            <div class="small-9 columns">
                                <input name="time" type="text" placeholder="time">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-8 columns">
                	<div class="coreInfo">
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Title</label>
                            </div>
                            <div class="small-10 columns">
                                <input name="name" type="text" placeholder="Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Content</label>
                            </div>
                            <div class="small-10 columns">
                                <textarea name="desc" placeholder="Content"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 columns">
                                <input type="submit" name="submit" id="add" value=" ">
                            </div>
                        </div>
                    </div>
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
