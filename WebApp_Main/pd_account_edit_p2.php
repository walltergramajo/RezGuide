<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit User Account</title>
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
            		<h2 id="titleHeader" class="text-right header">YOUR PROFILE</h2>
                </div>
            </div>
        </div>
    </header>

<section class="mainContent">
<div id="editAccountContent" class="row">
    <div class="small-9 small-centered columns">
            <h3 class="sectionLabel">RESIDENCE STATUS</h3>
        </div>
    </div>
    <div class="row">
        <div class="small-10 small-centered columns">
            <div class="accountLine">
            </div>
        </div>
    </div>
	
    <form>
        <div class="row">
            <div class="small-9 small-centered columns">
                <div class="small-6 columns">
                    <div class="small-2 small-pull-1 columns">
                        <label class="labelInfo">credit</label>
                    </div>
                    <div class="small-8 small-pull-1 columns">
                    <input type="text" placeholder="credit amount"/>
                    </div>
                 </div>
                 <div class="small-6 small-pull-1 columns">
                    
                        <div class="small-2 columns">
                            <label class="labelInfo">debt</label>
                        </div>
                        <div class="small-8 small-pull-1 columns">
                            <input type="text" placeholder="amount owed"/>
                        </div>
                    
                 </div>
           </div>
        </div>
    </form>
</div>    <!--End EditAccountContent-->
 
             
    	<div class="row">
        	<div class="small-5 small-centered columns">
            	<div class="profileNav">
            		<ul class="pagination"> 
                		<li><a href="pd_account_edit.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20" width="20" alt="previous"></a></li> 
                    	<li><a href="pd_account_edit.php"><img src="img/profilePageIcon.png" height="20" width="20" alt="emptyPage"></a></li> 
                    	<li><a href="pd_account_edit_p2.php"><img src="img/profileCurrentPage.png" height="20" width="20" alt="currentPage"></a></li>  
                    	<li class="arrow unavailable"><a href="#"><img id="nextArrow" src="img/profileNextArrow.png" height="20" width="20" alt="previous"></a></li> 
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
