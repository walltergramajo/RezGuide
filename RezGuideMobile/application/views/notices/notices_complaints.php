<div data-role="page" id="noticesComplaints">
  <div class="section">
    <div class="topSection">
      <div class="row"> 
        <div class="small-2 columns">
          <a href="<?php echo base_url(); ?>index.php/dashboard"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
        <div class="small-9 small-push-4 columns">
        	<h2 id="complaintsHeader" class="topHeader">NOTICES</h2>
        </div> 
      </div> 
    </div>
    <div class="contentNews">
      <div class="row">
        <div class="small-10 small-centered columns">
        	<h3 class="noticesSubHeader">COMPLAINTS</h3>
        </div>
      </div>
      <div class="complaintsContentNotices">
        <div class="row">
          <dl class="accordion" data-accordion>
        		<dd>
              <span class="selectionArrowRules"><div class="activeSelectionAccordion"></div><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span>
    					<a href="#panel0" onClick="highlightLink(this);"><span class="complaintText">Noise Complaint</span> </a>
              <div id="panel0" class="content">
      				  <p class="dateColor">September 9, 2014</p>
                <p>Resident has failed to follow noise level procedures after 11pm. Several warnings were given to keep it down but resident has failed to do so.</p>
              </div>
  					</dd>
  					<dd>
   						<a href="#panel33" onClick="highlightLink(this);"><span class="complaintText">Housing Violation</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel33" class="content">
                <p class="dateColor">October 2, 2014</p>
                <p>Number of guests exceeds number allowed per resident. Only 1 guest allowed to sign in per student.</p>
    					</div>
            </dd>
        		<dd>
    					<a href="#panel34" onClick="highlightLink(this);"><span class="complaintText">Housing Violation</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel34" class="content">
                <p class="dateColor">October 12, 2014</p>
                <p>Resident has been acting very aggressively towards others causing them all to file a complaint.</p>
    					</div>
  					</dd>
            <dd>
    					<a href="#panel35" onClick="highlightLink(this);"><span class="complaintText">Housing Violation</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel35" class="content">
                <p class="dateColor">October 23, 2014</p>
                <p>Indecent exposure around dorm, student has been walking around without appropriate amount of clothing.</p>
    					</div>
        		</dd>
   				</dl>
  			</div>
		  </div>
    </div>

    <div class="bottomSection">
      <div class="row">
        <div class="small-4 columns">
          <div class="currentPage">
            <a href="<?php echo base_url(); ?>index.php/notices/complaints"><img src="<?php echo base_url(); ?>img/complaintsIcon.png" alt="complaints"></a> 
          </div>
          <h3 class="iconLabel">COMPLAINTS</h3>
        </div>
        <div class="small-4 columns">
        	<a href="<?php echo base_url(); ?>index.php/notices/warnings"><img src="<?php echo base_url(); ?>img/warningIcon.png" alt="warnings"></a>
          <h3 class="iconLabel">WARNINGS</h3>
        </div>
        <div class="small-4 columns">
        	<a href="<?php echo base_url(); ?>index.php/notices/maintenance"><img src="<?php echo base_url(); ?>img/maintenanceIcon.png" alt="maintenance"></a>
          <h3 class="iconLabel">MAINTENANCE</h3>
        </div>
      </div>
    </div>
  </div><!--ComplaintsSection End-->
</div>