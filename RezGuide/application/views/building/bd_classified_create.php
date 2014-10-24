<section>
    <div class="mainContent">
        <div class="row" id="listingForm">
            <form>
                <div class="small-7 columns">
                    <div class="row inputRow" id="createRow1">
                        <div class="row">
                            <div class="small-10 columns text-center">
                                <p id="listingTitleCreate" class="header">Create</p>
                            </div>
                        </div>
                        <div class="small-2 columns">
                            <label class="labelInfo"> Category </label>
                        </div>
                        <div class="small-4 columns">
                            <select>
                                <option>Category</option>
                            </select>
                        </div>
                        <div class="small-2 columns">
                            <label class="labelInfo"> Type </label>
                        </div>
                        <div class="small-4 columns">
                            <select>
                                <option>Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="row inputRow" id="createRow2">
                        <div class="small-2 columns">
                            <label class="labelInfo"> Title </label>
                        </div>
                        <div class="small-10 columns">
                            <input type="text" placeholder="Title"/>
                        </div>  
                    </div>
                    <div class="row inputRow" id="createRow3">
                        <div class="small-2 columns">
                            <label class="labelInfo"> Description </label>
                        </div>
                        <div class="small-10 columns">
                            <textarea id="classifiedDescription">Description</textarea>
                        </div>  
                    </div>
                    <div class="row inputRow" id="createRow4">
                        <div class="small-2 columns">
                            <label class="labelInfo"> Email </label>
                        </div>
                        <div class="small-4 columns">
                            <input type="text" placeholder="Email"/>
                        </div>  
                        <div class="small-2 columns">
                            <label class="labelInfo"> Phone </label>
                        </div>
                        <div class="small-4 columns">
                            <input type="text" placeholder="Phone"/>
                        </div>  
                    </div>
                    <div class="row inputRow" id="createRow5">
                        <div class="small-3 columns">
                            <label class="labelInfo">Student #</label>
                        </div>
                        <div class="small-9 small-pull-1 columns">
                            <input type="text" placeholder="651566"/>
                        </div>  
                    </div>
                </div>
                <div class="small-5 columns" id="imageInputs">
                    <div class="row">
                        <div class="small-5 columns">
                            <div class="small button">
                                <span class="imageChoose">choose image</span>
                                <input type="file">
                            </div>
                        </div>
                        <div class="small-6 columns">
                            <textarea placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-5 columns">
                            <div class="small button">
                                <span class="imageChoose">choose image</span>
                                <input type="file">
                            </div>
                        </div>
                        <div class="small-6 columns">
                            <textarea placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-5 columns">
                            <div class="small button">
                                <span class="imageChoose">choose image</span>
                                <input type="file">
                            </div>
                        </div>
                        <div class="small-6 columns">
                            <textarea placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row radioButtons" id="listingRadio"> 
                        <div class="small-4 small-push-2 columns" id="classifiedMoneyInput">
                            <label class="labelInfo left" id="dollarSign">$</label>
                            <input id="moneyInput" type="text">
                        </div>
                        <div class="small-4 small-push-1 columns">
                            <div class="onoffswitch">
                                <div class="switch small round">
                                    <input id="z" name="switch-z" type="radio" checked>
                                    <label for="z" onclick=""></label>
                                    <input id="z1" name="switch-z" type="radio">
                                    <label for="z1" onclick=""></label>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="small-4 columns text-center">
                            <p id="freeOption">free</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="small-2 small-centered columns">
                <a href="#"><img src="<?php echo base_url(); ?>img/submitButton.png" class="text-center" alt="submit"></a>
            </div>
        </div>
    </div><!--End mainContent-->
     
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav3">
        		<ul class="pagination"> 
            		<li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/classifieds"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/create"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li class="arrow unavailable"><a href="#"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div> 
     
    <div class="filler"> </div>
</section>