<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header">Coming Events</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                        	<dd class="accordionBottom">
                                <a href="#panel<?php echo $row->news_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->news_title ?> <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span></a>
                                <div id="panel<?php echo $row->news_id ?>" class="content">
                                    <p class="complaintDate"><?php echo $row->news_date ?></p>
                                    <p>Location: <?php echo $row->news_location ?></p>
                                    <p><?php echo $row->news_description ?></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                        <!-- <dd class="accordionBottom">
                            <a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Run for a Cure <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel2" class="content"> 
                                <p class="complaintDate">November 13, 2014</p>
                                <p>Location: Fanshawe Soccer Fields</p>
                                <p>Before the winter arrives join us in one last run for an amazing cause.</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Final Exams<span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel3" class="content"> 
                                <p class="complaintDate">December 5, 2014</p>
                                <p>Location: All Campuses</p>
                                <p>As the holidays approach so do final exams. Be sure to study hard and go off on Holidays knowing you did well on your exams!</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Christmas Holidays <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel4" class="content"> 
                                <p class="complaintDate">October 10, 2014</p>
                                <p>Location: n/a</p>
                                <p>Exams are over and now we say farewell to our fellow students for a couple of weeks. See you all in the New Year. Happy Holidays.</p>
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
            		<li><a href="<?php echo base_url(); ?>index.php/news/monthly"><img id="prevArrow" src="<?php echo base_url(); ?>img/WA_larrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/news"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/news/monthly"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/news/comingevents"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li class="arrow unavailable"><a href="#"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>
    
    <div class="filler"> </div>
</section>