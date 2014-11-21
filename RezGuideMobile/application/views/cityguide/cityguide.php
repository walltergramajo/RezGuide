<div data-role="page" id="genInfoCity">
  <div class="section">
	  <div class="topSection">
		  <div class="row"> 
    		<div class="small-2 columns">
         	<a href="<?php echo base_url(); ?>index.php/info"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
    		<div class="small-9 small-push-1 columns">
        	<h2  class="topHeader">GENERAL INFO</h2>
        </div>
      </div> 
    </div> 
  </div>

  <div class="contentNews">
	  <div class="row">
    	<div class="small-12 small-centered columns">
        <h3 class="requestsSubHeader">CITY GUIDE</h3>
      </div>
    </div>
	  <div class="genInfoContent">
	    <div class="row">
    	  <dl class="accordion">
  			  <dd>
    				<a href="#eventsCity" onClick="highlightLink(this);"><span class="complaintText">EVENTS</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
          </dd>
  				<dd>
   					<a href="#entertainmentCity" onClick="highlightLink(this);"><span class="complaintText">ENTERTAINMENT</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
 					</dd>
        	<dd>
    				<a href="#moviesCity" onClick="highlightLink(this);"><span class="complaintText">MOVIES</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
  				</dd>
 				 	<dd>
    				<a href="#restaurantsCity" onClick="highlightLink(this);"><span class="complaintText">RESTAURANTS</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
        	</dd>
   		  </dl>
      </div>
    </div> 
  </div>

  <div class="bottomSection">
    <div class="row">
    	<div class="small-11 small-centered columns">
    		<div class="small-4 columns">
          <div class="currentPage2">
   	    		<a href="<?php echo base_url(); ?>index.php/cityguide"><img src="<?php echo base_url(); ?>img/cityGuideIcon.png" alt="fsuEvents"></a> 
            <h3 class="iconLabel">CITY<br>GUIDE</h3>
          </div>
       	</div>
        <div class="small-4 columns">
        	<a href="<?php echo base_url(); ?>index.php/info/ltc"><img src="<?php echo base_url(); ?>img/busIcon.png" alt="fsuContests"></a>
          <h3 class="iconLabel">LTC</h3>
        </div>
        <div class="small-4 columns">
        	<a href="<?php echo base_url(); ?>index.php/info/directory"><img src="<?php echo base_url(); ?>img/directoryIcon.png" alt="fsuInfo"></a>
          <h3 class="iconLabel">DIRECTORY</h3>
        </div>
      </div>
    </div>
  </div><!--Gen Info City Guide End-->
</div>