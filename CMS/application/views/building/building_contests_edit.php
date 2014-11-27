 <section>
    	<form id="fsuContest">
        	<div class="row">
            	<div id="fsuContest" class="small-4 columns">
                	<div class="row">
                    	<div id="browseButton" class="small-10 small-push-3 columns">
                        	<div class="small button">
                            	<span>choose image</span>
                        			<input id="imageButton" type="file" value="choose image"  onchange="img.src= URL.createObjectURL(this.files[0])">
                            </div>
                        </div>
                    </div>
                	<div class="row">
                    	<div class="small-12 columns">
                        	<img src="<?php echo base_url(); ?>img/CMS_fsuUpload.png" alt="Image Preview">
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
                                <input type="text" placeholder="Title" value="Lorem Ipsum">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Description</label>
                            </div>
                            <div class="small-10 columns">
                                <textarea id="desc" placeholder="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae sem purus. Vivamus ut ipsum convallis, tempor nulla euismod, hendrerit elit. Proin justo odio, molestie nec sagittis congue, vulputate ut purus. Integer vulputate, augue luctus semper fermentum, velit nibh tempor arcu, vitae pulvinar urna nibh eu odio. Ut sit amet cursus risus, vel auctor mi. Etiam ac consequat massa. Morbi in sem facilisis risus suscipit gravida.</textarea>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label>Start</label>
                            </div>
                            <div class="small-4 columns">
                            	<input type="text" placeholder="dd/mm/yyyy" value="10/16/2014">
                            </div>
                            <div class="small-2 columns">
                            	<label>End</label>
                            </div>
                            <div class="small-4 columns">
                            	<input type="text" placeholder="dd/mm/yyyy" value="01/01/2015">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Who</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="Who Can Enter" value="Open To All First Year Students">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Link</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="www.contestLink.com" value="www.firstyearcontest.com">
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