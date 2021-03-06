<div data-role="page" id="fsuInfoPage">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
    		<div class="small-2 columns">
         	<a href="<?php echo base_url(); ?>index.php/fsu"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
    		<div class="small-9 small-push-5 columns">
        	<h2 class="topHeader">FSU</h2>
        </div>
      </div> 
    </div> 
	</div>
	<div class="contentFSU">
		<div class="row">
    	<div class="small-12 small-centered columns">
        <h3 class="requestsSubHeader">INFO</h3>
      </div>
    </div>
		<div class="fsuContent">
			<div class="row">
  			<dl class="accordion" data-accordion>
          <?php foreach ($resuts as $row): ?>
  					<dd>
    					<a href="#panel<?php echo $row->fsuinfo_id ?>" onClick="highlightLink(this);"><span class="complaintText"><?php echo $row->fsuinfo_title ?></span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel<?php echo $row->fsuinfo_id ?>" class="content">
                <p class="dateColor"><?php echo $row->fsuinfo_date ?></p>
                <p class="location"><?php echo $row->fsuinfo_location ?></p>
                <p><?php echo $row->fsuinfo_description ?></p>
                <a href="<?php echo $row->fsuinfo_link ?>"><p>More Info</p></a>
                <label>Who can come: </label> <input type="text" placeholder="everyone">
    					</div>
            </dd>
          <?php endforeach; ?>
					<!-- <dd>
 						<a href="#panel66" onClick="highlightLink(this);"><span class="complaintText">Where to shop?</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
  					<div id="panel66" class="content">
              <p class="dateColor">September 4</p>
              <p class="location">City of London</p>
              <p>Looking to get some shopping done? Whether its groceries or clothing, London has alot to offer and can cater to any students needs. Be sure to check out the malls and boutiques to find what you need.</p>
              <a href="http://www.londontourism.ca/Things-To-Do/Retail-Stores"><p>More Info</p></a>
  					</div>
					 	</dd>
      		<dd>
						<a href="#panel67" onClick="highlightLink(this);"><span class="complaintText">Need Help?</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
						<div id="panel67" class="content">
              <p class="dateColor">September 4</p>
              <p class="location">FSU Office</p>
              <p>If you have any questions do not hesitate to contact an FSU staff member. </p>
              <a href="http://fsu.ca/council_staff.php"><p>More Info</p></a>
						</div>
					</dd>
				 		<dd>
  					<a href="#panel68" onClick="highlightLink(this);"><span class="complaintText">FSU Newsletter</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
  					<div id="panel68" class="content">
              <p class="dateColor">September 4</p>
              <p class="location">FSU Office</p>
              <p>Find out what the latest news is on campus by checking out Fanshawe's Interrobang. Click the link below to view the latest issue.</p>
              <a href="http://fsu.ca/publications.php"><p>More Info</p></a>
   						Don't forget to check out this months College newspaper.
  					</div>
      		</dd> -->
 				</dl>
      </div>
  	</div> <!--End FSU Content-->
	</div><!--End Content-->
  <div class="bottomSectionFSU">
		  <div class="row">
    		<div class="small-11 small-centered columns">
    			<div class="small-4 columns">
   	    		<a href="<?php echo base_url(); ?>index.php/fsu/events"><img src="<?php echo base_url(); ?>img/eventsPageIcon.png" alt="fsuEvents"></a> 
            <h3 class="iconLabel">EVENTS</h3>
       		</div>
        	<div class="small-4 columns">
        		<a href="<?php echo base_url(); ?>index.php/fsu/contests"><img src="<?php echo base_url(); ?>img/contestsIcon.png" alt="fsuContests"></a>
            <h3 class="iconLabel">CONTESTS</h3>
        	</div>
        	<div class="small-4 columns">
        		<div class="currentPage2">
        			<a href="<?php echo base_url(); ?>index.php/fsu/info"><img src="<?php echo base_url(); ?>img/infoIcon.png" alt="fsuInfo"></a>
            	<h3 class="iconLabel">INFO</h3>
            </div>
        	</div>
        </div>
    </div>
	</div>
</div><!--FSU Info End-->