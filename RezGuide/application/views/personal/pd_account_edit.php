<section>
    <div class="mainContent">
        <div class="row" id="editAccountContent">
        	<div class="small-4 columns">
        		<div class="small-12 columns text-center">
            		<img id="profilePicEdit" src="<?php echo base_url(); ?>img/cms-users.png" width="250" alt="Account Picture">
           		</div>
            	<div class="small-12 columns text-center">
            		<h3 class="headerInfo" id="firstName">First Name </h3>
           		</div>
            	<div class="small-12 columns text-center">
            		<h3 class="headerInfo" id="lastName">Last Name </h3>
            	</div>
            	<div class="small-12 columns text-center">
            		<h3 class="headerInfo" id="programName">Program </h3>
            	</div>
        	</div>
        	<div class="small-8 columns">
            	<div class="profileInfo">
        			<div class="row">
            			<div class="small-7 columns">
                			<h3 class="sectionLabel">CONTACT INFORMATION</h3>
                		</div>
                		<div class="small-4 small-push-2 columns">
                			<a href="#"><h4 class="sectionLabel">edit profile</h4></a>
                		</div>
            		</div>
                    <div class="row">
        				<div class="small-12 accountLine"></div>
        			</div>
                    <form>
                    	<div class="row">
                    		<div class="small-2 columns">
                        		<label class="labelInfo">cellphone#</label>
                        	</div>
                            <div class="small-4 small-push-1 columns">
                            	<input type="text" placeholder="Cellphone #" name="cellphone"/>
                            </div>
                            <div class="small-2 small-push-1 columns">
                        		<label class="labelInfo">student#</label>
                        	</div>
                            <div class="small-3 columns">
                            	<input type="text" placeholder="student #" name="studentNum"/>
                            </div>
                    	</div>
                        <div class="row">
                        	<div class="small-3 columns">
                            	<label class="labelInfo">build/floor/room</label>
                            </div>
                            <div class="small-9 columns">
                            	<input type="text" placeholder="build/floor/room" name="room" value="<?php  ?>"/>
                            </div>
                        </div>
                        <div class="row">
            				<div class="small-7 columns">
                				<h3 class="sectionLabel" id="socialMedia">SOCIAL MEDIA</h3>
                			</div>
            			</div>
                    	<div class="row">
        					<div class="small-12 accountLine"></div>
        				</div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label class="labelInfo">facebook</label>
                            </div>
                            <div class="small-9 columns">
                            	<input type="text" placeholder="facebook"/>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label class="labelInfo">twitter</label>
                            </div>
                            <div class="small-9 columns">
                            	<input type="text" placeholder="twitter"/>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label class="labelInfo">linkedIn</label>
                            </div>
                            <div class="small-9 columns">
                            	<input type="text" placeholder="linkedIn"/>
                            </div>
                        </div>
                    </form>
                 </div><!--End Profile Info-->
         	</div>
        </div><!--End Row-->
    </div>

	<div class="row">
    	<div class="small-5 small-centered columns">
        	<div class="profileNav">
        		<ul class="pagination"> 
            		<li class="arrow unavailable"><a href=""><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/account"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/account/edit_p2"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/account/edit_p2"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
             	</ul>
            </div>
        </div>
    </div>
</section>