<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notices - Warnings</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
    
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    
    <script>

	$(document).ready(

    function() {

        $(".accordionScroll").niceScroll({cursorcolor:"#518d84",cursorwidth: "10px", cursorborder:"none"}); 
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
            	<h2 id="titleHeader" class="text-right header">Notices</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row">
    	<div class="small-10 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Warnings</p>
        </div>
    </div>
    <div class="row">
    <div class="small-8 small-centered columns">
    	<div class="accordionScroll">
    	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
    			<a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Guest Limit Second Warning <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel1" class="content"> 
                     <p class="complaintDate">September 19, 2014</p>
                    <p>The 2nd warning to the student in regards to the amount of guests allowed in Residence. Next warning may results in removal from Residence.</p>
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Inappropriate behaviour <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel2" class="content"> 
                     <p class="complaintDate">September 21, 2014</p>
                    <p>Student has been warned about their behaviour in Residence towards other dorm members and members on the floor. This behaviour will not be tolerated on the next warning.</p>
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Dorm Damage Final Warning <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel3" class="content"> 
                     <p class="complaintDate">September 30, 2014</p>
                    <p>Student has continously damaged the walls in his/her dorm and does not seem to want to respect Residence rules or pay the fee on time to repair the walls.</p>
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Offensive Language<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel4" class="content"> 
                     <p class="complaintDate">October 1, 2014</p>
                    <p>Student has continously verbally abused Residence Leaders when they were instructed to stop doing something that is frowned upon. </p>
                </div>
  			</dd>
        
        
        </dl>
        
        </div>
        </div>
    </div>
    
    	<div class="row">
        	<div class="small-5 small-push-4 columns">
            	<div class="profileNav2">
            		<ul class="pagination"> 
                		<li><a href="pd_notices_maintenance.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    	<li><a href="pd_notices_complains.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="pd_notices_maintenance.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="pd_notices_warnings.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li class="arrow unavailable"><a href="#"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                 	</ul>
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
