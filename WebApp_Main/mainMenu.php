<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Main Menu</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-2 columns" id="mainLogo">
            	<img src="img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-10 columns" id="pageTitle">
            	<div id="headerContainerSolo">
            	<h2 id="titleHeaderSolo" class="text-right header">Main Menu</h2>
                </div>
            </div>
        </div>
    </header>
    </header>
    <section class="mainContent">
    <div class="row iconRow">
    	<div class="small-6 small-centered columns text-center">
        	<div class="row">
            	<div class="small-4 columns">
                	<a class="botAnchor" href="personalDashboard.php">
                	<img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="img/dashboardIcon.png" alt="Personal Dashboard">
                	<p class="iconText header"> Personal Dashboard </p>
                    </a>
                </div>
                <div class="small-4 columns">
                	<a class="botAnchor" href="building_main.php">
                	<img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="img/buildDashbboardIcon.png" alt="Building Dashboard">
                	<p class="iconText header"> Building Dashboard </p>
                    </a>
                </div>
                <div class="small-4 columns">
                	<a class="botAnchor" href="calendarJquery.php">
                	<img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="img/calenderIcon.png" alt="Calender">
                	<p class="iconText header">Calendar</p>
                    </a>
                </div>
        	</div>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 line"></div>
    </div>
      <div class="row iconRow">
    	<div class="small-6 small-centered columns text-center">
        	<div class="row">
            	<div class="small-4 columns">
                	<a class="botAnchor" href="news_general.php">
                	<img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="img/newsIcon.png" alt="News">
                	<p class="iconText header">News </p>
                    </a>
                </div>
                <div class="small-4 columns">
                	<a class="botAnchor" href="fsu_general.php">
                	<img onMouseOver="swapDark('4')" onMouseOut="swapLight('4')" class="botImg" src="img/fsuIcon.png" alt="Fanshawe Student Union">
                	<p class="iconText header">Fanshawe Student Union </p>
                    </a>
                </div>
                <div class="small-4 columns">
               	 	<a class="botAnchor" href="info_general.php">
                	<img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="img/generalInfoIcon.png" alt="General Information">
                	<p class="iconText header">General Information </p>
                    </a>
                </div>
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
