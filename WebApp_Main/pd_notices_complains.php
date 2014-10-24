<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notices - Complaints</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
    
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    
    <script>

	$(document).ready(

    function() {

        $(".accordionScroll").niceScroll({cursorcolor:"#518d84",cursorwidth: "10px", cursorborder:"none"}); 
   	 });
	 
	 jQuery(function(){
     $(".img-swap").hover(
          function(){this.src = this.src.replace("_off","_on");},
          function(){this.src = this.src.replace("_on","_off");
     });
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
    		<p id="noticeTitle" class="header">Complaints</p>
        </div>
    </div>
    <div class="row">
    <div class="small-8 small-centered columns">
    	<div class="accordionScroll">
    	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
    			<a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Excessive Noise<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel1" class="content">
                    <p class="complaintDate">September 12, 2014</p>
                    <p>Noise levels exceeded allowed levels past 11pm. Was given warning to keep it down but neglected to do so.</p>
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Exceeded Alcohol Limit <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel2" class="content"> 
                    <p class="complaintDate">September 16, 2014</p>
                    <p>Residence limit of alcoho allowed is 1L per student and this has been violated by possessing 3L of alcohol within the Residence.</p>
                </div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Guests Violation <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel3" class="content"> 
                    <p class="complaintDate">September 12, 2014</p>
                    <p>Student is only allowed to sign in 1 guest. This has been violated by sneaking in 2 other guests for the night.</p>
                </div>
  			</dd>
            <dd class="accordionBottom">
    				
                <a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Residence Rules Violation <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel4" class="content">
                    <p class="complaintDate">September 12, 2014</p>
                    <p>Student has failed to follow several rules put in place by Fanshawe Residence. The next violation might result in being removed from Residence all-together.</p>
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
                    	<li><a href="pd_notices_complains.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="pd_notices_maintenance.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="pd_notices_warnings.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li><a href="pd_notices_maintenance.php"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
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
