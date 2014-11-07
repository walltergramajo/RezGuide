<section>
    <div class="mainContent">
        <form>
            <div class="row">
            	<div class="small-4 small-centered columns text-center">
            		<p id="noticeTitle" class="header"><span class="kern">W</span><span class="kern">i</span><span class="kern">t</span><span class="kern">h</span><span class="kern">d</span><span class="kern">r</span><span class="kern">a</span>w</p>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-centered columns">
                    <label class="sectionLabel">YOUR INFORMATION</label>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-centered columns accountLine"></div>
        	</div>
            <div class="row">
            	<div class="small-8 small-centered columns">
            		<div class="row">
                        <div class="small-3 columns">
                            <label class="labelInfo"> Full Name </label>
                        </div>
                        <div class="small-9 columns">
            			    <input type="text" placeholder="First, Last Name"/>
                    	</div>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="small-8 small-centered columns">
            		<div class="row">
                        <div class="small-3 columns">
                            <label class="labelInfo"> Student # </label>
                        </div>
                        <div class="small-9 columns">
            			    <input type="text" placeholder="Student Number"/>
                    	</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-centered columns">
                    <label class="sectionLabelWithdraw">Add A Message</label>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-centered columns accountLine"></div>
            </div>
            <div class="row">
            	<div class="small-8 small-centered columns">
            		<div class="row">
                        <div class="small-3 columns">
                            <label class="labelInfo"> Message </label>
                        </div>
                        <div class="small-9 columns">
            			    <textarea placeholder="Your message goes here"></textarea>
                    	</div>
                    </div>
                </div>
            </div>
            <div class="row">
        		<div class=" small-4 small-push-8 text-center">
                    <input type="submit" class="submitButton" value="SEND" alt="Send!">
                </div>
        	</div>
        </form>
     </div>
    <div class="row">
    	<div class="small-5 small-push-4 columns">
        	<div class="profileNav2">
        		<ul class="pagination"> 
            		<li><a href="<?php echo base_url(); ?>index.php/dashboard/requests/mediation"><img id="prevArrow" src="<?php echo base_url(); ?>img/WA_larrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/requests"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/requests/mediation"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/requests/withdraw"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li class="arrow unavailable"><a href="#"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>
     
    <div class="filler"> </div>
</section>