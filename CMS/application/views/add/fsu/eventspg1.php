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
                	<div class="coreInfo" id="eventpgOne">
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
                                <label>Link</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="www.fsuLink.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Description</label>
                            </div>
                            <div class="small-10 columns">
                                <textarea placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        <div class="row">
        	<div class="small-6 small-centered columns">
                <ul id="pageNav">
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url(); ?>img/WA_lArrow.png" alt="Previous Page">
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/add/fsu/events_pg1">
                        <a href="cms_add_fsu_event_pg1.php">
                            <img src="<?php echo base_url(); ?>img/WA_dotFull.png" alt="Page 1">
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/add/fsu/events_pg2">
                            <img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" alt="Page 2">
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/add/fsu/events_pg2">
                            <img src="<?php echo base_url(); ?>img/WA_rArrow.png" alt="Next Page">
                        </a>
                    </li>
                </ul>
        	</div>
        </div>
    </section>
    
    <div class="filler"> </div>