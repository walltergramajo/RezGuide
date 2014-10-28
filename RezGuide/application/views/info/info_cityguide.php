<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header">City Guide</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                            <dd class="accordionBottom">
                                <a href="#panel<?php echo $row->events_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->events_title ?><span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                                <div id="panel<?php echo $row->events_id ?>" class="content"> 
                                    <p class="complaintDate"><?php echo $row->events_startdate ?></p>
                                    <p class="location"><?php echo $row->events_location ?></p>
                                    <div><?php echo $row->events_description ?></div>
                                    <img src="<?php echo base_url(); ?>img/nightout.jpg" alt="nightOut">
                                    <p><a href="<?php echo $row->events_link ?>" target="_blank">More Information</a></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                    	<!-- <dd class="accordionBottom">
                            <a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Tuesday is movie night <span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel1" class="content"> 
                                <p class="complaintDate">Every Tuesday - All Day</p>
                                <p class="location">Cineplex Theatres - $5 per person</p>
                                <p>Tuesday night is movie night with Cineplex. Be sure to arrive early to get your ticket, for showtimes and movie playing be sure to check the Cineplex website.</p>
                                <img src="<?php echo base_url(); ?>img/nightout.jpg" alt="nightOut"
                                <a href="http://www.cineplex.com"><p>www.cineplex.com</p></a>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Laser Tag Mondays <span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel2" class="content">
                                <p class="complaintDate">Every Tuesday - All Day</p>
                                <p class="location">Cineplex Theatres - $5 per person</p>
                                <p>Tuesday night is movie night with Cineplex. Be sure to arrive early to get your ticket, for showtimes and movie playing be sure to check the Cineplex website.</p>
                                <img src="<?php echo base_url(); ?>img/nightout.jpg" alt="nightOut">
                                <a href="http://www.cineplex.com"><p>www.cineplex.com</p></a>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Half Price Bottles of wine <span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel3" class="content">
                                <p class="complaintDate">Every Tuesday - All Day</p>
                                <p class="location">Cineplex Theatres - $5 per person</p>
                                <p>Tuesday night is movie night with Cineplex. Be sure to arrive early to get your ticket, for showtimes and movie playing be sure to check the Cineplex website.</p>
                                <img src="<?php echo base_url(); ?>img/nightout.jpg" alt="nightOut">
                                <a href="http://www.cineplex.com"><p>www.cineplex.com</p></a>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Thursday is Ladies night<span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel4" class="content"> 
                                <p class="complaintDate">Every Tuesday - All Day</p>
                                <p class="location">Cineplex Theatres - $5 per person</p>
                                <p>Tuesday night is movie night with Cineplex. Be sure to arrive early to get your ticket, for showtimes and movie playing be sure to check the Cineplex website.</p>
                                <img src="<?php echo base_url(); ?>img/nightout.jpg" alt="nightOut">
                                <a href="http://www.cineplex.com"><p>www.cineplex.com</p></a>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel5" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Laser Tag Mondays <span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel5" class="content">
                                <p class="complaintDate">Every Tuesday - All Day</p>
                                <p class="location">Cineplex Theatres - $5 per person</p>
                                <p>Tuesday night is movie night with Cineplex. Be sure to arrive early to get your ticket, for showtimes and movie playing be sure to check the Cineplex website.</p>
                                <img src="<?php echo base_url(); ?>img/nightout.jpg" alt="nightOut">
                                <a href="http://www.cineplex.com"><p>www.cineplex.com</p></a>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel6" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Laser Tag Mondays <span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel6" class="content">
                                <p class="complaintDate">Every Tuesday - All Day</p>
                                <p class="location">Cineplex Theatres - $5 per person</p>
                                <p>Tuesday night is movie night with Cineplex. Be sure to arrive early to get your ticket, for showtimes and movie playing be sure to check the Cineplex website.</p>
                                <img src="<?php echo base_url(); ?>img/nightout.jpg" alt="nightOut">
                                <a href="http://www.cineplex.com"><p>www.cineplex.com</p></a>
                            </div>
                        </dd> -->
                    </dl>
                </div>
            </div>
        </div>
    </div><!--End mainContent-->
        
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav2">
        		<ul class="pagination"> 
            		<li><a href="<?php echo base_url(); ?>index.php/info/directory"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/info"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/info/directory"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/info/cityguide"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li class="arrow unavailable"><a href="#"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
             	</ul>
            </div>
        </div>
    </div>
    
    <div class="filler"> </div>
</section>