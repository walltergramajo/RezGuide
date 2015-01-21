<section>
	<?php echo $formstart; ?>
    	<div class="row">
        	<div class="small-4 columns">
            	<div class="row">
                	<div class="small-12 columns addImg">
                    	<img src="<?php echo base_url(); ?>img/upload.png" alt="Choose an Image" id="imageButton" type="file" name="image" value="<?php if(!empty($autoimage)){echo $autoimage;} ?>">
                    </div>
                </div>
                <div id="nameProg">
                    <div class="row">
                        <div class="small-10 small-centered columns">
                            <?php echo $firstname; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-10 small-centered columns">
                            <?php echo $lastname; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-8 small-centered columns">
                            <?php echo $program; ?>
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
                        <label>Username</label>
                    </div>
                    <div class="small-4 small-push-1 columns">
                        <?php echo $username; ?>
                    </div>
                    <div class="small-2 small-push-1 columns">
                        <label>Password</label>
                    </div>
                    <div class="small-3 columns">
                        <?php echo $password; ?>
                    </div>
                </div>

                 <div class="row">
                    <div class="small-2 columns">
                        <label>Email</label>
                    </div>
                    <div class="small-4 small-push-1 columns">
                        <?php echo $email ?>
                    </div>
                    <div class="small-2 small-push-1 columns">
                        <label>Student #</label>
                    </div>
                    <div class="small-3 columns">
                        <?php echo $studentnum; ?>
                    </div>
                </div>

                <div class="row">
                	<div class="small-2 columns">
                    	<label>Phone</label>
                    </div>
                    <div class="small-4 small-push-1 columns">
                    	<?php echo $phone; ?>
                    </div>
                    <div class="small-2 small-push-1 columns">
                    	<label>Cell Phone</label>
                    </div>
                    <div class="small-3 columns">
                    	<?php echo $cellphone; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="small-2 columns">
                        <label>Building</label>
                    </div>
                    <div class="small-4 small-push-1 columns">
                        <?php echo $building; ?>
                    </div>
                    <div class="small-2 small-push-1 columns">
                        <label>Room Number</label>
                    </div>
                    <div class="small-3 columns">
                        <?php echo $roomnum; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="small-2 columns">
                        <label>address</label>
                    </div>
                    <div class="small-9 columns">
                        <?php echo $address; ?>
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
                    	<?php echo $facebook; ?>
                    </div>
                </div>
                <div class="row">
                	<div class="small-2 columns">
                    	<label>Twitter</label>
                    </div>
                    <div class="small-10 columns">
                    	<?php echo $twitter; ?>
                    </div>
                </div>
                <div class="row">
                	<div class="small-2 columns">
                    	<label>LinkedIn</label>
                    </div>
                    <div class="small-10 columns">
                    	<?php echo $linkedin; ?>
                    </div>
                <div class="row">
                	<div class="small-3 push-9 columns">
                    	<input class="submitButton" type="submit" name="submit" value="Add">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </form>
    
    <!-- <div class="row">
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
    </div> -->
</section>

<div class="filler"> </div>