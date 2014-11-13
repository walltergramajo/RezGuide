<section class="sectionContainer">
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header"> Rules and Policies</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                            <dd class="accordionBottom">
                                <a href="#panel<?php echo $row->rules_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->rules_title ?><span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url() ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                                <div id="panel<?php echo $row->rules_id ?>" class="content">
                                    <p class="complaintDate"><?php echo $row->rules_date ?></p>
                                    <p><?php echo $row->rules_description ?></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </div>
    </div><!--End mainContent-->
    
    <div class="row" id="paginationBg">
    	<div class="small-5 small-centered columns">
        	<div class="profileNav2">
        		<ul class="pagination">
            		<li><a href="<?php echo base_url(); ?>index.php/building/housekeeping"><img id="prevArrow" src="<?php echo base_url(); ?>img/WA_larrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/building/garbage"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/building/housekeeping"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/building/rules"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li class="arrow unavailable"><a href="#"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>
    
    <div class="filler"> </div>
</section>