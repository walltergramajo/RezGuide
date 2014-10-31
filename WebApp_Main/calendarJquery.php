<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
    
    
    <link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
    
    <script src="js/jquery.nicescroll.js">

	</script>
    
    <script>
	 $(function() {
		$( "#datepicker" ).datepicker();
	});

	$(document).ready(

    function() {

        $("#eventList").niceScroll({cursorcolor:"#00F"}); 
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
            	<div id="headerContainerSolo">
            	<h2 id="titleHeaderSolo" class="text-right header">Calendar</h2>
                </div>
            </div>
        </div>
    </header>
<section class="mainContent">
    <div class="row" id="calendarPage">
        <div class="small-12 columns">
    	
            <div class="small-4 columns text-center">
                <div id="calendarAccordion">
                    <dl class="accordion" data-accordion>
                        <dd>
                            <a href="#panel1" class="accordionLink" onClick="highlightLink(this);">Content 1 <span class="right"><img src="img/accordionArrowDownHover.png" alt="Click For more Information."></span></a>
                                <div id="panel1" class="content">
                                    <div class="dividerAccordionTop">
                                    </div>
                                    <div class="row eventInfo">
                                        <div class=" small-7 columns text-center" >
                                        <img src="img/eventNumber.png">
                                        </div>
                                        <div class=" small-5 columns" >
                                            <p class="eventStart"> 5:00 pm</p>
                                            <p class="eventEnd"> 5:30 pm </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="dividerAccordion">
                                        </div>
                                    </div>
                                </div>
                        </dd>
                        <dd>
                    
                            <a href="#panel2" class="accordionLink" onClick="highlightLink(this);">Content 2 <span class="right"><img src="img/accordionArrowDownHover.png" alt="Click For more Information."></span></a>
                    
                        <div id="panel2" class="content">
                                <div class="dividerAccordionTop">
                                </div>
                            <div class="row eventInfo">
                                <div class=" small-7 columns text-center" >
                                    <img src="img/eventNumber.png">
                                </div>
                                 <div class=" small-5 columns" >
                                    <p class="eventStart"> 5:00 pm</p>
                                    <p class="eventEnd"> 5:30 pm </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 columns">
                                <div class="dividerAccordion">
                                </div>
                            </div>
                        </div>
                    
                        </dd>
                        <dd>
                            <a href="#panel3" class="accordionLink" onClick="highlightLink(this);">Content 3 <span class="right"><img src="img/accordionArrowDownHover.png" alt="Click For more Information."></span></a>
                            <div id="panel3" class="content">
                            <div class="dividerAccordionTop">
                                    </div>
                            <div class="row eventInfo">
                                    <div class=" small-7 columns text-center" >
                                        <img src="img/eventNumber.png">
                                    </div>
                                    <div class=" small-5 columns" >
                                        <p class="eventStart"> 5:00 pm</p>
                                        <p class="eventEnd"> 5:30 pm </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="dividerAccordion">
                                    </div>
                                </div>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div id="datepicker">  
            </div>
    </div>
</div>
    </section>
        <footer>
            <?php
                include('includes/footer.php');
            ?>
    </footer>
    <script>
	 $(function() {
		$( "#datepicker" ).datepicker({
			inline: true
		});
	});
	</script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/main.js"></script>
  </body>
</html>
