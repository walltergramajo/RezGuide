<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header">Maintenance</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                        	<dd class="accordionBottom">
                    			<a href="#panel<?php echo $row->notices_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->notices_title ?><span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span></a>
                    			<div id="panel<?php echo $row->notices_id ?>" class="content"><?php echo $row->notices_description ?></div>
                  			</dd>
                        <?php endforeach; ?>
                        <!-- <dd class="accordionBottom">
                			<a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 2 <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                			<div id="panel2" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                			</div>
              			</dd>
                        <dd class="accordionBottom">
                			<a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 3 <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                			<div id="panel3" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                			</div>
              			</dd>
                        <dd class="accordionBottom">
                			<a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Content 4 <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                			<div id="panel4" class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/notices"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/notices"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/maintenance"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/warnings"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/warnings"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
                </ul>
            </div>
        </div>
    </div>   
</section>