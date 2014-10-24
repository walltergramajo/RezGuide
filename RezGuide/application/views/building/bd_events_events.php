<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header"> Events</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                    <?php foreach ($results as $row): ?>
                    	<dd class="accordionBottom">
                			<a href="#panel<?php echo $row->events_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this)" onClick="highlightLink2(this);"><?php echo $row->events_title ?><span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                			<div id="panel<?php echo $row->events_id ?>" class="content">
                                <p class="complaintDate"><?php echo $row->events_startdate ?> to <?php echo $row->events_enddate ?></p>
                                <p class="location"><?php echo $row->events_location ?></p>
                                <p><?php echo $row->events_description ?></p>
                                <a href="#"><p>More Info</p></a>
                                <label>Who can come:</label><input type="text">
                			</div>
              			</dd>
                    <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </div>
    </div><!--End mainContent-->
    
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav2">
        		<ul class="pagination">
            		<li><a href="<?php echo base_url(); ?>index.php/building"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/events"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/events/contests"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/events/programs"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/events/contests"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>

    <div class="filler"> </div>
</section>