<section>
	<form action="cms_add_student_pg2.php" method="post" id="newStudent">
    	<div class="row">
        	<div class="small-4 columns">
            	<div class="row">
                	<div class="small-12 columns addImg">
                    	<img src="<?php echo base_url(); ?>img/CMS_pickImg.png" alt="Choose an Image">
                        <div id="browseButton2" class="small-10 small-push-3 columns">
                    		<div class="small button">
                        		<span>choose image</span>
                    			<input id="imageButton" type="file" name="image" value="<?php if(!empty($autoimage)){echo $autoimage;} ?>">
                       	 	</div>
                    	</div>
                    </div>
                </div>
                <div id="nameProg">
                    <div class="row">
                        <div class="small-10 small-centered columns">
                            <input id="first" type="text" name="firstname" placeholder="First Name" value="<?php if(!empty($autofirstname)){echo $autofirstname;} ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-10 small-centered columns">
                            <input id="last" type="text" name="lastname" placeholder="Last Name" value="<?php if(!empty($autolastname)){echo $autolastname;} ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-8 small-centered columns">
                            <input id="program" type="text" name="program" placeholder="Program" value="<?php if(!empty($autoprogram)){echo $autoprogram;} ?>">
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
                    <div class="small-4 small-push-1 columns">
                    	<input type="text" name="phone" placeholder="cellphone#" value="<?php if(!empty($autophone)){echo $autophone;} ?>">
                    </div>
                    <div class="small-2 small-push-1 columns">
                    	<label>Student #</label>
                    </div>
                    <div class="small-3 columns">
                    	<input type="text" name="number" nameplaceholder="student#" value="<?php if(!empty($autonumber)){echo $autonumber;} ?>">
                    </div>
                </div>
                <div class="row">
                	<div class="small-2 columns">
                    	<label>build/floor/room</label>
                    </div>
                    <div class="small-9 columns">
                    	<input type="text" name="address" placeholder="building/floor/room" value="<?php if(!empty($autoaddress)){echo $autoaddress;} ?>">
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
                    	<input type="text" name="fb" placeholder="www.facebook.com" >
                    </div>
                </div>
                <div class="row">
                	<div class="small-2 columns">
                    	<label>Twitter</label>
                    </div>
                    <div class="small-10 columns">
                    	<input type="text" name="tw" placeholder="www.twitter.com">
                    </div>
                </div>
                <div class="row">
                	<div class="small-2 columns">
                    	<label>LinkedIn</label>
                    </div>
                    <div class="small-10 columns">
                    	<input type="text" name="ln" placeholder="www.linkedin.com">
                    </div>
                <div class="row">
                	<div class="small-3 push-9 columns">
                    	<input class="submitButton" type="submit" name="submit" value="Next">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </form>
    
    <div class="row">
    	<div class="small-7 small-centered columns">
            <ul id="pageNav">
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students">
                        <img src="<?php echo base_url(); ?>img/WA_lArrow.png" alt="Previous Page">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students">
                        <img src="<?php echo base_url(); ?>img/WA_dotFull.png" alt="Page 1">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg2">
                        <img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" alt="Page 2">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg3">
                    <img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" alt="Page 3">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg2">
                        <img src="<?php echo base_url(); ?>img/WA_rArrow.png" alt="Next Page">
                    </a>
                </li>
            </ul>
    	</div>
    </div>
</section>

<div class="filler"> </div>