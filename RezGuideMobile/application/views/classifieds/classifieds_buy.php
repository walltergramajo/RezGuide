<div data-role="page" id="classifiedsBuySection">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
    		<div class="small-2 columns">
          <a href="<?php echo base_url(); ?>index.php/building"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
    		<div class="small-9 small-push-2 columns">
        	<h2  class="topHeader">CLASSIFIEDS</h2>
        </div> 
    	</div> 
		</div>
		<div class="contentClassifieds">
			<div class="row">
    		<div class="small-10 small-centered columns">
        	<h3 class="requestsSubHeader">BUY</h3>
        </div>
    	</div>
			<div class="rulesContent">
				<div class="row">
    			<dl class="accordion" data-accordion>
            <?php foreach ($results as $row): ?>
  					<dd>
    					<a href="#panel<?php echo $row->classifieds_id ?>" onClick="highlightLink(this);"><span class="complaintText"><?php echo $row->classifieds_title ?></span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel<?php echo $row->classifieds_id ?>" class="content">
      					<p class="classifiedsDescription"><span class="classifiedsUser"><?php echo $row->classifieds_user ?> </span><br> Price: <span class="price"><?php echo $row->classifieds_price ?></span><br>
                  Contact: <span class="classifiedsEmail"><?php echo $row->classifieds_email ?></span></p> 
                <span class="itemDescription"><?php echo $row->classifieds_description ?></span><br><a href="#">More Info</a>
    					</div>
            </dd>
          <?php endforeach; ?>
  					<!-- <dd>
   						<a href="#panel2" onClick="highlightLink(this);"><span class="complaintText">Red Dress Size 3</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel2" class="content">
     						<p class="classifiedsDescription"><span class="classifiedsUser">user1324 </span><br> Price: <span class="price">$50.00</span> OBO.<br>Contact: <span class="classifiedsEmail">user1324@gmail.com</span></p> <span class="itemDescription">Coco Chanel dress size 3, tags still on..</span><br><a href="#">More Info</a>
    					</div>
 					 	</dd>
        		<dd>
    					<a href="#panel43" onClick="highlightLink(this);"><span class="complaintText">Sony PSP MINT CONDITION</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel43" class="content">
     						<p class="classifiedsDescription"><span class="classifiedsUser">user1324 </span><br> Price: <span class="price">$150.00</span> OBO.<br>Contact: <span class="classifiedsEmail">user1324@gmail.com</span></p> <span class="itemDescription">Sony PSP, 8 Games Mint condition with 4 games..</span><br><a href="#">More Info</a>
    					</div>
  					</dd>
 				 		<dd>
    					<a href="#panel44" onClick="highlightLink(this);"><span class="complaintText">Portable Air Conditioner</span> <span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel44" class="content">
     						<p class="classifiedsDescription"><span class="classifiedsUser">user1324 </span><br> Price: <span class="price">$50.00</span> OBO.<br>Contact: <span class="classifiedsEmail">user1324@gmail.com</span></p> <span class="itemDescription">Sony PSP, 8 Games Mint condition with 4 games..</span><br><a href="#">More Info</a><a href="#">More Info</a>
    					</div>
        		</dd> -->
   				</dl>
        </div>
  		</div><!--Rules Content End--> 
		</div><!--Content End-->
    <div class="bottomSectionClassifieds">
			<div class="row">
    		<div class="small-11  small-centered columns">
    			<div class="small-4 columns">
        		<div class="currentPage">
   	    			<a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/classifiedsBuyIcon.png" alt="buy"></a> 
            	<h3 class="iconLabel">BUY</h3>
        		</div>
        	</div>
        	<div class="small-4 columns">
            <a href="<?php echo base_url(); ?>index.php/classifieds/sell"><img src="<?php echo base_url(); ?>img/classifiedsSellIcon.png" alt="sell"></a>
            <h3 class="iconLabel">SELL</h3>
        	</div>
          <div class="small-4 columns">
        		<a href="<?php echo base_url(); ?>index.php/classifieds/create"><img src="<?php echo base_url(); ?>img/classifiedsCreateIcon.png" alt="create"></a> 
            <h3 class="iconLabel">CREATE</h3>
        	</div>
      	</div>  
    	</div>
		</div>
	</div><!--Classifieds Buy Section End-->
</div>