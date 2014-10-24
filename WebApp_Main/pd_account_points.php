<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account - Points</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    
    <script>

	$(document).ready(

    function() {

        $("#pointsScroll").niceScroll({cursorcolor:"#518d84",cursorwidth: "10px", cursorborder:"none"}); 
   	 });
	 </script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <link rel="shortcut icon" href="img/favicon.ico" />
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-3 columns" id="mainLogo">
            	<img src="img/FINAL_LOGO.png" alt="Reznet">
            </div>
           <div class="small-9 columns" id="pageTitle">
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="right header">Personal Dashboard</h1>
            	<h2 id="titleHeader" class="text-right header">Account</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row">
    	<div class="small-4 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Points</p>
        </div>
    </div>
    <div class="row">
    <div class="small-12 columns">
    	<div class="small-6 columns text-center">
        	<img src="img/pointsTotal.png" id="pointsImage">
        </div>
    	<div class="small-6 columns">
        <div id="pointsScroll">
    	<dl class="accordion" data-accordion>
        	<dd>
            	
    			<a href="#panel1">
                <div class="row pointsInfo">
                    <div class="small-8 columns">
                        <p class="pointsInfraction">Underage Drinking</p>
                        <p class="pointsDate">December 1, 2013</p>
                    </div>
                    <div class="small-4 columns">
                    	<img class="right pointsMiniImage" src="img/pointsMini.png" alt="2">
                    </div>
                </div>
                </a>
                <div class="pointsDivider">
                </div>
    			<div id="panel1" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd>
    			<a href="#panel2">
                <div class="row pointsInfo">
                    <div class="small-8 columns">
                        <p class="pointsInfraction"> Drinking Games</p>
                        <p class="pointsDate">December 20, 2013</p>
                    </div>
                    <div class="small-4 columns">
                    	<img class="right pointsMiniImage" src="img/pointsMini.png" alt="2">
                    </div>
                </div>
                </a>
                <div class="pointsDivider">
                </div>
    			<div id="panel2" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd>
    			<a href="#panel3">
                <div class="row pointsInfo">
                    <div class="small-8 columns">
                        <p class="pointsInfraction">Noise Complaint</p>
                        <p class="pointsDate">December 20, 2013</p>
                    </div>
                    <div class="small-4 columns">
                    	<img class="right pointsMiniImage" src="img/pointsMini.png" alt="2">
                    </div>
                </div>
                </a>
                <div class="pointsDivider">
                </div>
    			<div id="panel3" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd>
                <a href="#panel4">
                <div class="row pointsInfo">
                    <div class="small-8 columns">
                        <p class="pointsInfraction">Noise Complaint</p>
                        <p class="pointsDate">December 20, 2013</p>
                    </div>
                    <div class="small-4 columns">
                        <img class="right pointsMiniImage" src="img/pointsMini.png" alt="2">
                    </div>
                </div>
                </a>
                <div class="pointsDivider">
                </div>
                <div id="panel4" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </dd>
        </dl>
        
        </div>
        </div>
        </div>
    </div>
    <div class="filler"> </div> 
    </section>
    <footer>
        <?php
            include('includes/footer.php');
        ?>
    </footer>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/main.js"></script>
  </body>
</html>
  

