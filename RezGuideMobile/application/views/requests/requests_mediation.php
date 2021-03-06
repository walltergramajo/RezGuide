<div data-role="page" id="requestsMediation">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
    			<div class="small-2 columns">
          			<a href="<?php echo base_url(); ?>index.php/dashboard"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
         		</div>
    			<div class="small-9 small-push-2 columns">
        			<h2  class="topHeader">REQUESTS</h2>
        		</div> 
    		</div> 
		</div>

		<div class="content">
			<div class="contentNews">
				<div class="row">
    				<div class="small-10 small-centered columns">
        				<h3 class="requestsSubHeader">MEDIATION</h3>
        			</div>
    			</div>
                <form method="post" action="<?php echo base_url(); ?>index.php/requests/sendRequest/2">
    			<div class="requestsContent">
    				<div class="row">
        				<div class="small-8 small-centered columns">
    						<h4 class="requestsSubHeaderTop">YOUR INFORMATION</h4>
            			</div>
  					</div>
        			<div class="row">	
        				<div class="small-12 columns">
            				<div class="requestsBarTop"></div>
            			</div>
        			</div>
        			<div class="row">
    					<div class="small-11 small-push-1 columns">
            				<div>
            					<input type="text" class="generalRequests" placeholder="Your Name:                 First, Last Name" name="studentName" />
           	    			</div>
           				</div>
        			</div>
        			<div class="row">
    					<div class="small-11 small-push-1 columns">
            				<div id="duplicater">
            					<input type="text" class="generalRequests" placeholder="Your Roommate:         First, Last Name" name="roommateName" />
           	    			</div>
           				</div>
        			</div>
                    <div class="row">
                        <div class="small-2 small-push-1 columns">
                            <div>
                                <a href="#"><img class="addInput" src="<?php echo base_url(); ?>img/addRoommate.png" alt="addField"></a>
                            </div>
                        </div>
                        <div class="small-10 columns">
                            <a href="#"><p class="addRoommate addInput">Add Roommate</p></a>
                        </div>
                    </div>
                    <div class="row">
    					<div class="small-11 small-push-1 columns">
            				<div>
            					<input type="text" class="generalRequests" placeholder="Contact #:                       519-777-7777" />
           	    			</div>
           				</div>
        			</div>
        			<div class="row">
        				<div class="small-8 small-centered columns">
    						<h4 class="requestsSubHeaderBottom">YOUR MESSAGE</h4>
            			</div>
  					</div>
        			<div class="row">	
        				<div class="small-12 columns">
            				<div class="requestsBarBottom"></div>
            			</div>
        			</div>
        			<div class="row">
        				<div class="small-10 small-centered columns">
            				<div class="requestsTextArea">
            					<textarea placeholder="Your Message Here:" name="message"></textarea>
                			</div>
            			</div>
        			</div>
				</div><!--End Requests Content-->
    			<div class="row">
        			<div class="small-4 small-centered columns">
       	    			<input type="image" class="sendButton" src="<?php echo base_url(); ?>img/sendButton.png" alt="send">
            		</div>
        		</div>
                </form>
			</div><!--End IconScroll2-->
		</div><!--End Content-->
    	<div class="bottomSection">
			<div class="row">
    			<div class="small-4 columns">
   	    			<a href="<?php echo base_url(); ?>index.php/requests/general"><img src="<?php echo base_url(); ?>img/requestsGeneral.png" alt="general"></a> 
            		<h3 class="iconLabel">GENERAL</h3>
        		</div>
        		<div class="small-4 columns">
        			<div class="currentPage">
        				<a href="<?php echo base_url(); ?>index.php/requests/mediation"><img src="<?php echo base_url(); ?>img/requestsMediation.png" alt="mediation"></a>
            		</div>
            		<h3 class="iconLabel">MEDIATION</h3>
        		</div>
        		<div class="small-4 columns">
        			<a href="<?php echo base_url(); ?>index.php/requests/withdraw"><img src="<?php echo base_url(); ?>img/requestsWithdraw.png" alt="withdraw"></a>
           		    <h3 class="iconLabel">WITHDRAW</h3>
        		</div>
    		</div>
		</div><!--End BottomSection-->
	</div><!--Section End-->
</div> <!--Requests Mediation Page Container End-->