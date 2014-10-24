<section>
    <div class="mainContent">
        <div class="row">
        	<div class="small-4 small-centered columns text-center">
        		<p id="noticeTitle" class="header">Sell</p>
            </div>
        </div>
        <div class="row">
        	<div class="small-6 small-centered columns" id="classifiedFilters">
            	<div class="row">
                	<div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds"><img src="<?php echo base_url(); ?>img/all.png" alt="All Classifieds"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/sell/books"><img src="<?php echo base_url(); ?>img/book.png" alt="Books"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/sell/clothing"><img src="<?php echo base_url(); ?>img/clothing.png" alt="Clothing"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/sell/furniture"><img src="<?php echo base_url(); ?>img/furniture.png" alt="Furniture"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/sell/electronics"><img src="<?php echo base_url(); ?>img/computers.png" alt="Electronics"></a>
                    </div>
                    <div class="small-2 columns">
                    	<a href="<?php echo base_url(); ?>index.php/classifieds/sell/other"><img src="<?php echo base_url(); ?>img/other.png" alt="other"></a>
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
                			<a href="#panel<?php echo $row->classifieds_id ?>" class="accordionLink" onClick="highlightLink3(this);">
                                <div class="row">
                                	<div class="classifiedRow">
                                		<div class="small-2 columns text-center">
                                        	<img class="setIcon" src="<?php echo base_url(); ?>img/shoesSell.png" alt="Item Thumbnail">
                                        </div>
                                        <div class="small-7 columns">
                                        	<p class="itemTitle"><?php echo $row->classifieds_title ?></p>
                                            <p class="itemDesc"><?php echo substr($desc,0,strrpos($desc,' ')).' More...' ?></p>
                                        </div>
                                        <div class="small-3 columns text-center">
                                        	<p class="userNameClass"><?php echo $row->classifieds_user ?></p>
                                        	<p class="itemPrice"><?php echo $row->classifieds_price ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                			<div id="panel<?php echo $row->classifieds_id ?>" class="content">
                            	<div class="row">
                                	<div class=" small-4 columns">
                                    	<div class="small-11 columns">
                                    	    <img class="setIcon" src="<?php echo base_url(); ?>img/itemShoes.png" alt="Item Thumbnail">
                                        </div>
                                        <ul class="pagination"> 
                                    		<li class="arrow unavailable"><a href=""><img class="prevArrowSell" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                                        	<li><a href="#"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li> 
                                        	<li><a href="#"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                                            <li><a href="#"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                                        	<li><a href="#"><img class="nextArrowSell" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                                     	</ul>
                                    </div>
                                	<div class=" small-5 itemFullDescSell columns"><?php echo $row->classifieds_description ?></div>
                                    <div class="small-3 columns">
                                    	<div class="contactSellUser">
                                        	<div class="row">
                                            	<div class="small-4 columns">
                                            	    <img class="left" src="<?php echo base_url(); ?>img/emailIcon.png" alt="User's email address">
                                                </div>
                                                <div class="small-8 columns"> 
                                                    <p class="userContactInfo"><?php echo $row->classifieds_email ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="small-4 columns">
                                            	    <img class="left" src="<?php echo base_url(); ?>img/phoneIcon.png" alt="User's phone number">
                                                </div>
                                                <div class="small-8 columns"> 
                                                    <p class="userContactInfo"><?php echo $row->classifieds_phone ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="small-4 columns">
                                            	    <img class="left" src="<?php echo base_url(); ?>img/addressIcon.png" alt="User's residence room">
                                                </div>
                                                <div class="small-8 columns"> 
                                                    <p class="userContactInfo"> R154 </p>
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
            		<li><a href="<?php echo base_url(); ?>index.php/building"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/classifieds"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/create"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>

    <div class="filler"> </div>
</section>