<section class="mainContent">
    <div class="row">
    	<div class="small-10 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Directory</p>
        </div>
    </div>
    <div class="row">
       <div class="small-8 small-centered columns">
        	<div class="accordionScroll">
        		<dl class="accordion2" data-accordion>
                    <?php foreach ($results as $row): ?>
                        <dd class="accordionBottom">
                            <a href="#panel<?php echo $row->directory_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->directory_firstname . " " . $row->directory_lastname ?><span class="right accordionDropDownIcon"><img src="<?php echo base_url() ?>img/accordionArrowDown.png" alt="Click For more Information."></span></a>
                            <div id="panel<?php echo $row->directory_id ?>" class="content"> 
                                <p class="complaintDate"><?php echo $row->directory_position ?></p>
                                <p>Office: <?php echo $row->directory_officenumber ?></p>
                                <p>Phone: <a href="tel:+1<?php echo str_replace("-", "", $row->directory_phone) ?>"><?php echo $row->directory_phone ?></a><br></p>
                                <p>Email: <a href="#"><?php echo $row->directory_email ?></a></p>
                            </div>
                        </dd>
                    <?php endforeach; ?>
                </dl>
            </div>
        </div>
    </div>
    
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav3">
        		<ul class="pagination">
            		<li><a href="<?php echo base_url(); ?>index.php/info"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/info"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/info/directory"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/info/cityguide"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/info/cityguide"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>
    
    <div class="filler"> </div>
</section>