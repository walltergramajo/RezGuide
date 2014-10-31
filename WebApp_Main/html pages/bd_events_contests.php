<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Building Dashboard- Contests</title>
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
    <div class="row">
    	<div class="small-10 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Contests</p>
        </div>
    </div>
    <div class="row">
    <div class="small-8 small-centered columns">
    	<div class="accordionScroll">
    	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
    			<a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 1 <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel1" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 2 <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel2" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 3 <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
    			<div id="panel3" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</div>
  			</dd>
            <dd class="accordionBottom">
    			<a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 4 <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
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
                		<li><a href="bd_events_events.html"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    	<li><a href="bd_events_events.html"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="bd_events_contests.html"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="bd_events_programs.html"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li><a href="bd_events_programs.html"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                 	</ul>
                </div>
            </div>
        </div>  
    
    <div class="filler"> </div>
    <footer>
    <div class="row text-center">
              <div class="small-6 small-centered columns">
              	<nav class="row">
              		<div class="small-3 columns">
                    	<a class="botAnchor" href="mainMenu.html">
                    	<img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="img/homeIcon.png" alt="Home">
                        <p class="menuText header">Home</p>
                        </a>
                    </div>
                    <div class="small-3 columns">
                    	<a class="botAnchor" href="chat_start.html">
                    	<img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="img/chatIcon.png" alt="Chat">
                        <p class="menuText header">Chat</p>
                        </a>
                    </div>
                    <div class="small-3 columns">
                    	<a class="botAnchor" href="editAccount.html">
                    	<img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="img/settingIcon.png" alt="Settings">
                        <p class="menuText header">Settings</p>
                        </a>
                    </div>
                    <div class="small-3 columns">
                    	<a class="botAnchor" href="login.html">
                    	<img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="img/logoutIcon.png" alt="Logout">
                        <p class="menuText header">Logout</p>
                        </a>
                    </div>
              	</nav>
              </div>
        </div>
    </footer>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/main.js"></script>
  </body>
</html>
