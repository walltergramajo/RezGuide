<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fanshawe Student Union - General Information</title>
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
            	<div id="headerContainerSolo">
            	<h2 id="titleHeaderSolo" class="text-right header"><span class="kern">F</span><span class="kern">S</span><span class="kern">U</span></h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row">
    	<div class="small-10 small-centered columns text-center">
    		<p id="noticeTitle" class="header">General Information</p>
        </div>
    </div>
    <div class="row">
    <div class="small-8 small-centered columns">
    	<div class="accordionScroll">
    	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
    			<a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Where to get new bus pass<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel1" class="content"> 
                    <p class="complaintDate">Year Round</p>
                    <p class="location">Biz Booth</p>
                    <p>Lost/Stolen bus pass? Get your replacement pass at Biz Booth during regular school hours. Replacement fee will be applied.</p>
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Fanshawe weight room access<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel2" class="content"> 
                    <p class="complaintDate">September 4</p>
                    <p class="location">Weight Room</p>
                    <p>Looking to start in the weight room to lose a few extra pounds? Find out if your program grants you access to the weight room or sign up today.</p>
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">How to opt-out of FSU Health Plan<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel3" class="content"> 
                    <p class="complaintDate">September 4</p>
                    <p class="location">FSU Office</p>
                    <p>If you are covered under your parents health plans or don't find FSU health place useful, you can opt-out before the specified date and receive a part of your tuition back.</p>
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Contact FSU<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel4" class="content"> 
                    <p class="complaintDate">September 4</p>
                    <p class="location">FSU Office</p>
                    <p>Need to ask us something? Stop by the FSU office and arrange to speak to someone or go to the FSU website for more information on how to conctact us.</p>
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
                    	<li><a href="fsu_general.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="fsu_events.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="fsu_contests.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li><a href="fsu_events.php"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
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
