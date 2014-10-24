<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requests - Mediation</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/vendor/modernizr.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" />
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-2 columns" id="mainLogo">
            	<img src="img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
           <div class="small-10 columns" id="pageTitle">
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="right header"><span class="kern">P</span><span class="kern">e</span><span class="kern">r</span><span class="kern">s</span><span class="kern">o</span><span class="kern">n</span><span class="kern">a</span><span class="kern">l</span> <span class="kern">D</span>a<span class="kern">s</span><span class="kern">h</span><span class="kern">b</span><span class="kern">o</span><span class="kern">a</span><span class="kern">r</span><span class="kern">d</span></h1>
            	<h2 id="requestHeader" class="text-right header">R<span class="kern">e</span><span class="kern">q</span><span class="kern">u</span><span class="kern">e</span><span class="kern">s</span><span class="kern">t</span><span class="kern">s</span></h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <form>
    <div class="row">
    	<div class="small-4 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Mediation</p>
        </div>
    </div>
  
    	<div class="row">
            <div class="small-8 small-centered columns">
                <label class="sectionLabel">YOUR INFORMATION</label>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns accountLine"></div>
    	</div>
    <div class="row">
    	<div class="small-8 small-centered columns">
    		<div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> First, Last Name </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="First, Last Name"/>
            	</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-8 small-centered columns">
            <div class="row">
                <div class="small-3 columns">
                <label class="labelInfo">Student Number</label>
                </div>
                <div class="small-9 columns">
                <input type="text" placeholder="0420655"/>
                </div>
            </div>
        </div>
    </div>
     <div class="roommateDiv" id="duplicater">
    <div class="row">
    	<div class="small-8 small-centered columns">
    		<div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Roommate Name </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Roommate First, Last Name"/>
                
            	</div>
            </div>
     
        </div>
    </div>
    </div><!--end duplicater-->
    <div class="row">
            	<div class="small-5 small-push-7 columns">
                	<div class="right" id="addRoommate">
                	<a id="addInput">
                	<p id="roommateText" class="labelInfo left">Add A New Roommate</p><img class="addRoommate" src="img/addRoommate.png" height="25" width="25" alt="Add Roomate">
                    </a>
                </div>
                </div>
            </div>
    <div class="row">
            <div class="small-8 small-push-2 columns">
                <label class="sectionLabel">Add A Message</label>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns accountLine"></div>
    </div>
     <div class="row">
    	<div class="small-8 small-centered columns">
    		<div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Message </label>
                </div>
                <div class="small-9 columns">
    			<textarea></textarea>
            	</div>
            </div>
        </div>
    </div>
    <div class="row">
		<div class=" small-6 small-centered columns text-center">
        	<input type="image" src="img/send.png" alt="Submit!">
		</div>
	</div>
     
     
     </form>
     
     <div class="row">
        	<div class="small-5 small-push-4 columns">
            	<div class="profileNav2">
            		<ul class="pagination"> 
                		<li><a href="pd_requests_general.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20" width="20" alt="previous"></a></li> 
                    	<li><a href="pd_requests_general.php"><img src="img/profilePageIcon.png" height="20" width="20" alt="currentPage"></a></li> 
                    	<li><a href="pd_requests_mediation.php"><img src="img/profileCurrentPage.png" height="20" width="20" alt="emptyPage"></a></li> 
                        <li><a href="pd_requests_withdraw.php"><img src="img/profilePageIcon.png" height="20" width="20" alt="emptyPage"></a></li>
                    	 
                    	<li><a href="pd_requests_withdraw.php"><img id="nextArrow" src="img/profileNextArrow.png" height="20" width="20" alt="previous"></a></li> 
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
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/main.js"></script>
  </body>
</html>
