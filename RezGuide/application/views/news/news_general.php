<section class="sectionContainer">
    <div class="mainContent">
        <div class="row">
        	<div class="small-10 small-centered columns text-center">
        		<p id="noticeTitle" class="header">General Notices</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
            	<div class="accordionScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                        	<dd class="accordionBottom">
                                <a href="#panel<?php echo $row->news_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->news_title ?><span class="right accordionDropDownIcon"><img src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                                <div id="panel<?php echo $row->news_id ?>" class="content"> 
                                    <p class="complaintDate"><?php echo $row->news_datetime ?></p>
                                    <p>Location: <?php echo $row->news_location ?></p>
                                    <p><?php echo $row->news_description ?></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                        <!-- <dd class="accordionBottom">
                            <a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Sign for Electives <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel2" class="content">
                                <p class="complaintDate">September 16, 2014</p>
                                <p>Location: Office of the Registrar</p>
                                <p>Be sure to sign up for an elective to meet you program requirements for electives. Not meeting requirements could mean not graduating.</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Open House <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel3" class="content">
                                <p class="complaintDate">September 20, 2014</p>
                                <p>Location: Downtown Campus</p>
                                <p>Thinking of enrolling in the one of the Arts programs offered by Fanshawe? Check out your future home in the heart of Downtown London.</p>
                            </div>
                        </dd>
                        <dd class="accordionBottom">
                            <a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Fanshawe Radio Top In Province <span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                            <div id="panel4" class="content"> 
                                <p class="complaintDate">September 21, 2014</p>
                                <p>Location: M Building</p>
                                <p>Celebrate with the radio broadcast team at Fanshawe with being named the top radio station in the province. Meet the team and enjoy fun games.</p>
                            </div>
                        </dd> -->
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
                	<li><a href="<?php echo base_url(); ?>index.php/news"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="currentPage"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/news/monthly"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/news/comingevents"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/news/monthly"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li> 
             	</ul>
            </div>
        </div>
    </div>
</div>
</section>