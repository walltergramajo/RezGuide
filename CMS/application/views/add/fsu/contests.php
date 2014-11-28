   <section>
    	<form id="fsuContest">
        	<div class="row">
            	<div class="small-4 columns">
                	<div class="row">
                    	<div class="small-12 columns addImg">
                        	<img src="<?php echo base_url(); ?>img/CMS_fsuUpload.png" alt="Image Preview">
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div id="browseButton" class="small-10 small-push-3 columns">
                        	<div class="small button">
                            	<span>choose image</span>
                        			<input id="imageButton" type="file" value="choose image"  onchange="img.src= URL.createObjectURL(this.files[0])">
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
                                <label>Description</label>
                            </div>
                            <div class="small-10 columns">
                                <textarea id="desc" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label>Start</label>
                            </div>
                            <div class="small-4 columns">
                            	<input type="text" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="small-2 columns">
                            	<label>End</label>
                            </div>
                            <div class="small-4 columns">
                            	<input type="text" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Who</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="Who Can Enter">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Link</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="www.contestLink.com">
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