<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-5 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/students/pg2">
                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-3 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/edit/students/balance">
            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>

<section>
	<form action="cms_add_student_pg2.php" method="post" id="newStudent">
    	<div class="row" id="mainInfo">
            <div class="small-12 columns">
            	<div class="row">
                    <div class="small-12 columns">
                        <h2 class="titles">Residence Status</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <div class="lgTitleDivider"></div>
                    </div>
                </div>
                <div class="row">
                	<div class="small-2 columns">
                    	<label>Balance</label>
                    </div>
                    <div class="small-4 columns">
                    	<input type="text" name="balance" placeholder="balance">
                    </div>
                    <div class="small-2 columns">
                    	<label>Points</label>
                    </div>
                    <div class="small-4 columns">
                    	<input type="text" name="points" placeholder="points">
                    </div>
                </div>
                <div id="duplicater">
            	<div class="row">
                    <div class="small-12 columns">
                        <h2 class="titles">Notices</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <div class="lgTitleDivider"></div>
                    </div>
                </div>
                <div class="row">
                	<div class="small-2 columns">
                    	<label>Type</label>
                    </div>
                    <div class="small-3 columns">
                    	<select>
                        	<option>Type</option>
                            <option>Fine</option>
                            <option>Complaint</option>
                            <option>Warning</option>
                        </select>
                    </div>
                    <div class="small-2 columns">
                    	<label>Date Issued</label>
                    </div>
                    <div class="small-5 columns">
                    	<input type="text" placeholder="date issued (mm/dd/yyyy)">
                    </div>
                </div>
                <div class="row">
                	<div class="small-2 columns">
                    	<label>Message</label>
                    </div>
                	<div class="small-10 columns">
                    	<textarea placeholder="Message"></textarea>
                    </div>
                </div>
                </div><!--end duplicater-->
                
                <div class="row">
                    <div class="small-6  columns">
                        <div class="lgTitleDivider2"></div>
                        <p id="addInput"> Add Notice
                        <img src="<?php echo base_url(); ?>img/WA_addR.png" alt="addNotice">
                        </p>
                    </div>
                    
                    <div class="small-2 columns addImg">
                    	<input class="submitButton" type="submit" name="submit" value="Next">
                    </div>
                </div>
                
                <div class="row">
                	<div class="small-8 small-push-4 columns">
                		<div id="content">
                    	</div>
                    </div>
                </div>
                <!--<input class="createButton" type="submit" name="submit" value="Finish">-->
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
                        <img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" alt="Page 1">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg2">
                        <img src="<?php echo base_url(); ?>img/WA_dotFull.png" alt="Page 2">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg3">
                        <img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" alt="Page 3">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg3">
                        <img src="<?php echo base_url(); ?>img/WA_rArrow.png" alt="Next Page">
                    </a>
                </li>
            </ul>
    	</div>
    </div> -->
</section>

<div class="filler"> </div>