<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-4 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/building/events">
                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-4 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/building/events">
            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>



<section id="select">
        <div class="row">
            <div class="small-12 columns">
                <h2 id="subTitle">CHOOSE EVENT TO EDIT</h2>
            </div>
        </div>
        
        <div class="row">
        	<div class="small-12 columns">
            	<div class="divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="small-3 columns">
            	<div class="edit">
                    <a href="cms_edit_building_events_event_pg1.html">
                        <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">Event 1</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
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
            	<div class="edit">
                    <a href="cms_edit_building_events_event_pg1.html">
                        <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">Event 2</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
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
            	<div class="edit">
                    <a href="cms_edit_building_events_event_pg1.php">
                        <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">Event 3</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
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
            	<div class="edit">
                    <a href="cms_edit_building_events_event_pg1.php">
                        <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">Event 4</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                </a>
            </div>
        </div>
        
    </section>
    <section id="popup">
    	<div class="row">
        	<div class="small-12 columns">
            	<p id="deleteNot">Are you sure you want to permanently delete event *insert event name here*?</p>
            </div>
        </div>
        <div class="row">
        	<div class="small-12 columns">
            	<ul id="deleteOpt">
                	<li>
                    	<a href="#">
                    		<img src="<?php echo base_url(); ?>img/cancel.png" alt="Cancel Delete">
                        </a>
                    </li>
                    <li>
                    	<a href="#">
                    		<img src="<?php echo base_url(); ?>img/deleteIcon.png" alt="Delete">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>