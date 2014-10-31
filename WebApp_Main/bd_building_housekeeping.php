<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Building - Housekeeping</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
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
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="right header">Building Dashboard</h1>
            	<h2 id="titleHeader" class="text-right header">Buildings</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row" id="buildingRow">
    <div class="small-11 small-centered columns">
    	<div class="small-2 small-push-1 columns">
        	<img src="img/tuesday.png" id="cleaningImage" class="left" alt="Cleaning Day">
        </div>
    	<div class="small-8 columns">    
                <p id="noticeTitle" class="header text-center">Housekeeping</p>
    		<div class="buildingLine"> 
        	</div>
        	<p class="text-center" id="buildingContent"> Mauris scelerisque vitae erat non vestibulum. Mauris at lobortis felis, in convallis eros. Fusce eget pellentesque quam. Cras in enim laoreet, pulvinar eros id, imperdiet neque. Cum sociis natoque penatibus et magnis dis parturient montes. </p>
        	<div class="buildingLine"> 
            </div>
        </div>
        </div>
    </div>
    
    <div class="row">
        	<div class="small-5 small-push-4 columns">
            	<div class="profileNav3">
            		<ul class="pagination"> 
                		<li><a href="bd_building_garbage.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    	<li><a href="bd_building_garbage.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="bd_building_housekeeping.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="bd_building_rules.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li><a href="bd_building_rules.php"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
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
