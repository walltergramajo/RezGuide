<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requests - Withdraw</title>
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
    		<p id="noticeTitle" class="header"><span class="kern">W</span><span class="kern">i</span><span class="kern">t</span><span class="kern">h</span><span class="kern">d</span><span class="kern">r</span><span class="kern">a</span>w</p>
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
                <label class="labelInfo"> Full Name </label>
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
                <label class="labelInfo"> Student # </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Student Number"/>
            	</div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="small-8 small-centered columns">
                <label class="sectionLabelWithdraw">Add A Message</label>
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
    			<textarea placeholder="Your message goes here"></textarea>
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
                		<li><a href="pd_requests_mediation.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    	<li><a href="pd_requests_general.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="pd_requests_mediation.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="pd_requests_withdraw.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
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
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/main.js"></script>
  </body>
</html>
