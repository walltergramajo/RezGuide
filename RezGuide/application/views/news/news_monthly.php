<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header">Monthly Report</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                            <dd class="accordionBottom">
                                <a href="#panel<?php echo $row->news_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->news_title ?><span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                                <div id="panel<?php echo $row->news_id ?>" class="content"> 
                                    <p class="complaintDate"><?php echo $row->news_date ?></p>
                                    <p>Location: <?php echo $row->news_location ?></p>
                                    <p><?php echo $row->news_description ?></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                    	<!-- <dd class="accordionBottom">
                            <a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Thanksgiving Bash<span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel1" class="content">
                                <p class="complaintDate">October 10, 2014</p>
                                <p>Location: Outback Shack</p>
                                <p>Join us at Outback Shack for one last event before everyone goes away to gobble down Turkey all weekend.</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Midterms <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel2" class="content">
                                <p class="complaintDate">October 11, 2014</p>
                                <p>Location: Main Campus</p>
                                <p>Midterms are here for some and around the corner for others. Be sure to be respectful of others trying to study during these weeks.</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Fall Fashion Show <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel3" class="content">
                                <p class="complaintDate">October 16, 2014</p>
                                <p>Location: H Building </p>
                                <p>See what Fanshawe's Fashion students have been up to as they present their work for the Fall season with an amazing fashion show.</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Halloween<span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel4" class="content"> 
                                <p class="complaintDate">October 30, 2014</p>
                                <p>Location: Outback Shack</p>
                                <p>It's that time of year again. Wear your amazing costumes whether purchased or hand made. Show off your wild side for the night at our Halloween Night.</p>
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
            		<li><a href="<?php echo base_url(); ?>index.php/news"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/news"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/news/monthly"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/news/comingevents"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/news/comingevents"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
             	</ul>
            </div>
        </div>
    </div>
    
    <div class="filler"> </div>
</section>