<div data-role="page" id="eventsPage">
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
        	<h3 class="requestsSubHeader">PROGRAMS</h3>
        </div>
      </div>
      <div class="rulesContent">
        <div class="row">
          <dl class="accordion" data-accordion>
            <?php foreach ($results as $row): ?>
              <dd>
                <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span>
      					<a href="#panel<?php echo $row->events_id ?>" onClick="highlightLink(this);"><span class="complaintText"><?php echo $row->events_title ?></span></a>
                <div id="panel<?php echo $row->events_id ?>" class="content">
                  <p class="dateColor"><?php echo $row->events_startdate ?></p>
                  <p><?php echo $row->events_description ?></p>
                  <p><?php echo $row->events_location ?></p>
                  <label>Who can come:</label> <input type="text" placeholder="FSU Staff">
                </div>
              </dd>
            <?php endforeach; ?>
  					<!-- <dd>
   						<a href="#panel22" onClick="highlightLink(this);"><span class="complaintText">Breakfast Deals! - Oasis</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel22" class="content">
                <p class="dateColor">Monday - Friday</p>
                <p>Oasis will be offering half price breakfast during the week between the hours specified.</p>
                <p>8:00pm - 11:00pm</p>
                <label>Who can come:</label><input type="text" placeholder="everyone">
    					</div>
 					  </dd>
        		<dd>
    					<a href="#panel23" onClick="highlightLink(this);"><span class="complaintText">Hockey Night - Bud Gardens</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel23" class="content">
                <p class="dateColor">September 22, 2014</p>
                <p>London Knights student ticket sale. Student tickets are $18 and are allowed to bring guests. Guest tickets are $20.</p>
                <p>7:00pm - 10:00pm</p>
                <label>Who can come:</label> <input type="text" placeholder="students &amp; guests">
    					</div>
  					</dd>
            <dd>
    					<a href="#panel24" onClick="highlightLink(this);"><span class="complaintText">Food Drive - FSU Building</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel24" class="content">
                <p class="dateColor">September 25, 2014</p>
                <p>Fanshawe College will be hosting a canned goods food drive to help those who are in need. Please help by bringing non-perishable goods to give to a family in need.</p>
                <p>8:00am - 4:00pm</p>
                <label>Who can come:</label> <input type="text" placeholder="students &amp; guests">
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
        		<div class="currentPage2">
   	    			<a href="<?php echo base_url(); ?>index.php/events/programs"><img src="<?php echo base_url(); ?>img/programsIcon.png" alt="events"></a> 
            	<h3 class="iconLabel">PROGRAMS</h3>
        		</div>
        	</div>
          <div class="small-4 columns">
            <a href="<?php echo base_url(); ?>index.php/events/building_events"><img src="<?php echo base_url(); ?>img/eventsPageIcon.png" alt="eventsPage"></a>
            <h3 class="iconLabel">EVENTS</h3>
          </div>
          <div class="small-4 columns">
            <a href="<?php echo base_url(); ?>index.php/events/contests"><img src="<?php echo base_url(); ?>img/contestsIcon.png" alt="contests"></a>
            <h3 class="iconLabel">CONTESTS</h3>
        	</div>
        </div>
      </div>
    </div>
  </div><!--Programs Section End-->
</div>