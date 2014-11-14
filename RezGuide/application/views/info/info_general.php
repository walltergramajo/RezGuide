<section class="sectionContainer">
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header">Info</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                            <dd class="accordionBottom">
                                <a href="#panel<?php echo $row->city_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->city_title ?><span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                                <div id="panel<?php echo $row->city_id ?>" class="content"> 
                                    <p class="complaintDate"><?php echo $row->city_hours ?></p>
                                    <p class="location"><?php echo $row->city_location ?></p>
                                    <div><?php echo $row->city_description ?></div>
                                    <img src="<?php echo base_url(); ?>img/<?php echo $row->city_img ?>" alt="nightOut">
                                    <p><a href="<?php echo $row->city_link ?>" target="_blank">More Information</a></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </div>
    </div><!--End mainContent-->
    
    <div id="paginationBg">
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav2">
        		<ul class="pagination"> 
            		<li><a href="<?php echo base_url(); ?>index.php/main"><img id="prevArrow" src="<?php echo base_url(); ?>img/WA_larrow.png" height="20px" width="20px" alt="previous"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/info"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="currentPage"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/info/directory"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/info/cityguide"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/info/directory"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li> 
             	</ul>
            </div>
        </div>
    </div>
</div>
    
    <div class="filler"> </div>
</section>