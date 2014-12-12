<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-5 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/students/pg2">
                <img onMouseOver="swapDark('4')" onMouseOut="swapLight('4')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-3 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/edit/students/balance">
            <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>


<section>
    	<form id="newStudent">
        	<div class="row" id="mainInfo">
                <div class="small-12 columns">
                	<div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Balance</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="lgTitleDivider"></div>
                        </div>
                    </div>
                    
              
            <div class="row"> 
                <div class="small-7 columns">     
                       <div class="pointsTable"> 
                            <div id="labelsContainer" class="row">
                                <div class="small-5 columns">
                                    <h3 class="pointsTitle">Account Summary</h3>
                                </div>
                            </div>    
                            
                            <div class="row">
                                <div class="small-4 columns">
                                    <p class="titleHere">Balance Forward:</p>
                                </div>
                                <div class="small-3 columns">
                                    $<input id="balanceAmount" type="text">
                                </div>
                                <div class="small-3 columns">
                                    <p class="pointsHere">Limit is 1L per student</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="small-4 columns">
                                    <p class="titleHere">Current Charges:</p>
                                </div>
                                <div class="small-3 columns">
                                    $<input id="balanceAmount" type="text">
                                </div>
                                <div class="small-3 columns">
                                    <p class="pointsHere">Limit is 1L per student</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="small-4 columns">
                                    <p class="titleHere">Total Charges:</p>
                                </div>
                                <div class="small-3 columns">
                                    $<input id="balanceAmount" type="text">
                                </div>
                                <div class="small-3 columns">
                                    <p class="pointsHere">Limit is 1L per student</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="small-4 columns">
                                    <p class="titleHere">Payments:</p>
                                </div>
                                <div class="small-3 columns">
                                    $<input id="balanceAmount" type="text">
                                </div>
                                <div class="small-3 columns">
                                    <p class="pointsHere">Limit is 1L per student</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="small-4 columns">
                                    <p class="titleHere">Refunds:</p>
                                </div>
                                <div class="small-3 columns">
                                    $<input id="balanceAmount" type="text">
                                </div>
                                <div class="small-3 columns">
                                    <p class="pointsHere">Limit is 1L per student</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="divider2"></div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="small-4 columns">
                                    <p class="titleHere">Total Amount Due:</p>
                                </div>
                                <div class="small-3 columns">
                                    $<input id="balanceAmount" type="text">
                                </div>
                                <div class="small-3 columns">
                                    <p class="pointsHere">Limit is 1L per student</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="small-5 columns">
                            <h2 class="addPointsHeader">Add New:</h2>
                            <input class="titleText" type="text" placeholder="Title">
                            <textarea placeholder="Description"></textarea>
                            
                    </div>

            </div>

            <div id="submitRow" class="row">
                <div class="small-2 small-push-9 columns">
                   <input type="submit" class="submitButton" value="Add" alt="Send!">
                </div>
            </div>
                	
                    
                </div>
            </div>
        </form>
    </section>