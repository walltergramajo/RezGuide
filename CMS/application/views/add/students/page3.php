<section>
	<form id="newStudent">
    	<div class="row" id="mainInfo">
            <div class="small-12 columns">
            	<div id="duplicater">
            	<div class="row">
                    <div class="small-12 columns">
                        <h2 class="titles">Requests</h2>
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
                        	<option>Please Select A Type</option>
                            <option>Request 1</option>
                            <option>Request 2</option>
                            <option>Request 3</option>
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
                        <p id="addInput"> Add Request
                        <img src="<?php echo base_url(); ?>img/WA_addR.png" alt="addNotice">
                        </p>
                    </div>
                    
                    <div class="small-2 columns addImg">
                    	<input class="submitButton" type="submit" name="submit" value="Submit">
                    </div>
                </div>
                
            </div>
        </div>
    </form>
    
    <div class="row">
    	<div class="small-7 small-centered columns">
            <ul id="pageNav">
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg2">
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
                    <img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" alt="Page 2">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg3">
                        <img src="<?php echo base_url(); ?>img/WA_dotFull.png" alt="Page 3">
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/add/students/pg3">
                        <img src="<?php echo base_url(); ?>img/WA_rArrow.png" alt="Next Page">
                    </a>
                </li>
            </ul>
    	</div>
    </div>
</section>

<div class="filler"> </div>