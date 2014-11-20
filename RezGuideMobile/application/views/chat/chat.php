<div data-role="page" id="chatWindow">
    <div class="section">
    	<div class="topSection">
    		<div class="row"> 
        		<div class="small-2 columns">
              		<a href="#chatFormSection"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
             	</div>
        		<div class="small-9 small-push-5 columns">
                    <h2 class="topHeader">CHAT</h2>
            	</div> 
        	</div> 
    	</div>
        <div  id="chatScroll" class="content">
    		<div class="row">
        		<div class="small-10 small-push-3 columns">
            		<div class="chatFloatLeft">
                		<p class="operatorTitle">OPERATOR</p><br><p class="operatorMessage">Hello, how can I help you today?</p>
               		</div>
            	</div>
        	</div>
            <div class="row">
            	<div class="chatConvoSeperator"></div>
            </div>
            <div class="row">
        		<div class="small-9 columns">
            		<div class="chatFloatRight">
                		<p class="operatorTitle">USER NAME</p><br><p class="operatorMessage">Hello, I am very unsure of where to go to print off some documents needed for class.</p>
               		</div>
            	</div>
                <div class="small-3 columns">
           	    	<img class="chatDummyIcon" src="<?php echo base_url(); ?>img/userNameDummy.png" alt="username"> 
                </div>
        	</div>
            <div class="row">
            	<div class="chatConvoSeperator"></div>
            </div>
            <div class="row">
            	<div class="small-3 columns">
           	    	<img class="chatDummyIcon" src="<?php echo base_url(); ?>img/operatorDummyIcon.png" alt="username"> 
                </div>
        		<div class="small-9 columns">
            		<div class="chatFloatLeft">
                		<p class="operatorTitle">OPERATOR</p><br><p class="operatorMessage">Alright, let me look that up for you. Could I start by getting your location?</p>
               		</div>
            	</div>
        	</div>
            <div class="row">
            	<div class="chatConvoSeperator"></div>
            </div>
            <div class="row">
        		<div class="small-9 columns">
            		<div class="chatFloatRight">
                		<p class="operatorTitle">USER NAME</p><br><p class="operatorMessage">I am currently sitting in Alumni Lounge roughly above the pharmacy.</p>
               		</div>
            	</div>
                <div class="small-3 columns">
           	    	<img class="chatDummyIcon" src="<?php echo base_url(); ?>img/userNameDummy.png" alt="username"> 
                </div>
        	</div>
            <div class="row">
            	<div class="chatConvoSeperator"></div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                    <img class="chatDummyIcon" src="<?php echo base_url(); ?>img/operatorDummyIcon.png" alt="username"> 
                </div>
                <div class="small-9 columns">
                	<div class="chatFloatLeft">
                		<p class="operatorTitle">OPERATOR</p><br><p class="operatorMessage">Looks like that nearest lab with a printer is just after Outback Shack before Forwell Hall.</p>
                	</div>
                </div>
            </div>
            <div class="row">
            	<div class="chatConvoSeperator">
                </div>
            </div>
            <div class="row">
        		<div class="small-9 columns">
            		<div class="chatFloatRight">
                		<p class="operatorTitle">USER NAME</p><br><p class="operatorMessage">Thank you for your help!</p>
               		</div>
            	</div>
                <div class="small-3 columns">
           	    	<img class="chatDummyIcon" src="<?php echo base_url(); ?>img/userNameDummy.png" alt="username"> 
                </div>
        	</div>
        </div>
    </div>
	<div class="bottomSectionChat">
		<div class="row">
            <div class="chatInputSection">
           	    <img id="addAttachments" src="<?php echo base_url(); ?>img/addAttachmentsIcon.png" alt="addAttachments"> 
            	<div class="small-9 small-centered columns">
                    <form id="chatInput">
                	   <textarea rows="4" cols="50" placeholder="Your Text Here:"></textarea>
                    </form>
                </div>
                <img id="chatSendButton" src="<?php echo base_url(); ?>img/chatSendButton.png" alt="chatsend"> 
            </div>
   	    </div>
    </div><!--Chat Window End-->
</div>