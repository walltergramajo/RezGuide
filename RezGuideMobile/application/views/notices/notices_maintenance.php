<div data-role="page" id="noticesMaintenance">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
    			<div class="small-2 columns">
         			<a href="<?php echo base_url(); ?>index.php/dashboard"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
         		</div>
    			<div class="small-9 small-push-4 columns">
        			<h2  class="topHeader">NOTICES</h2>
        		</div> 
    		</div> 
		</div>
		<div class="contentNews">
			<div class="row">
    			<div class="small-10 small-centered columns">
        			<h3 class="noticesSubHeader">MAINTENANCE</h3>
        		</div>
    		</div>
    		<div class="complaintsContent">
    			<div class="row">
    				<dl class="accordion" data-accordion>   
                        <?php foreach ($results as $row): ?>
  						<dd>
    						<a href="#panel<?php echo $row->notices_id ?>" onClick="highlightLink(this);"><span class="complaintText"><?php echo $row->notices_title ?></span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel<?php echo $row->notices_id ?>" class="content">
                                <p class="dateColor"><?php echo $row->notices_date ?></p>
                                <p><?php echo $row->notices_description ?></p>
    						</div>
  						</dd>
                        <?php endforeach; ?>
  						<!-- <dd>
   							<a href="#panel10" onClick="highlightLink(this);"><span class="complaintText">Routine Maintenance</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel10" class="content">
                                <p class="dateColor">September 9, 2014</p>
                                <p>There will be some hallways around residence that will be undergoing a repainting process, windows surrounding those hallways will be left open but if the fumes are excessive please notify a residence leader.</p>
    						</div>
 					 	</dd>
        				<dd>
    						<a href="#panel11" onClick="highlightLink(this);"><span class="complaintText">Routine Maintenace</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel11" class="content">
                                <p class="dateColor">September 9, 2014</p>
                                <p>There may be some loud noises coming from outside your windows as the building will undergo window cleaning for the day.</p>
    						</div>
  						</dd>
 				 		<dd>
    						<a href="#panel12" onClick="highlightLink(this);"><span class="complaintText">Routine Maintenance</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel12" class="content">
                                <p class="dateColor">September 9, 2014</p>
                                <p>Hot Water Pipe Maintenance. There have been some issues with the hot water so we will be inspecting the hot water pipe system. Water may be temporarily down but you will be given notice.</p>
    						</div>
        				</dd> -->
   					</dl>
  				</div>
			</div><!--Complaints Content End-->
		</div><!--End Content-->
    	<div class="bottomSection">
			<div class="row">
    			<div class="small-4 columns">
   	    			<a href="<?php echo base_url(); ?>index.php/notices/complaints"><img src="<?php echo base_url(); ?>img/complaintsIcon.png" alt="complaints"></a> 
            		<h3 class="iconLabel">COMPLAINTS</h3>
        		</div>
        		<div class="small-4 columns">
        			<a href="<?php echo base_url(); ?>index.php/notices/warnings"><img src="<?php echo base_url(); ?>img/warningIcon.png" alt="warnings"></a>
            		<h3 class="iconLabel">WARNINGS</h3>
       			</div>
        		<div class="small-4 columns">
        			<div class="currentPage">
        				<a href="<?php echo base_url(); ?>index.php/notices/maintenance"><img src="<?php echo base_url(); ?>img/maintenanceIcon.png" alt="maintenance"></a>
            		</div>
            		<h3 class="iconLabel">MAINTENANCE</h3>
        		</div>
    		</div>
		</div>
	</div><!--Section End-->
</div><!--Maintenance Notices End-->