<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Edit Student</title>
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
            	<h2 id="titleHeader" class="text-right header"> Edit Student</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section>
    	<form id="newStudent">
        	<div class="row">
            	<div class="small-4 columns">
                	<div class="row">
                    	<div class="small-12 columns">
                        	<img src="../img/profileImg.png" alt="Choose an Image">
                            <div id="browseButton2" class="small-10 small-push-3 columns">
                        		<div class="small button">
                            		<span>choose image</span>
                        			<input id="imageButton" type="file" value="choose image"  onchange="img.src= URL.createObjectURL(this.files[0])">
                           	 	</div>
                        	</div>
                        </div>
                    </div>
                    <div id="nameProg">
                        <div class="row">
                            <div class="small-10 small-centered columns">
                                <input id="first" type="text" placeholder="First Name" value="Caitlin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-10 small-centered columns">
                                <input id="last" type="text" placeholder="Last Name" value="Davidson">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-8 small-centered columns">
                                <input id="program" type="text" placeholder="Program" value="Graphic Design">
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
                        <div class="small-4 columns">
                        	<input type="text" placeholder="XXX-XXX-XXXX" value="555-555-5555">
                        </div>
                        <div class="small-2 columns">
                        	<label>Student #</label>
                        </div>
                        <div class="small-4 columns">
                        	<input type="text" placeholder="0000000" value="0000000">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Address</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" placeholder="building, floor, room" value="merlin, 3, 610">
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
                        	<input type="text" placeholder="www.facebook.com" value="www.facebookexample.com">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Twitter</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" placeholder="www.twitter.com" value="www.twitterexample.com">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>LinkedIn</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" placeholder="www.linkedin.com" value="www.linkedinexample.com">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        <div class="row">
        	<div class="small-6 small-centered columns">
                <ul id="pageNav">
                    <li>
                        <a href="#">
                            <img src="../img/WA_lArrow.png" alt="Previous Page">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_student_pg1.php">
                            <img src="../img/WA_dotFull.png" alt="Page 1">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_student_pg2.php"> <img src="../img/WA_dotEmpty.png" alt="Page 2">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_student_pg3.php">
                            <img src="../img/WA_dotEmpty.png" alt="Page 3">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_student_pg2.php">
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
