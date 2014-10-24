<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Building Dashboard- Programs</title>
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
    		<p id="noticeTitle" class="header">Programs</p>
        </div>
    </div>
    <div class="row">
    <div class="small-8 small-centered columns">
    	<div class="accordionScroll">
    	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
    			<a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Fitness Program<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel1" class="content"> 
                    <p class="complaintDate">September 4</p>
                    <p class="location">Gym 3</p>
                    <p>Want to learn some fitness tips that can help you lead a healthier life? Come to Fanshawe's Fitness Program which is free to its students.</p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text"> 
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Learn Pottery Program <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel2" class="content"> 
                    <p class="complaintDate">September 15</p>
                    <p class="location">Forwell Hall</p>
                    <p>Ever wanted to learn pottery? This workshop will help you learn the basics and inspire you to unleash your inner potter.</p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text">
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Beginner Dance Program <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel3" class="content"> 
                    <p class="complaintDate">September 19</p>
                    <p class="location">Fanshawe soccer field</p>
                    <p>Bust a move with our beginner dance program. Don't feel shy, this program has alot of beginner dancers.</p>
                    <a href="#"><p>More Info</p></a>
                    <label>Who can come:</label><input type="text">
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Learn League of Legends Program<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel4" class="content"> 
                    <p class="complaintDate">September 24</p>
                    <p class="location">Forwell Hall</p>
                    <p>Learn one of the most popular games on the pc today. Held by some of Fanshwe's own students, this is an open event to all those who wish to learn.</p>
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
                		<li><a href="bd_events_contests.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    	<li><a href="bd_events_events.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="bd_events_contests.php"><img src="img//profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="bd_events_programs.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li class="arrow unavailable"> <a href="#"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
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
