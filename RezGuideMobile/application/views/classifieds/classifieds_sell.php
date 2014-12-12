<div data-role="page" id="classifiedsSellSection">
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
		<div class="contentNews">
			<div class="row">
  			<div class="small-10 small-centered columns">
      		<h3 class="requestsSubHeader">SELL</h3>
      	</div>
  		</div>
			<div class="content">
				<div class="row">
    			<dl class="accordion" data-accordion>
            <?php foreach ($results as $row): ?>
    					<dd>
                <a href="#panel<?php echo $row->classifieds_id ?>" onClick="highlightLink(this);"><img class="saleItem" src="<?php echo base_url(); ?>img/itemShoes.png" alt="shoes"> <span class="saleText"><?php echo $row->classifieds_title ?></span> <span class="itemPrice"><?php echo $row->classifieds_price ?></span><span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    						<div id="panel<?php echo $row->classifieds_id ?>" class="content">
      						<p class="classifiedsDescription"><span class="classifiedsUser"><?php echo $row->classifieds_user ?> </span><br> Price: <span class="price"><?php echo $row->classifieds_price ?></span><br>Contact: <span class="classifiedsEmail"><?php echo $row->classifieds_email ?></span></p>
                  <div class="imageContainer">
                    <a href="#" data-reveal-id="myModal"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemShoes.png" alt="item1"></a>
                    <a href="#" data-reveal-id="myModal"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemShoes.png" alt="item1"></a>
                    <a href="#" data-reveal-id="myModal"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemShoes.png" alt="item1"></a>
                  </div> 
                  <div id="myModal" class="reveal-modal" data-reveal>
  									<h2 class="itemTitle">Shoes</h2>
                    <div class="modalContainer">
  										<img class="saleItem3" src="<?php echo base_url(); ?>img/itemShoes.png" alt="item1">
                      <img class="saleItem3" src="<?php echo base_url(); ?>img/itemShoes.png" alt="item1">
                      <img class="saleItem3" src="<?php echo base_url(); ?>img/itemShoes.png" alt="item1">
                      <a class="close-reveal-modal">&#215;</a>
                    </div>
  								</div>
                  <span class="itemDescription"><?php echo $row->classifieds_description ?></span><br><a href="#">More Info</a>
    						</div>
              </dd>
            <?php endforeach; ?>
  					<!-- <dd>
 						 	<a href="#panel18" onClick="highlightLink(this);"><img class="saleItemPlant" src="<?php echo base_url(); ?>img/itemPlant.png" alt="plant"> <span class="saleText">PLANT</span> <span class="itemPrice2">$999</span><span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
  						<div id="panel18" class="content">
   							<p class="classifiedsDescription"><span class="classifiedsUser">user1324 </span><br> Price: <span class="price">$30.00</span> OBO.<br>Contact: <span class="classifiedsEmail">user1324@gmail.com</span></p>
                <div class="imageContainer">
                  <a href="#" data-reveal-id="myModal2"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemPlant.png" alt="item2"></a>
                  <a href="#" data-reveal-id="myModal2"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemPlant.png" alt="item2"></a>
                  <a href="#" data-reveal-id="myModal2"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemPlant.png" alt="item2"></a>
                </div> 
                <div id="myModal2" class="reveal-modal" data-reveal>
									<h2 class="itemTitle">Shoes</h2>
                  <div class="modalContainer">
										<img class="saleItem3" src="<?php echo base_url(); ?>img/itemPlant.png" alt="item2">
                    <img class="saleItem3" src="<?php echo base_url(); ?>img/itemPlant.png" alt="item2">
                    <img class="saleItem3" src="<?php echo base_url(); ?>img/itemPlant.png" alt="item2">
                    <a class="close-reveal-modal">&#215;</a>
                  </div>
								</div>
                <span class="itemDescription">Indoor plant to add some life to your room</span><br><a href="#">More Info</a>
  						</div>
 					 	</dd>
        		<dd>
  						<a href="#panel19" onClick="highlightLink(this);"><img class="saleItemToolbox" src="<?php echo base_url(); ?>img/itemToolbox.png" alt="toolbox"> <span class="saleText">TOOL BOX</span> <span class="itemPrice3">$999</span><span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
  						<div id="panel19" class="content">
   							<p class="classifiedsDescription"><span class="classifiedsUser">user1324 </span><br> Price: <span class="price">$30.00</span> OBO.<br>Contact: <span class="classifiedsEmail">user1324@gmail.com</span></p>
                <div class="imageContainer">
                  <a href="#" data-reveal-id="myModal3"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemToolbox.png" alt="item3"></a>
                  <a href="#" data-reveal-id="myModal3"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemToolbox.png" alt="item3"></a>
                  <a href="#" data-reveal-id="myModal3"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemToolbox.png" alt="item3"></a>
                </div> 
                <div id="myModal3" class="reveal-modal" data-reveal>
									<h2 class="itemTitle">Shoes</h2>
                  <div class="modalContainer">
										<img class="saleItem3" src="<?php echo base_url(); ?>img/itemToolbox.png" alt="item3">
                    <img class="saleItem3" src="<?php echo base_url(); ?>img/itemToolbox.png" alt="item3">
                    <img class="saleItem3" src="<?php echo base_url(); ?>img/itemToolbox.png" alt="item3">
                    <a class="close-reveal-modal">&#215;</a>
                  </div>
								</div>
                <span class="itemDescription">Are you a handy man in need of a toolbox? Like new toolbox..</span><br><a href="#">More Info</a>
  						</div>
  					</dd>
 				 		<dd>
    					<a href="#panel20" onClick="highlightLink(this);"><img class="saleItem" src="<?php echo base_url(); ?>img/itemBook.png" alt="book"> <span class="saleText">ITEM BOOK</span> <span class="itemPrice">$99<</span><span class="selectionArrowRules"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
    					<div id="panel20" class="content">
     						<p class="classifiedsDescription"><span class="classifiedsUser">user1324 </span><br> Price: <span class="price">$30.00</span> OBO.<br>Contact: <span class="classifiedsEmail">user1324@gmail.com</span></p>
                <div class="imageContainer">
                  <a href="#" data-reveal-id="myModal4"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemBook.png" alt="item4"></a>
                  <a href="#" data-reveal-id="myModal4"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemBook.png" alt="item4"></a>
                  <a href="#" data-reveal-id="myModal4"><img class="saleItem2" src="<?php echo base_url(); ?>img/itemBook.png" alt="item4"></a>
                </div> 
                <div id="myModal4" class="reveal-modal" data-reveal>
  								<h2 class="itemTitle">Shoes</h2>
                  <div class="modalContainer">
  									<img class="saleItem3" src="<?php echo base_url(); ?>img/itemBook.png" alt="item4">
                    <img class="saleItem3" src="<?php echo base_url(); ?>img/itemBook.png" alt="item4">
                    <img class="saleItem3" src="<?php echo base_url(); ?>img/itemBook.png" alt="item4">
  									<a class="close-reveal-modal">&#215;</a>
                  </div>
                </div>
                <span class="itemDescription">Are you a handy man in need of a toolbox? Like new toolbox..</span><br><a href="#">More Info</a>
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
   	    		<a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/classifiedsBuyIcon.png" alt="buy"></a> 
            <h3 class="iconLabel">BUY</h3>
        	</div>
        	<div class="small-4 columns">
        		<div class="currentPage">
            	<a href="<?php echo base_url(); ?>index.php/classifieds/sell"><img src="<?php echo base_url(); ?>img/classifiedsSellIcon.png" alt="sell"></a>
            	<h3 class="iconLabel">SELL</h3>
           	</div>
        	</div>
        	<div class="small-4 columns">
        		<a href="<?php echo base_url(); ?>index.php/classifieds/create"><img src="<?php echo base_url(); ?>img/classifiedsCreateIcon.png" alt="create"></a>
            <h3 class="iconLabel">CREATE</h3>
        	</div>
      	</div>  
    	</div>
		</div>
	</div><!--Section End-->
</div><!--Page Container End-->