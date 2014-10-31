<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Building Dashboard - Classifieds Buy</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/vendor/modernizr.js"></script>
    
    <script src="js/jquery-1.10.2.js"></script>
    
    <script src="js/jquery.nicescroll.js"></script>
    
    <script>

	$(document).ready(

    function() {

        $("#classifiedSection").niceScroll({cursorcolor:"#518d84",cursorwidth: "10px", cursorborder:"none"}); 
   	 });
	 </script>
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
            	<h2 id="titleHeader" class="text-right header">Classifieds</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row">
    	<div class="small-4 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Buy</p>
        </div>
    </div>
    <div class="row">
    	<div class="small-6 small-centered columns" id="classifiedFilters">
        	<div class="row">
            	<div class="small-2 columns">
                	<a><img src="img/all.png" alt="All Classifieds"></a>
                </div>
                <div class="small-2 columns">
                	<a><img src="img/book.png" alt="Books"></a>
                </div>
                <div class="small-2 columns">
                	<a><img src="img/clothing.png" alt="Clothing"></a>
                </div>
                <div class="small-2 columns">
                	<a><img src="img/furniture.png" alt="Furniture"></a>
                </div>
                <div class="small-2 columns">
                	<a><img src="img/computers.png" alt="Electronics"></a>
                </div>
                <div class="small-2 columns">
                	<a><img src="img/other.png" alt="other"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="classifiedRow">
       	<div class="small-10 small-centered columns" id="classifiedSection">
        	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
    			<a href="#panel1" class="accordionLink">
                <div class="row">
                	<div class="classifiedRow">
                	<div class="small-3 columns text-center">
                    	<p class="itemStatus">Wanted</p>
                    </div>
                    <div class="small-6 columns">
                    	<p class="itemTitle">Title</p>
                        <p class="itemDesc">This is a condensed description, it cannot be too long. More...</p>
                        <p class="itemCondition">Condition: <span class="newUsed">used</span></p>
                    </div>
                    <div class="small-3 columns text-center">
                    	<p class="userNameClass"> username </p>
                    	<p class="itemPrice"> $150.000 </p>
                    </div>
                    </div>
                </div>
                </a>
    			<div id="panel1" class="content ">
                	<div class="row">
                    	<div class=" small-8 itemFullDesc columns"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    	</div>
                        <div class="small-4 columns">
                        	<div class="contactBuyUser">
                        	<div class="row">
                            	<div class="small-3 columns">
                            	<img class="left" src="img/emailIcon.png" alt="User's email address">
                                </div>
                                <div class="small-9 columns"> 
                                <p class="userContactInfo"> loremipsum@hotmail.com </p>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="small-3 columns">
                            	<img class="left" src="img/phoneIcon.png" alt="User's phone number">
                                </div>
                                <div class="small-9 columns"> 
                                <p class="userContactInfo"> 555-5555 </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel2" class="accordionLink">
                <div class="row">
                	<div class="classifiedRow">
                	<div class="small-3 columns text-center">
                    	<p class="itemStatus">Wanted</p>
                    </div>
                    <div class="small-6 columns">
                    	<p class="itemTitle">Title</p>
                        <p class="itemDesc">This is a condensed description, it cannot be too long. More...</p>
                        <p class="itemCondition">Condition: <span class="newUsed">used</span></p>
                    </div>
                    <div class="small-3 columns text-center">
                    	<p class="userNameClass"> username </p>
                    	<p class="itemPrice"> $150.000 </p>
                    </div>
                    </div>
                </div>
                </a>
    			<div id="panel2" class="content ">
                	<div class="row">
                    	<div class=" small-8 itemFullDesc columns"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    	</div>
                        <div class="small-4 columns">
                        	<div class="contactBuyUser">
                        	<div class="row">
                            	<div class="small-3 columns">
                            	<img class="left" src="img/emailIcon.png" alt="User's email address">
                                </div>
                                <div class="small-9 columns"> 
                                <p class="userContactInfo"> loremipsum@hotmail.com </p>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="small-3 columns">
                            	<img class="left" src="img/phoneIcon.png" alt="User's phone number">
                                </div>
                                <div class="small-9 columns"> 
                                <p class="userContactInfo"> 555-5555 </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel3" class="accordionLink">
                <div class="row">
                	<div class="classifiedRow">
                	<div class="small-3 columns text-center">
                    	<p class="itemStatus">Wanted</p>
                    </div>
                    <div class="small-6 columns">
                    	<p class="itemTitle">Title</p>
                        <p class="itemDesc">This is a condensed description, it cannot be too long. More...</p>
                        <p class="itemCondition">Condition: <span class="newUsed">new</span></p>
                    </div>
                    <div class="small-3 columns text-center">
                    	<p class="userNameClass"> username </p>
                    	<p class="itemPrice"> $150.000 </p>
                    </div>
                    </div>
                </div>
                </a>
    			<div id="panel3" class="content ">
                	<div class="row">
                    	<div class=" small-8 itemFullDesc columns"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    	</div>
                        <div class="small-4 columns">
                        	<div class="contactBuyUser">
                        	<div class="row">
                            	<div class="small-3 columns">
                            	<img class="left" src="img/emailIcon.png" alt="User's email address">
                                </div>
                                <div class="small-9 columns"> 
                                <p class="userContactInfo"> loremipsum@hotmail.com </p>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="small-3 columns">
                            	<img class="left" src="img/phoneIcon.png" alt="User's phone number">
                                </div>
                                <div class="small-9 columns"> 
                                <p class="userContactInfo"> 555-5555 </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
    			</div>
  			</dd>
            <dd>
    			<a href="#panel4" class="accordionLink">
                <div class="row">
                	<div class="classifiedRow">
                	<div class="small-3 columns text-center">
                    	<p class="itemStatus">Wanted</p>
                    </div>
                    <div class="small-6 columns">
                    	<p class="itemTitle">Title</p>
                        <p class="itemDesc">This is a condensed description, it cannot be too long. More...</p>
                        <p class="itemCondition">Condition: <span class="newUsed">new</span></p>
                    </div>
                    <div class="small-3 columns text-center">
                    	<p class="userNameClass"> username </p>
                    	<p class="itemPrice"> $150.000 </p>
                    </div>
                    </div>
                </div>
                </a>
    			<div id="panel4" class="content ">
                	<div class="row">
                    	<div class=" small-8 itemFullDesc columns"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    	</div>
                        <div class="small-4 columns">
                        	<div class="contactBuyUser">
                        	<div class="row">
                            	<div class="small-3 columns">
                            	<img class="left" src="img/emailIcon.png" alt="User's email address">
                                </div>
                                <div class="small-9 columns"> 
                                <p class="userContactInfo"> loremipsum@hotmail.com </p>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="small-3 columns">
                            	<img class="left" src="img/phoneIcon.png" alt="User's phone number">
                                </div>
                                <div class="small-9 columns"> 
                                <p class="userContactInfo"> 555-5555 </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
    			</div>
  			</dd>
        	</dl>
        </div>
    </div>
    
    <div class="row">
        	<div class="small-5 small-push-4 columns">
            	<div class="profileNav3">
            		<ul class="pagination"> 
                		<li><a href="bd_classified_sell.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                        <li><a href="bd_classified_sell.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                        <li><a href="bd_classified_buy.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="bd_classified_create.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                         
                        <li><a href="bd_classified_create.php"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
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
