<!doctype html>
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
            	<h2 id="titleHeaderSolo" class="text-right header"><span class="kern">P</span><span class="kern">e</span><span class="kern">r</span><span class="kern">s</span><span class="kern">o</span><span class="kern">n</span><span class="kern">a</span><span class="kern">l</span> <span class="kern">D</span>a<span class="kern">s</span><span class="kern">h</span><span class="kern">b</span><span class="kern">o</span><span class="kern">a</span><span class="kern">r</span><span class="kern">d</span></h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div id="whiteSpace">
    <div class="row dashboardRow">
        <div class="small-12 columns">
    	   <div class="small-3 columns text-center">
            	   <a class="botAnchor" href="pd_account_edit.php">
                	   <img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="img/dashboardIcon.png" alt="Account">
   					    <p class="dashboardText"> Account </p>
                    </a>
            </div>
            <div class="small-3 columns text-center">
                    <a class="botAnchor" href="pd_account_points.php">
                        <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="img/pointsIcon.png" alt="Requests">
                         <p class="dashboardText"> Points </p>
                    </a>
            </div> 
            <div class="small-3 columns text-center">
                <a class="botAnchor" href="pd_notices_complains.php">
                    <img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="img/buildDashbboardIcon.png" alt="Notices">
                    <p class="dashboardText"> Notices </p>
                </a>
            </div>
            <div class="small-3 columns text-center">
                <a class="botAnchor" href="pd_requests_general.php">
                    <img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="img/calenderIcon.png" alt="Requests">
                    <p class="dashboardText"> Requests </p>
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
