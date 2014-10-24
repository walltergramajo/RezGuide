<section class="mainContent">
    <div class="row" id="createAccountContent">
        <form>
            <div class="small-4 columns">
            	<div class="small-10 small-push-1 columns">
                	<img id="chatIconLarge" src="<?php echo base_url(); ?>img/chatFormIcon.png" alt="Inquiry Picture">
                </div>
            </div>
            <div class="small-8 columns">
                <div class="row">
                	<div class="small-12 columns">
                		<label id="chatInformation" class="sectionLabel">YOUR INFORMATION</label>
                    </div>
                </div>
                <div class="row">
                	<div class="small-12 accountLine"></div>
                </div>
                <div class="row inputRow">
                	<div class="small-12 columns">
                    	<div class="row">
                            <div class="small-3 columns">
                                <label class="labelInfo"> Your Name </label>
                            </div>
                            <div class="small-9 columns">
                			    <input type="text" placeholder="First Name, Last Name"/>
                        	</div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label class="labelInfo"> Building </label>
                            </div>
                            <div class="small-9 columns">
                			    <input type="text" placeholder="Building"/>
                        	</div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label class="labelInfo"> Apartment </label>
                            </div>
                            <div class="small-9 columns">
                			    <input type="text" placeholder="Room #"/>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="small-11 small-push-1 columns">
            		<label id="inquiryTitle" class="sectionLabel labelPush">INQUIRY</label>
                    <div class="accountLine"></div>
                </div>
            </div>
        	<div class="row">
            	<div class="small-11 small-push-1 text-center columns">
                	<textarea placeholder="Please write your Inquiry"></textarea>
                </div>
            </div>
            <div class="row">
            	<div class="small-12 text-center columns">
               	 	<a href="<?php echo base_url(); ?>index.php/chat/chat_channel">
            			<img src="<?php echo base_url(); ?>img/send.png" class="text-center" alt="submit">
                    </a>
                </div>
            </div> 
        </form>
    </div>
    <div class="filler"> </div>
</section>