<div data-role="page" id="noticesWarnings">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
    			<div class="small-2 columns">
          			<a href="<?php echo base_url(); ?>index.php/notices/dashboard"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        		</div>
    			<div class="small-9 small-push-4 columns">
        			<h2  class="topHeader">NOTICES</h2>
        		</div> 
    		</div> 
		</div>
		<div class="contentNews">
			<div class="row">
    			<div class="small-10 small-centered columns">
        			<h3 class="noticesSubHeader">WARNINGS</h3>
        		</div>
    		</div>
    		<div class="complaintsContent">
    			<div class="row">
    				<dl class="accordion" data-accordion>
  						<dd>
    						<a href="#panel5" onClick="highlightLink(this);"><span class="complaintText">Housing Violation</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel5" class="content">
                                <p class="dateColor">September 9, 2014</p>
                                <p>Second warning for excessive amounts of liquor allowed into dorms per student.</p>
    						</div>
                		</dd>
  						<dd>
   						 	<a href="#panel6" onClick="highlightLink(this);"><span class="complaintText">Offensive Language</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel6" class="content">
                                <p class="dateColor">September 9, 2014</p>
                                <p>Student refuses to acknowledge or respect his residence leaders so the resident has been given the First warning for talking back to residence leaders.</p>
    						</div>
 					 	</dd>
        				<dd>
    						<a href="#panel7" onClick="highlightLink(this);"><span class="complaintText">Housing Violation</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel7" class="content">
                                <p class="dateColor">September 9, 2014</p>
                                <p>Final warning for excessive music volume. Resident was warned several times about the volume level of their music and refused to comply.</p>
    						</div>
  						</dd>
 				 		<dd>
    						<a href="#panel8" onClick="highlightLink(this);"><span class="complaintText">Campus Violation</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel8" class="content">
                                <p class="dateColor">September 9, 2014</p>
                                <p>Student refuses to find appropriate parking. Second warning for non-designated parking.</p>
    						</div>
        				</dd>
   					</dl>
  				</div>
			</div><!--Complaints Content End-->
		</div><!--content End-->
    	<div class="bottomSection">
			<div class="row">
    			<div class="small-4 columns">
   	    			<a href="<?php echo base_url(); ?>index.php/notices/complaints"><img src="<?php echo base_url(); ?>img/complaintsIcon.png" alt="complaints"></a> 
            		<h3 class="iconLabel">COMPLAINTS</h3>
        		</div>
        		<div class="small-4 columns">
        			<div class="currentPage">
        				<a href="<?php echo base_url(); ?>index.php/notices/warnings"><img src="<?php echo base_url(); ?>img/warningIcon.png" alt="warnings"></a>
            		</div>
            		<h3 class="iconLabel">WARNINGS</h3>
        		</div>
        		<div class="small-4 columns">
        			<a href="<?php echo base_url(); ?>index.php/notices/maintenance"><img src="<?php echo base_url(); ?>img/maintenanceIcon.png" alt="maintenance"></a>
            		<h3 class="iconLabel">MAINTENANCE</h3>
        		</div>
    		</div>
		</div>
	</div><!--Section End-->
</div> <!--Notices Warning Page Container End-->