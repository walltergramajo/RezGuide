    <section>
    	<form id="newsEvent">
        	<div class="row">
            	<div class="small-4 columns" id="locDateTime">
                	<div class="row">
                    	<div class="small-12 columns addImg">
                        	<img src="<?php echo base_url(); ?>img/CMS_pickImg.png" alt="Choose an Image">
                            <div id="browseButton2" class="small-10 small-push-3 columns">
                        		<div class="small button">
                            		<span>choose image</span>
                        			<input id="imageButton" type="file" value="choose image"  onchange="img.src= URL.createObjectURL(this.files[0])">
                           	 	</div>
                        	</div>
                        </div>    
                    </div>
                    <div class="locDateTimeInputs">
                        <div class="row">
                            <div class="small-3 columns">
                                <label>location</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" placeholder="location">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label>mm/dd/yyyy</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" placeholder="mm/dd/yyyy">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-3 columns">
                                <label>time</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" placeholder="time">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-8 columns">
                	<div class="coreInfo">
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Title</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Content</label>
                            </div>
                            <div class="small-10 columns">
                                <textarea placeholder="Content"></textarea>
                            </div>
                        </div>
                        <div class="row">
            	<div class="small-4 columns push-4">
                	<input type="submit" class="submitButton1" value="SUBMIT" alt="Send!">
                </div>
            </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    
    <div class="filler"> </div>