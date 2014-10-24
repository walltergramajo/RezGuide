<!doctype php>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Dashboard</title>
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
            	<h2 id="titleHeaderSolo" class="text-right header"><span class="kern">B</span><span class="kern">u</span><span class="kern">i</span><span class="kern">l</span><span class="kern">d</span><span class="kern">i</span><span class="kern">n</span><span class="kern">g</span> <span class="kern">D</span>a<span class="kern">s</span><span class="kern">h</span><span class="kern">b</span><span class="kern">o</span><span class="kern">a</span><span class="kern">r</span><span class="kern">d</span></h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div id="whiteSpace">
        <div class="row dashboardRow">
            <div class="small-12 columns">
    	       <div class="small-4 columns text-center">
            	   <a class="botAnchor" href="bd_classified_sell.php">
                	   <img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="img/classifiedsIcon.png" alt="Account">
   					    <p class="dashboardText"> Classifieds </p>
                    </a>
                </div>
                <div class="small-4 columns text-center">
                    <a class="botAnchor" href="bd_building_garbage.php">
                        <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="img/buildingEventsIcon.png" alt="Requests">
                        <p class="dashboardText"> Building <br>Info </p>
                    </a>
                </div>
                <div class="small-4 columns text-center">
                    <a class="botAnchor" href="bd_events_events.php">
                        <img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="img/eventsPageIcon.png" alt="Notices">
                        <p class="dashboardText"> Events </p>    
                    </a>
                </div>
            </div>
        </div>
    </div>
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
