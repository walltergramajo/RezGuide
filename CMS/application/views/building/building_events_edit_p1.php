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
                                <input type="text" placeholder="Title" value="Lorem Ipsum">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Description</label>
                            </div>
                            <div class="small-10 columns">
                                <textarea id="eventDesc" placeholder="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae sem purus. Vivamus ut ipsum convallis, tempor nulla euismod, hendrerit elit. Proin justo odio, molestie nec sagittis congue, vulputate ut purus. Integer vulputate, augue luctus semper fermentum, velit nibh tempor arcu, vitae pulvinar urna nibh eu odio. Ut sit amet cursus risus, vel auctor mi. Etiam ac consequat massa. Morbi in sem facilisis risus suscipit gravida.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        <div class="row">
        	<div class="small-5 small-centered columns">
                <ul id="pageNav">
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url(); ?>img/WA_lArrow.png" alt="Previous Page">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_building_events_event_pg1.php">
                            <img src="<?php echo base_url(); ?>img/WA_dotFull.png" alt="Page 1">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_building_events_event_pg2.php"> <img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" alt="Page 2">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_building_events_event_pg2.php">
                            <img src="<?php echo base_url(); ?>img/WA_rArrow.png" alt="Next Page">
                        </a>
                    </li>
                </ul>
        	</div>
        </div>
    </section>