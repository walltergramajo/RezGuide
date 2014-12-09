<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-5 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/students">
                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-3 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/edit/students/studentInfo">
            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>

<section>
    	<form id="newStudent">
        	<div class="row">
            	<div class="small-4 columns">
                	<div class="row">
                    	<div class="small-12 columns">
                        	<img src="<?php echo base_url(); ?>img/profileImg.png" alt="Choose an Image">
                            <div id="browseButton2" class="small-10 small-push-3 columns">
                        		<div class="small button">
                            		<span>choose image</span>
                        			<input id="imageButton" type="file" value="choose image"  onchange="img.src= URL.createObjectURL(this.files[0])">
                           	 	</div>
                        	</div>
                        </div>
                    </div>
                    <div id="nameProg">
                        <div class="row">
                            <div class="small-10 small-centered columns">
                                <input id="first" type="text" placeholder="First Name" value="Caitlin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-10 small-centered columns">
                                <input id="last" type="text" placeholder="Last Name" value="Davidson">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-8 small-centered columns">
                                <input id="program" type="text" placeholder="Program" value="Graphic Design">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-8 columns" id="mainInfo">
                	<div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Contact Information</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="smTitleDivider"></div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Cellphone</label>
                        </div>
                        <div class="small-4 columns">
                        	<input type="text" placeholder="XXX-XXX-XXXX" value="555-555-5555">
                        </div>
                        <div class="small-2 columns">
                        	<label>Student #</label>
                        </div>
                        <div class="small-4 columns">
                        	<input type="text" placeholder="0000000" value="0000000">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Address</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" placeholder="building, floor, room" value="merlin, 3, 610">
                        </div>
                    </div>
                	<div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Social Media</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="smTitleDivider"></div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Facebook</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" placeholder="www.facebook.com" value="www.facebookexample.com">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>Twitter</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" placeholder="www.twitter.com" value="www.twitterexample.com">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label>LinkedIn</label>
                        </div>
                        <div class="small-10 columns">
                        	<input type="text" placeholder="www.linkedin.com" value="www.linkedinexample.com">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>