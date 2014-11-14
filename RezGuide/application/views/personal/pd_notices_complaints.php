<section class="sectionContainer">
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
                                <a href="#panel<?php echo $row->notices_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->notices_title ?><span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url() ?>img/accordionArrowDown.png" alt="Click For more Information."></span></a>
                                <div id="panel<?php echo $row->notices_id ?>" class="content">
                                    <p class="complaintDate"><?php  echo $row->notices_date ?></p>
                                    <p><?php echo $row->notices_description ?></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div id="paginationBg">
    <div class="row">
    	<div class="small-5 small-centered columns">
        	<div class="profileNav2">
        		<ul class="pagination"> 
            		<li><a href="<?php echo base_url(); ?>index.php/dashboard"><img id="prevArrow" src="<?php echo base_url(); ?>img/WA_larrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/notices"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/maintenance"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/warnings"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/notices/maintenance"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div> 
    </div>  
</section>