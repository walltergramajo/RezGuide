<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-4 small-centered columns text-center">
        		<p id="noticeTitle" class="header">Events</p>
            </div>
        </div>
        <div class="row" id="classifiedRow">
           	<div class="small-10 small-centered columns" id="classifiedSection">
            	<dl class="accordion" data-accordion>
                    <?php foreach ($results as $row): ?>
                    	<dd class="accordionBottom">
                			<a href="#panel<?php echo $row->events_id ?>" class="accordionLink">
                                <div class="row">
                                	<div class="classifiedRow">
                                    	<div class="small-2 columns fsuEventThumb">
                                        	<img src="<?php echo base_url(); ?>img/eventThumb.png" class="left" alt="Item Thumbnail">
                                        </div>
                                        <div class="small-7 columns">
                                        	<p class="fsuEventTitle"><?php echo $row->events_title ?></p>
                                            <p class="fsuEventDesc"><?php echo word_limiter($row->events_description, 10) ?></p>
                                        </div>
                                        <div class="small-3 columns text-center">
                                        	<p class="fsuEventLocationTitle header"> Location </p>
                                        	<p class="fsuEventLocation"><?php echo $row->events_location ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                			<div id="panel<?php echo $row->events_id ?>" class="content">
                            	<div class="row">
                                	<div class=" small-2 columns">
                                    	<img class="fsuEventImg" src="<?php echo base_url(); ?>img/event.jpg" alt="Event Picture">
                                    </div>
                                	<div class=" small-7 columns">
                                        <p class="fsuEventFullDesc"><?php echo $row->events_description ?></p>
                                        <p class="text-center"><a href="#" class="fsuEventLink ">http://www.fsu.ca/event_info.php?id=659</a></p>
                                	</div>
                                    <div class="small-3 columns">
                                    	<div class="fsuEvent">
                                        	<div class="fsuEventInfo">
                                                <p class="header fsuEventInfoTitle">Start</p>
                                                <p class="fsuEventInfoText"><?php echo $row->events_startdate ?></p>
                                                <!-- <p class="fsuEventInfoText">2pm to 6pm</p> -->
                                       	 	</div>
                                            <div class="fsuEventInfo">
                                            	<p class="header fsuEventInfoTitle">Price</p>
                                                <div class="row">
                                                	<div class="fsuPriceRow">
                                                    	<div class="small-6 columns fsuEventPrice text-right">
                                                        	<p class="fsuEventInfoText">Students </p>
                                                        </div>
                                                        <div class="small-6 columns">
                                                        	<p class="fsuEventInfoText fsuEventCost">$20.00 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                	<div class="fsuPriceRow">
                                                    	<div class="small-6 columns fsuEventPrice  text-right">
                                                        	<p class="fsuEventInfoText">Guests </p>
                                                        </div>
                                                        <div class="small-6 columns">
                                                        	<p class="fsuEventInfoText fsuEventCost">$30.00 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fsuEventInfo">
                                                <p class="header fsuEventInfoTitle">Who Can Come</p>
                                                <p class="fsuEventInfoText"><?php echo $row->events_whocome ?></p>
                                       	 	</div>
                                        </div>
                                    </div>
                                </div>
                			</div>
              			</dd>
                    <?php endforeach; ?>
                    <!-- <dd class="accordionBottom">
            			<a href="#panel2" class="accordionLink">
                            <div class="row">
                            	<div class="classifiedRow">
                                	<div class="small-2 columns  fsuEventThumb">
                                    	<img src="<?php echo base_url(); ?>img/eventThumb.png" class="left" alt="Item Thumbnail">
                                    </div>
                                    <div class="small-7 columns">
                                    	<p class="fsuEventTitle">Title</p>
                                        <p class="fsuEventDesc">This is a condensed description, it cannot be too long. More...</p>
                                    </div>
                                    <div class="small-3 columns text-center">
                                    	<p class="fsuEventLocationTitle header"> Location </p>
                                    	<p class="fsuEventLocation"> 111 Richmond Row </p>
                                    </div>
                                </div>
                            </div>
                        </a>
            			<div id="panel2" class="content">
                        	<div class="row">
                            	<div class=" small-2 columns">
                                	<img class="fsuEventImg" src="<?php echo base_url(); ?>img/event.jpg" alt="Event Picture">
                                </div>
                            	<div class=" small-7 columns">
                                    <p class="fsuEventFullDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p class="text-center"><a href="#" class="fsuEventLink ">http://www.fsu.ca/event_info.php?id=659</a></p>
                            	</div>
                                <div class="small-3 columns">
                                	<div class="fsuEvent">
                                    	<div class="fsuEventInfo">
                                            <p class="header fsuEventInfoTitle">Start</p>
                                            <p class="fsuEventInfoText">March 26th 2014 </p>
                                            <p class="fsuEventInfoText">2pm to 6pm</p>
                                   	 	</div>
                                        <div class="fsuEventInfo">
                                        	<p class="header fsuEventInfoTitle">Price</p>
                                            <div class="row">
                                            	<div class="fsuPriceRow">
                                                	<div class="small-6 columns fsuEventPrice text-right">
                                                    	<p class="fsuEventInfoText">Students </p>
                                                    </div>
                                                    <div class="small-6 columns">
                                                    	<p class="fsuEventInfoText fsuEventCost">$20.00 </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="fsuPriceRow">
                                                	<div class="small-6 columns fsuEventPrice text-right">
                                                    	<p class="fsuEventInfoText">Guests </p>
                                                    </div>
                                                    <div class="small-6 columns">
                                                    	<p class="fsuEventInfoText fsuEventCost">$30.00 </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fsuEventInfo">
                                            <p class="header fsuEventInfoTitle">Who Can Come</p>
                                            <p class="fsuEventInfoText">Anyone provided they are with a student</p>
                                   	 	</div>
                                    </div>
                                </div>
                            </div>
            			</div>
          			</dd>
                    <dd class="accordionBottom">
            			<a href="#panel3" class="accordionLink">
                            <div class="row">
                            	<div class="classifiedRow">
                                	<div class="small-2 columns  fsuEventThumb">
                                    	<img src="<?php echo base_url(); ?>img/eventThumb.png" class="left" alt="Item Thumbnail">
                                    </div>
                                    <div class="small-7 columns">
                                    	<p class="fsuEventTitle">Title</p>
                                        <p class="fsuEventDesc">This is a condensed description, it cannot be too long. More...</p>
                                    </div>
                                    <div class="small-3 columns text-center">
                                    	<p class="fsuEventLocationTitle header"> Location </p>
                                    	<p class="fsuEventLocation"> 111 Richmond Row </p>
                                    </div>
                                </div>
                            </div>
                        </a>
            			<div id="panel3" class="content ">
                        	<div class="row">
                            	<div class=" small-2 columns">
                                	<img class="fsuEventImg" src="<?php echo base_url(); ?>img/event.jpg" alt="Event Picture">
                                </div>
                            	<div class=" small-7 columns">
                                    <p class="fsuEventFullDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p class="text-center"><a href="#" class="fsuEventLink ">http://www.fsu.ca/event_info.php?id=659</a></p>
                            	</div>
                                <div class="small-3 columns">
                                	<div class="fsuEvent">
                                    	<div class="fsuEventInfo">
                                            <p class="header fsuEventInfoTitle">Start</p>
                                            <p class="fsuEventInfoText">March 26th 2014 </p>
                                            <p class="fsuEventInfoText">2pm to 6pm</p>
                                   	 	</div>
                                        <div class="fsuEventInfo">
                                        	<p class="header fsuEventInfoTitle">Price</p>
                                            <div class="row">
                                            	<div class="fsuPriceRow">
                                                	<div class="small-6 columns fsuEventPrice text-right">
                                                    	<p class="fsuEventInfoText">Students </p>
                                                    </div>
                                                    <div class="small-6 columns">
                                                    	<p class="fsuEventInfoText fsuEventCost">$20.00 </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="fsuPriceRow">
                                                	<div class="small-6 columns fsuEventPrice  text-right">
                                                    	<p class="fsuEventInfoText">Guests </p>
                                                    </div>
                                                    <div class="small-6 columns">
                                                    	<p class="fsuEventInfoText fsuEventCost">$30.00 </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fsuEventInfo">
                                            <p class="header fsuEventInfoTitle">Who Can Come</p>
                                            <p class="fsuEventInfoText">Anyone provided they are with a student</p>
                                   	 	</div>
                                    </div>
                                </div>
                            </div>
            			</div>
          			</dd> -->
            	</dl>
            </div>
        </div>
    </div><!--End mainContent-->
    
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav3">
        		<ul class="pagination">
            		<li><a href="<?php echo base_url(); ?>index.php/fsu"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/fsu"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/fsu/events"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/fsu/contests"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/fsu/contests"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>
    
    <div class="filler"> </div>
</section>