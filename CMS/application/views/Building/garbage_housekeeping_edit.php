<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-4 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/building/garbage">
                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-4 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/building/garbage_edit">
            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>


<div id="maintenanceDropdown" class="row">
    <div class="small-4 small-centered columns">
        <select id="maintenance_type" name="maintenance_type">
           <option>Select maintenance type...</option>
           <option value="Garbage">Garbage</option>
           <option value="House">Housekeeping</option>
        </select>
    </div>
</div>



<div class="garbageContainer">
<section id="Garbage" class="hidden">
    	<form>
            <div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-12 columns">
                            <h2 class="directName">Garbage Days</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="lgTitleDivider"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label id="selectDay">Select Day</label>
                        </div>
                        <div class="small-10 columns">
                        	<select>
                            	<option>Select a day</option>
                                <option>Mondays</option>
                                <option>Tuesdays</option>
                                <option>Wednesdays</option>
                                <option>Thursdays</option>
                                <option>Fridays</option>
                                <option>Saturdays</option>
                                <option>Sundays</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <div class="editDay">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                                </a>
                            </div>
                        </div>
                        <div class="small-6 columns">
                            <p class="day">Mondays</p>
                        </div>
                        <div class="small-3 columns">
                            <a href="#">
                                <img class="deleteDay" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="divider"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-3 columns">
                            <div class="editDay">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                                </a>
                            </div>
                        </div>
                        <div class="small-6 columns">
                            <p class="day">Wednesdays</p>
                        </div>
                        <div class="small-3 columns">
                            <a href="#">
                                <img class="deleteDay" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="divider"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label id="message">Message</label>
                        </div>
                        <div class="small-10 columns">
                        	<textarea class="garbageText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet elementum dui eget malesuada. Fusce sodales, magna eu vestibulum porttitor, massa nunc mattis nulla, sed sodales nisl felis sed felis. Cras molestie ante pretium placerat egestas. Vestibulum orci augue, suscipit id fringilla nec, auctor quis enim. Nam turpis nibh, pharetra sed mi at, ornare rhoncus lorem. Suspendisse potenti. Vivamus volutpat fermentum porta. Duis ac turpis nulla. Donec id fermentum arcu, a facilisis lorem. Quisque nibh sem, commodo nec neque eu, scelerisque placerat nulla. Quisque faucibus porttitor tortor, in semper diam lobortis eget. Aliquam at malesuada est.</textarea>
                        </div>
                    </div>
                    
                    <div class="row">
            	<div  class="small-4 columns push-4">
                	<input type="submit" class="submitButton1" value="SUBMIT" alt="Send!">
                </div>
            </div>
                </div>
            </div>
        </form>
    </section>


    <section id="House" class="hidden">
        <form>
            <div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-12 columns">
                            <h2 class="directName">Housekeeping Days</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="lgTitleDivider"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-2 columns">
                            <label id="selectDay">Select Day</label>
                        </div>
                        <div class="small-10 columns">
                            <select>
                                <option>Select a day</option>
                                <option>Mondays</option>
                                <option>Tuesdays</option>
                                <option>Wednesdays</option>
                                <option>Thursdays</option>
                                <option>Fridays</option>
                                <option>Saturdays</option>
                                <option>Sundays</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <div class="editDay">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                                </a>
                            </div>
                        </div>
                        <div class="small-6 columns">
                            <p class="day">Tuesdays</p>
                        </div>
                        <div class="small-3 columns">
                            <a href="#">
                                <img class="deleteDay" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="divider"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-2 columns">
                            <label id="message">Message</label>
                        </div>
                        <div class="small-10 columns">
                            <textarea class="garbageText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet elementum dui eget malesuada. Fusce sodales, magna eu vestibulum porttitor, massa nunc mattis nulla, sed sodales nisl felis sed felis. Cras molestie ante pretium placerat egestas. Vestibulum orci augue, suscipit id fringilla nec, auctor quis enim. Nam turpis nibh, pharetra sed mi at, ornare rhoncus lorem. Suspendisse potenti. Vivamus volutpat fermentum porta. Duis ac turpis nulla. Donec id fermentum arcu, a facilisis lorem. Quisque nibh sem, commodo nec neque eu, scelerisque placerat nulla. Quisque faucibus porttitor tortor, in semper diam lobortis eget. Aliquam at malesuada est.</textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div  class="small-4 columns push-4">
                            <input type="submit" class="submitButton1" value="SUBMIT" alt="Send!">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>