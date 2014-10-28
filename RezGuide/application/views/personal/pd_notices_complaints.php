<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header">Complaints</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                        	<dd class="accordionBottom">
                                <a href="#panel<?php $row->notices_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php $row->notices_title ?><span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span></a>
                                <div id="panel<?php $row->notices_id ?>" class="content">
                                    <p class="complaintDate"><?php $row->notices_date ?></p>
                                    <p><?php $row->notices_description ?></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                        <!-- <dd class="accordionBottom">
                            <a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Exceeded Alcohol Limit <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel2" class="content"> 
                                <p class="complaintDate">September 16, 2014</p>
                                <p>Residence limit of alcoho allowed is 1L per student and this has been violated by possessing 3L of alcohol within the Residence.</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Guests Violation <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel3" class="content"> 
                                <p class="complaintDate">September 12, 2014</p>
                                <p>Student is only allowed to sign in 1 guest. This has been violated by sneaking in 2 other guests for the night.</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Residence Rules Violation <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel4" class="content">
                                <p class="complaintDate">September 12, 2014</p>
                                <p>Student has failed to follow several rules put in place by Fanshawe Residence. The next violation might result in being removed from Residence all-together.</p>
                            </div>
                        </dd> -->
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav2">
        		<ul class="pagination"> 
            		<li><a href="<?php echo base_url(); ?>index.php/dashboard"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/notices"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/maintenance"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/warnings"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/maintenance"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>   
</section>