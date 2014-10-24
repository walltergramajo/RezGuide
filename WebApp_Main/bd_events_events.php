<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Building- Events</title>
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
            	<h1 id="titleDirectory" class="right header">Building Dashboard</h1>
            	<h2 id="titleHeader" class="text-right header">Events</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row">
    	<div class="small-10 small-centered columns text-center">
    		<p id="noticeTitle" class="header"> Events</p>
        </div>
    </div>
    <div class="row">
    <div class="small-8 small-centered columns">
    	<div class="accordionScroll">
    	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
    			<a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this)" onClick="highlightLink2(this);">Residence BBQ <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel1" class="content"> 
                    <p class="complaintDate">September 4</p>
                    <p class="location">Outside of R Building</p>
                    <p>This is a bbq for everybody at Residence to welcome you to Fanshawe College</p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text">
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this)" onClick="highlightLink2(this);">Open House<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel2" class="content"> 
                    <p class="complaintDate">August 23</p>
                    <p class="location">Your Residence Building</p>
                    <p>Come familiarize yourself with your future home for the school year at our open house. Get to know some of the Residence staff and have </p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text">
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this)" onClick="highlightLink2(this);">Scavenger Hunt <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel3" class="content"> 
                    <p class="complaintDate">September 4</p>
                    <p class="location">Fanshawe Campus</p>
                    <p>Take part in a scavenger hunt to explore campus and get a feel for the location of building. There will also be staff in different locations if you have any questions.</p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text">
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this)" onClick="highlightLink2(this);">Fundraiser <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel4" class="content"> 
                    <p class="complaintDate">September 14</p>
                    <p class="location">Fanshawe soccer field</p>
                    <p>Come take part in this fundraiser with baked goods and fun activities where all the proceeds go to a good cause.</p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text">
                </div>
  			</dd>
            <dd class="accordionBottom">
                <a href="#panel5" class="accordionLink accordionTitle" onClick="highlightLink2(this)" onClick="highlightLink2(this);">Health Info Event <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                <div id="panel5" class="content"> 
                    <p class="complaintDate">September 24</p>
                    <p class="location">Outside of R Building</p>
                    <p>Living on your own as a student can be tough. This event will help show you how to still eat healthy on a student budget and things to do around campus to maintain a healthy lifestyle.</p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text">
                </div>
            </dd>
            <dd class="accordionBottom">
                <a href="#panel6" class="accordionLink accordionTitle" onClick="highlightLink2(this)" onClick="highlightLink2(this);">TD Environment Friends<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                <div id="panel6" class="content"> 
                    <p class="complaintDate">September 26</p>
                    <p class="location">Outside of R Building</p>
                    <p>TD Canada Trust is coming to Fanshawe college to help show methods of maintaining a clean campus and helping the environment out.</p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text">
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
                		<li><a href="personalDashboard.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    	<li><a href="bd_events_events.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="bd_events_contests.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="bd_events_programs.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li><a href="bd_events_contests.php"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
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
