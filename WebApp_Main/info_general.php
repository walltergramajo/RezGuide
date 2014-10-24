<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>General Info- Info</title>
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
        	<div class="small-2 columns" id="mainLogo">
            	<img src="img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-10 columns" id="pageTitle">
            	<div id="headerContainerSolo">
            	<h2 id="titleHeaderSolo" class="text-right header">General Info</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row">
    	<div class="small-10 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Info</p>
        </div>
    </div>
    <div class="row">
    <div class="small-8 small-centered columns">
    	<div class="accordionScroll">
    	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
    			<a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 1 <span class="right accordionDropDownIcon"><img src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel1" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 2 <span class="right accordionDropDownIcon"><img src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel2" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 3 <span class="right accordionDropDownIcon"><img src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel3" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 4 <span class="right accordionDropDownIcon"><img src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel4" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                		<li><a href="mainMenu.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    	<li><a href="info_general.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="info_directory.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="info_cityguide.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li><a href="info_directory.php"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
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
