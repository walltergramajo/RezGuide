<div data-role="page" id="classifiedsCreateSection">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
    			<div class="small-2 columns">
         			<a href="<?php echo base_url(); ?>index.php/building"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
                </div>
    			<div class="small-9 small-push-2 columns">
        			<h2 class="topHeader">CLASSIFIEDS</h2>
        		</div> 
    		</div> 
		</div><!--End Top Section-->
		<div class="contentNews">
			<div class="row">
    			<div class="small-10 small-centered columns">
        			<h3 class="requestsSubHeader">CREATE</h3>
        		</div>
    		</div>
			<div class="row">
    			<div class="small-11 columns">
    	  			<div class="dropDownContainer">
        				<div class="small-5 columns">
            				<div class="categoryDiv">
                                <select class="categoryDropdown" data-role="none">
                					<option class="optionBackground">BUY/SELL</option>
                    				<option class="optionBackground" value="new">BUY</option>
                    				<option class="optionBackground" value="used">SELL</option>
                				</select>
                			</div>
            			</div>
          			</div> <!--dropDownContainer End-->
          			<div class="dropDownContainer">
            			<div class="small-5 small-push-4 columns">
            				<div class="categoryDiv">
            					<select class="categoryDropdown" data-role="none">
                					<option class="optionBackground">CONDITION</option>
                    				<option class="optionBackground" value="new">NEW</option>
                    				<option class="optionBackground" value="used">USED</option>
                				</select>
                			</div>
            			</div>
          			</div><!--dropDownContainer end-->
       			</div>    
    		</div><!--End Row-->
            <div class="row">
    			<div class="small-2 columns">
                	<label class="labelInfo"> STUDENT NUMBER: </label>
        		</div>
        		<div class="small-9 columns">
    				<input type="text" placeholder="000000"/>
        		</div>	
    		</div>
            <div class="row">
    			<div class="small-2 columns">
                	<label class="labelInfo"> USER-<br>NAME: </label>
        		</div>
        		<div class="small-9 columns">
    				<input type="text" placeholder="username"/>
        		</div>	
    		</div>
    		<div class="row">
    			<div class="small-2 columns">
                	<label class="labelInfo"> EMAIL: </label>
        		</div>
        		<div class="small-9 columns">
    				<input type="text" placeholder="EMAIL"/>
        		</div>	
    		</div>
    		<div class="row">
    			<div class="small-2 columns">
                	<label class="labelInfo"> PHONE: </label>
        		</div>
        		<div class="small-9 columns">
    				<input type="text" placeholder="PHONE"/>
        		</div>
    		</div> 
    		<div class="row">
    			<div class="small-2 columns">
                	<label class="labelInfo"> TITLE: </label>
                </div>
                <div class="small-9 columns">
    				<input type="text" placeholder="TITLE"/>
            	</div>	
    		</div>
    		<div class="row">
    			<div class="small-2 columns">
                	<label class="labelInfo"> PRICE: </label>
                </div>
                <div class="small-9 columns">
    				<input type="text" placeholder="e.g. Free or $40"/>
            	</div>	
    		</div>
            <div class="row">
                <div class="dropDownContainer">
            		<div class="small-6 small-push-4 columns">
            			<div class="categoryDiv">
            				<select class="categoryDropdown" data-role="none">
                				<option class="optionBackground">CATEGORY</option>
                    			<option class="optionBackground" value="furniture">FURNITURE</option>
                    			<option class="optionBackground" >CLOTHING</option>
                    			<option class="optionBackground" >ELECTRONICS</option>
                			</select>
                		</div>
            		</div>
          		</div><!--dropDownContainer end-->
            </div>
    		<div class="row">
    			<div class="small-12 columns">
    				<textarea id="classifiedDescription" spellcheck="true" placeholder="DESCRIPTION"></textarea>
            	</div>
    		</div>
    		<div class="row">
    			<div class="addPhotoContainer">
            		<div class="small-6 columns">
                		<img id="imgUpload" src="<?php echo base_url(); ?>img/addphotoMiniIcon.png" alt="your image" />
                        <input id="file1" type='file' onchange="readURL(this);" />	
                        <p class="pleaseSelect">Select Image</p>
                	</div>
                	<div class="small-6 columns">
                		<img id="imgUpload2" src="<?php echo base_url(); ?>img/addphotoMiniIcon.png" alt="your image" />
                        <input id="file2" type='file' onchange="readURL2(this);" />
                        <p class="pleaseSelect">Select Image</p>
                	</div>
          		</div> <!--End of addPhotoContainer--> 
    		</div>
            <div class="row">
                <div class="addPhotoContainer">
                    <div class="small-6 columns">
                		<img id="imgUpload3" src="<?php echo base_url(); ?>img/addphotoMiniIcon.png" alt="your image" />
                        <input id="file3" type='file' onchange="readURL3(this);" />	
                        <p class="pleaseSelect">Select Image</p>
                	</div>
                	<div class="small-6 columns">
                		<img id="imgUpload4" src="<?php echo base_url(); ?>img/addphotoMiniIcon.png" alt="your image" />
                        <input id="file4" type='file' onchange="readURL4(this);" />
                        <p class="pleaseSelect">Select Image</p>
                	</div>
                </div>
            </div>
    		<div class="row">
    			<div class="small-4 small-centered columns">
   	    			<img src="img/sendButton.png" alt="send_button">
        		</div>
            </div>
    	</div>
	</div><!--End of createScrollSection/Content-->
    <div class="bottomSectionClassifieds">
		<div class="row">
    		<div class="small-11  small-centered columns">
    			<div class="small-4 columns">
   	    			<a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/classifiedsBuyIcon.png" alt="buy"></a> 
            		<h3 class="iconLabel">BUY</h3>	
        		</div>
        		<div class="small-4 columns">
            		<a href="<?php echo base_url(); ?>index.php/classifieds/sell"><img src="<?php echo base_url(); ?>img/classifiedsSellIcon.png" alt="sell"></a>
            		<h3 class="iconLabel">SELL</h3>
        		</div>
        		<div class="small-4 columns">
         			<div class="currentPage">
        				<a href="<?php echo base_url(); ?>index.php/classifieds/create"><img src="<?php echo base_url(); ?>img/classifiedsCreateIcon.png" alt="create"></a>
            		</div>
            		<h3 class="iconLabel">CREATE</h3>
            	</div>
       		</div>
        </div>
    </div><!--End of BottomSection--> 
</div><!--Classifieds Create Section End-->