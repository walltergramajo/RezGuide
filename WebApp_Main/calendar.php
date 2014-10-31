<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <link href="css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
    
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
    <div class="row">
    <div class="small-12 columns">
    	<div class="small-4 columns" id="eventList">
        <div class="row">
        	
          <div class="small-2 columns">
               <img class="monthSelector" src="img/leftArrow.png" alt="Previous Month">
            </div>
            <div class="small-8 columns text-center">
                <h3 id="calendarMonth">November</h3>
                <p id="calendarYear">2013</p>
                
            </div>
            <div class="small-2 columns">
            	 <img class="monthSelector" src="img/rightArrow.png" alt="Next Month">
            </div>
          </div>
          	<div id="calendarAccordion">
    		<dl class="accordion" data-accordion>
                <dd>
                    <a href="#panel1" class="accordionLink">Content 1 <span class="right">&nu;</span></a>
                    <div id="panel1" class="content">
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
                </dd>
                <dd>
                    <a href="#panel2" class="accordionLink">Content 2 <span class="right">&nu;</span></a>
                    <div id="panel2" class="content">
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
                </dd>
                <dd>
                    <a href="#panel3" class="accordionLink">Content 3 <span class="right">&nu;</span></a>
                    <div id="panel3" class="content">
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
                </dd>
            </dl>
            </div>
            </div>
        <div class="small-8 columns text-center">
            <ul id="calendarDays" class="right">
            <li>S</li>
            <li>M</li>
            <li>T</li>
            <li>W</li>
            <li>Th</li>
            <li>F</li>
            <li>S</li>
            </ul>
            <div class="calendarWeeks">
            	<ul class="calendarWeek right">
                    <li class=" nextLastMonth">27</li>
                    <li class=" nextLastMonth">28</li>
                    <li class=" nextLastMonth">29</li>
                    <li class=" nextLastMonth">30</li>
                    <li class=" nextLastMonth">31</li>
                    <li class="calendarDay">01</li>
                    <li class="calendarDay">02</li>
                </ul>
            </div>
            <div class="calendarWeeks">
            	<ul class="calendarWeek right">
                    <li class="calendarDay">03</li>
                    <li class="calendarDay">04</li>
                    <li class="calendarDay event">05</li>
                    <li class="calendarDay">06</li>
                    <li class="calendarDay">07</li>
                    <li class="calendarDay">08</li>
                    <li class="calendarDay">09</li>
                </ul>
            </div>
            <div class="calendarWeeks">
            	<ul class="calendarWeek text-center right">
                    <li class="calendarDay">10</li>
                    <li class="calendarDay">11</li>
                    <li class="calendarDay">12</li>
                    <li class="calendarDay">13</li>
                    <li class="calendarDay">14</li>
                    <li class="calendarDay event">15</li>
                    <li class="calendarDay">16</li>
                </ul>
            </div>
            <div class="calendarWeeks">
            	<ul class="calendarWeek right">
                    <li class="calendarDay">17</li>
                    <li class="calendarDay">18</li>
                    <li class="calendarDay">19</li>
                    <li class="calendarDay event">20</li>
                    <li class="calendarDay">21</li>
                    <li class="calendarDay">22</li>
                    <li class="calendarDay">23</li>
                </ul>
            </div>
            <div class="calendarWeeks">
            	<ul class="calendarWeek right">
                    <li class="calendarDay">24</li>
                    <li class="calendarDay">25</li>
                    <li class="calendarDay">26</li>
                    <li class="calendarDay">27</li>
                    <li class="calendarDay">28</li>
                    <li class="calendarDay">29</li>
                    <li class="calendarDay">30</li>
                </ul>
            </div>
        </div>
        <div class="filler"></div>
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
