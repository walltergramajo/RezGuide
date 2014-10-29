<section>
   <div class="mainContent">
        <div id="editAccountContent" class="row">
            <div class="small-9 small-centered columns">
                    <h3 class="sectionLabel">RESIDENCE STATUS</h3>
                </div>
            </div>
            <div class="row">
                <div class="small-10 small-centered columns">
                    <div class="accountLine">
                    </div>
                </div>
            </div>
            
            <form>
                <div class="row">
                    <div class="small-9 small-centered columns">
                        <div class="small-6 columns">
                            <div class="small-2 small-pull-1 columns">
                                <label class="labelInfo">credit</label>
                            </div>
                            <div class="small-8 small-pull-1 columns">
                            <input type="text" placeholder="credit amount"/>
                            </div>
                         </div>
                         <div class="small-6 small-pull-1 columns">
                            
                                <div class="small-2 columns">
                                    <label class="labelInfo">debt</label>
                                </div>
                                <div class="small-8 small-pull-1 columns">
                                    <input type="text" placeholder="amount owed"/>
                                </div>
                            
                         </div>
                   </div>
                </div>
            </form>
        </div>    <!--End EditAccountContent-->
    </div><!--End mainContent-->
             
	<div class="row">
    	<div class="small-5 small-centered columns">
        	<div class="profileNav">
        		<ul class="pagination"> 
            		<li><a href="<?php echo base_url(); ?>index.php/dashboard/account"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20" width="20" alt="previous"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/account"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20" width="20" alt="emptyPage"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/account/edit_p2"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20" width="20" alt="currentPage"></a></li> 
                	<li class="arrow unavailable"><a href=""><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20" width="20" alt="previous"></a></li> 
             	</ul>
            </div>
        </div>
    </div>

    <div class="filler"> </div>
</section>