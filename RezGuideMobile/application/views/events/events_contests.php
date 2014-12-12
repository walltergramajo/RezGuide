<div data-role="page" id="contestsSection">
  <div class="section">
    <div class="topSection">
      <div class="row"> 
        <div class="small-2 columns">
          <a href="<?php echo base_url(); ?>index.php/building"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
      	<div class="small-9 small-push-4 columns">
          <h2  class="topHeader">EVENTS</h2>
        </div> 
      </div> 
    </div>

    <div class="contentNews">
      <div class="row">
      	<div class="small-10 small-centered columns">
          <h3 class="requestsSubHeader">CONTESTS</h3>
        </div>
      </div>
      <div class="rulesContent">
        <div class="row">
          <dl class="accordion" data-accordion>
            <?php foreach ($results as $row): ?>
              <dd>
        				<a href="#panel<?php echo $row->contests_id ?>" onClick="highlightLink(this);"><span class="complaintText"><?php echo $row->contests_title ?></span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
                <div id="panel<?php echo $row->contests_id ?>" class="content">
          				<p class="dateColor"><?php echo $row->contests_startdate ?></p>
                  <p class="location"><?php echo $row->contests_location ?></p>
                  <p><?php echo $row->contests_description ?></p>
                  <a href="<?php echo $row->contests_link ?>"><p>More Info</p></a>
                </div>
              </dd>
            <?php endforeach; ?>
    				<!-- <dd>
     					<a href="#panel30" onClick="highlightLink(this);"><span class="complaintText">Knights Tickets</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
      				<div id="panel30" class="content">
       					<p class="dateColor">October 3</p>
                <p class="location">Forwell Hall</p>
                <p>The Fanshawe Student Union is giving away two pairs of tickets to the London Knights’ game on October 3rd against the Kitchener Rangers. The game takes place at Budweiser Gardens, and starts at 7:30 pm.</p>
                <a href="http://www.fsu.ca/events.php"><p>More Info</p></a>
      				</div>
   					</dd>
          	<dd>
      				<a href="#panel31" onClick="highlightLink(this);"><span class="complaintText">NHL Pool</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
      				<div id="panel31" class="content">
       					<p class="dateColor">September 15</p>
                <p class="location">Forwell Hall</p>
                <p>Open to all Fanshawe students. One entry per person and you could win up to $150 Downtown London Dollars!</p>
                <a href="http://www.fsu.ca/events.php"><p>More Info</p></a>
      				</div>
    				</dd>
   				 	<dd>
      				<a href="#panel32" onClick="highlightLink(this);"><span class="complaintText">Microsoft Surface Tablet</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
      				<div id="panel32" class="content">
       					<p class="dateColor">September 15</p>
                <p class="location">Forwell Hall</p>
                <p>Simply enter with your email address and student number for a chance to win a Microsoft Surface Tablet. Must be a Full-Time student to enter.</p>
                <a href="http://www.fsu.ca/events.php"><p>More Info</p></a>
      				</div>
          	</dd> -->
          </dl>
        </div>
      </div> 
    </div>

    <div class="bottomSectionEvents">
      <div class="row">
      	<div class="small-11  small-centered columns">
          <div class="small-4 columns">
   	    		<a href="<?php echo base_url(); ?>index.php/events/programs"><img src="<?php echo base_url(); ?>img/programsIcon.png" alt="events"></a> 
            <h3 class="iconLabel">PROGRAMS</h3>
        	</div>
        	<div class="small-4 columns">
            <a href="<?php echo base_url(); ?>index.php/events/building_events"><img src="<?php echo base_url(); ?>img/eventsPageIcon.png" alt="eventsPage"></a>
            <h3 class="iconLabel">EVENTS</h3>
       		</div>
        	<div class="small-4 columns">
        		<div class="currentPage2">
        		  <a href="<?php echo base_url(); ?>index.php/events/contests"><img src="<?php echo base_url(); ?>img/contestsIcon.png" alt="contests"></a>
            	<h3 class="iconLabel">CONTESTS</h3>
            </div>
       		</div>
        </div>
      </div>
    </div>
  </div><!--Contests Section End-->
</div>