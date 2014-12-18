<div data-role="page" id="fsuEventsPage">
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
		</div><!--End top Section-->
		<div class="contentFSU">
			<div class="row">
    			<div class="small-12 small-centered columns">
        			<h3 class="requestsSubHeader">EVENTS</h3>
        	   </div>
            </div>
			<div class="fsuContent">
				<div class="row">
    				<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
      						<dd>
        						<a href="#panel<?php echo $row->events_id ?>" onClick="highlightLink(this);"><span class="complaintText"><?php echo $row->events_title ?></span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
        						<div id="panel<?php echo $row->events_id ?>" class="content">
                                    <p class="dateColor"><?php echo $row->events_startdate ?></p>
                                    <p class="location"><?php echo $row->events_location ?></p>
                                    <p><?php echo $row->events_description ?></p>
                                    <a href="<?php echo $row->events_link ?>"><p>More Info</p></a>
                                    <label>Who can come: </label> <input type="text" placeholder="everyone">
        						</div>
                   	        </dd>
                        <?php endforeach; ?>
  						<!-- <dd>
   						 	<a href="#panel58" onClick="highlightLink(this);"><span class="complaintText">Pub Night</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel58" class="content">
                                <p class="dateColor">September 4</p>
                                <p class="location">Outback Shack</p>
                                <p>What is better then being done class early and having the rest of the day to do whatever? A pub night! Join us at Outback Shack for some drinks and socialize with your new classmates. $3 cover at the door. 19+ event.</p>
                                <a href="http://www.fsu.ca/events.php"><p>More Info</p></a>
                                <label>Who can come: </label> <input type="text" placeholder="everyone">
    						</div>
 					 	</dd>
        				<dd>
    						<a href="#panel59" onClick="highlightLink(this);"><span class="complaintText">Canned Food Drive</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel59" class="content">
                                <p class="dateColor">September 4</p>
                                <p class="location">Forwell Hall</p>
                                <p>Help those in need by bringing some canned goods to donate. Please bring only non-perishable items and remember that EVERY can counts!</p>
                                <a href="http://www.fsu.ca/events.php"><p>More Info</p></a>
                                <label>Who can come: </label> <input type="text" placeholder="everyone">
    						</div>
  						</dd>
 				 		<dd>
    						<a href="#panel60" onClick="highlightLink(this);"><span class="complaintText">FSU Bake Sale</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel60" class="content">
                                <p class="dateColor">September 4</p>
                                <p class="location">Oasis</p>
                                <p>Fanshawe Mens soccer team needs your help! They need to raise enough to enter a tournament in a few months. So they all put on their aprons and got to baking. Come support your schools soccer team and buy some baked goods.</p>
                                <a href="http://www.fsu.ca/events.php"><p>More Info</p></a>
                                <label>Who can come: </label> <input type="text" placeholder="everyone">
    						</div>
        				</dd> -->
   					</dl>
        		</div>
  			</div><!--End FSU Content--> 
		</div><!--End Content-->
    	<div class="bottomSectionFSU">
			<div class="row">
    			<div class="small-11 small-centered columns">
    				<div class="small-4 columns">
            			<div class="currentPage2">
   	    					<a href="<?php echo base_url(); ?>index.php/fsu/events"><img src="<?php echo base_url(); ?>img/eventsPageIcon.png" alt="fsuEvents"></a> 
            				<h3 class="iconLabel">EVENTS</h3>
                		</div>
       		 		</div>
        			<div class="small-4 columns">
        				<a href="<?php echo base_url(); ?>index.php/fsu/contests"><img src="<?php echo base_url(); ?>img/contestsIcon.png" alt="fsuContests"></a>
            			<h3 class="iconLabel">CONTESTS</h3>
        			</div>
        			<div class="small-4 columns">
        				<a href="<?php echo base_url(); ?>index.php/fsu/info"><img src="<?php echo base_url(); ?>img/infoIcon.png" alt="fsuInfo"></a>
            			<h3 class="iconLabel">INFO</h3>
        			</div>
        		</div>
    		</div>
        </div>
	</div><!--Section End-->
</div><!--FSU EVENTS Page Container End-->