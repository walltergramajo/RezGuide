<section>
    <div class="mainContent">
        <form>
            <div class="row">
                <div class="small-4 small-centered columns text-center">
                    <p id="noticeTitle" class="header">Mediation</p>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-centered columns">
                    <label class="sectionLabel">YOUR INFORMATION</label>
                </div>
            </div>
                <div class="row">
                    <div class="small-8 small-centered columns accountLine"></div>
                </div>
            <div class="row">
                <div class="small-8 small-centered columns">
                    <div class="row">
                        <div class="small-3 columns">
                            <label class="labelInfo"> First, Last Name </label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" placeholder="First, Last Name"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-centered columns">
                    <div class="row">
                        <div class="small-3 columns">
                            <label class="labelInfo">Student Number</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" placeholder="0420655"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roommateDiv" id="duplicater">
                <div class="row">
                    <div class="small-8 small-centered columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <label class="labelInfo"> Roommate Name </label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" placeholder="Roommate First, Last Name"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end duplicater-->
            <div class="row">
                <div class="small-5 small-push-7 columns">
                    <div class="right" id="addRoommate">
                        <a id="addInput">
                            <p id="roommateText" class="labelInfo left">Add A New Roommate</p><img class="addRoommate" src="<?php echo base_url(); ?>img/addRoommate.png" height="25" width="25" alt="Add Roomate">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-push-2 columns">
                    <label class="sectionLabel">Add A Message</label>
                </div>
            </div>
            <div class="row">
                <div class="small-8 small-centered columns accountLine"></div>
            </div>
            <div class="row">
                <div class="small-8 small-centered columns">
                    <div class="row">
                        <div class="small-3 columns">
                            <label class="labelInfo"> Message </label>
                        </div>
                        <div class="small-9 columns">
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" small-6 small-centered columns text-center">
                    <input type="image" src="<?php echo base_url(); ?>img/send.png" alt="Submit!">
                </div>
            </div>
        </form>
     </div>
    <div class="row">
        <div class="small-5 small-push-4 columns">
        	<div class="profileNav2">
        		<ul class="pagination"> 
            		<li><a href="<?php echo base_url(); ?>index.php/dashboard/requests"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20" width="20" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/requests"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20" width="20" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/requests/mediation"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20" width="20" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/dashboard/requests/withdraw"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20" width="20" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/dashboard/requests/withdraw"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20" width="20" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>
</section>