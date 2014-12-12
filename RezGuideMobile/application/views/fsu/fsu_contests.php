<div data-role="page" id="fsuContestsPage">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
    			<div class="small-2 columns">
          			<a href="<?php echo base_url(); ?>index.php/fsu"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
         		</div>
    			<div class="small-9 small-push-5 columns">
        			<h2  class="topHeader">FSU</h2>
        		</div> 
    		</div> 
		</div>
		<div class="contentFSU">
			<div class="row">
    			<div class="small-12 small-centered columns">
        			<h3 class="requestsSubHeader">CONTESTS</h3>
        		</div>
    		</div>
			<div class="fsuContent">
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
                                    <label>Who can come: </label> <input type="text" placeholder="everyone">
        						</div>
                   			</dd>
                        <?php endforeach; ?>
  						<!-- <dd>
   						 	<a href="#panel62" onClick="highlightLink(this);"><span class="complaintText">Fanshawe Fashion Showcase</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel62" class="content">
                                <p class="dateColor">September 4</p>
                                <p class="location">H Building</p>
                                <p>There is nothing wrong with a little competition, come join us as we see what Fanshawe's Fashion program has been up to in a fun competition where the audience will vote on the best fashion pieces.</p>
                                <a href="http://fsu.ca/contests.php"><p>More Info</p></a>
                                <label>Who can come: </label> <input type="text" placeholder="everyone">
    						</div>
 					 	</dd>
        				<dd>
    						<a href="#panel63" onClick="highlightLink(this);"><span class="complaintText">FSU BBQ</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel63" class="content">
                                <p class="dateColor">September 4</p>
                                <p class="location">Outside of Forwell Hall</p>
                                <p>Let's kick off the year with a bbq! FSU is hosting an amazing bbq for all students to welcome you to Fanshawe, stop by and chat with faculty or FSU representitives.</p>
                                <a href="http://fsu.ca/contests.php"><p>More Info</p></a>
                                <label>Who can come: </label> <input type="text" placeholder="everyone">
    						</div>
  						</dd>
 				 		<dd>
    						<a href="#panel64" onClick="highlightLink(this);"><span class="complaintText">Scavenger Hunt</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel64" class="content">
                                <p class="dateColor">September 4</p>
                                <p class="location">Main Campus</p>
                                <p>FSU presents its first Scavenger Hunt. Sign up at the FSU office and on the date indicated participate in hunting down different objects throughout campus to complete your list.</p>
                                <a href="http://fsu.ca/contests.php"><p>More Info</p></a>
                                <label>Who can come: </label> <input type="text" placeholder="everyone">
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
        				<div class="currentPage2">
        					<a href="<?php echo base_url(); ?>index.php/fsu/contests"><img src="<?php echo base_url(); ?>img/contestsIcon.png" alt="fsuContests"></a>
            				<h3 class="iconLabel">CONTESTS</h3>
            			</div>
        			</div>
        			<div class="small-4 columns">
        				<a href="<?php echo base_url(); ?>index.php/fsu/info"><img src="<?php echo base_url(); ?>img/infoIcon.png" alt="fsuInfo"></a>
            			<h3 class="iconLabel">INFO</h3>
        			</div>
        		</div>
    		</div>
        </div>
	</div><!--End Section-->
</div><!--FSU Contests End-->