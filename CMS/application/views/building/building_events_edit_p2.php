<section>
        <form id="createUser">
            <div class="row">
                <div class="small-12 columns">
                	<h2 class="directName">Core Information</h2>
                </div>
            </div>
            <div class="row">
            	<div class="small-12 columns">
                	<div class="titleDivider"></div>
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Location</label>
                </div>
                <div class="small-10 columns">
                	<input id="email" type="text" placeholder="Location" value="M2024">
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                	<div class="row">
                    	<div class="small-2 columns">
                        	<label>Start</label>
                        </div>
                        <div class="small-3 columns">
                        	<input id="start" type="text" placeholder="__:__am/pm" value="4:00pm">
                        </div>
                        <div class="small">
                            <div class="small-2 columns">
                                <label>End</label>
                            </div>
                            <div class="small-3 columns">
                                <input type="text" placeholder="__:__am/pm" value="8:30pm">
                            </div>
                        </div>
                        <div class="small-2 columns">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label class="smallLabel">Who</label>
                </div>
                <div class="small-10 columns">
                	<input id="name" type="text" placeholder="Who Can Come" value="Students in the final year of their program">
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                	<h2 class="directName">Price</h2>
                </div>
            </div>
            <div class="row">
            	<div class="small-12 columns">
                	<div class="titleDivider"></div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns">
                	<div class="row">
                    	<div class="small-2 columns">
                        	<label>Students</label>
                        </div>
                        <div class="small-3 columns">
                        	<input id="start" type="text" placeholder="$__.__" value="$2.25">
                        </div>
                        <div class="small">
                            <div class="small-2 columns">
                                <label id="guestLabel">Guests</label>
                            </div>
                            <div class="small-3 columns">
                                <input type="text" placeholder="$__.__" value="N/A">
                            </div>
                        </div>
                        <div class="small-2 columns">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="small-4 columns push-4">
                	<input type="submit" class="submitButton1" value="SUBMIT" alt="Send!">
                </div>
            </div>
        </form>
        <div class="row">
        	<div class="small-5 small-centered columns">
                <ul id="pageNav">
                    <li>
                        <a href="cms_edit_building_events_event_pg1.php">
                            <img src="<?php echo base_url(); ?>img/WA_lArrow.png" alt="Previous Page">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_building_events_event_pg1.php">
                            <img src="<?php echo base_url(); ?>img/unselected.png" alt="Page 1">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_building_events_event_pg2.php">
                            <img src="<?php echo base_url(); ?>img/selected.png" alt="Page 2">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url(); ?>img/WA_rArrow.png" alt="Next Page">
                        </a>
                    </li>
                </ul>
        	</div>
        </div>
    </section>