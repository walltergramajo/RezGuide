<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-4 small-centered columns text-center">
        		<p id="noticeTitle" class="header">Buy</p>
            </div>
        </div>
        <div class="row">
        	<div class="small-6 small-centered columns" id="classifiedFilters">
            	<div class="row">
                	<div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/all.png" alt="All Classifieds"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/buy/books"><img src="<?php echo base_url(); ?>img/book.png" alt="Books"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/buy/clothing"><img src="<?php echo base_url(); ?>img/clothing.png" alt="Clothing"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/buy/furniture"><img src="<?php echo base_url(); ?>img/furniture.png" alt="Furniture"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/buy/electronics"><img src="<?php echo base_url(); ?>img/computers.png" alt="Electronics"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/buy/other"><img src="<?php echo base_url(); ?>img/other.png" alt="other"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="classifiedRow">
           	<div class="small-10 small-centered columns" id="classifiedSection">
            	<dl class="accordion" data-accordion>
                    <?php foreach ($results as $row): ?>
                        <?php $desc = substr($row->classifieds_description,0,50) ?>
                    	<dd class="accordionBottom">
                			<a href="#panel<?php echo $row->classifieds_id ?>" class="accordionLink">
                                <div class="row">
                                	<div class="classifiedRow">
                                    	<div class="small-3 columns text-center">
                                        	<p class="itemStatus">Wanted</p>
                                        </div>
                                        <div class="small-6 columns">
                                        	<p class="itemTitle"><?php echo $row->classifieds_title ?></p>
                                            <p class="itemDesc"><?php echo substr($desc,0,strrpos($desc,' ')).' More...' ?></p>
                                            <p class="itemCondition">Condition: <span class="newUsed">used</span></p>
                                        </div>
                                        <div class="small-3 columns text-center">
                                        	<p class="userNameClass"><?php echo $row->classifieds_user ?></p>
                                        	<p class="itemPrice"><?php echo $row->classifieds_price ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                			<div id="panel<?php echo $row->classifieds_id ?>" class="content ">
                            	<div class="row">
                                	<div class=" small-8 itemFullDesc columns"><?php echo $row->classifieds_description ?></div>
                                    <div class="small-4 columns">
                                    	<div class="contactBuyUser">
                                        	<div class="row">
                                            	<div class="small-3 columns">
                                            	    <img class="left" src="<?php echo base_url(); ?>img/emailIcon.png" alt="User's email address">
                                                </div>
                                                <div class="small-9 columns">
                                                    <p class="userContactInfo"><?php echo $row->classifieds_email ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="small-3 columns">
                                            	    <img class="left" src="<?php echo base_url(); ?>img/phoneIcon.png" alt="User's phone number">
                                                </div>
                                                <div class="small-9 columns">
                                                    <p class="userContactInfo"><?php echo $row->classifieds_phone ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                			</div>
              			</dd>
                    <?php endforeach; ?>
            	</dl>
            </div>
        </div>
    </div><!--End mainContent-->
    
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav3">
        		<ul class="pagination">
            		<li><a href="<?php echo base_url(); ?>index.php/classifieds"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/classifieds"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/create"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/classifieds/create"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>
    
    <div class="filler"> </div>
</section>