<section id="select">
        <div class="row">
            <div class="small-12 columns">
                <h2 id="subTitle">CHOOSE A DIRECTORY TO EDIT</h2>
            </div>
        </div>
        
        <div class="row">
        	<div class="small-12 columns">
            	<div class="divider"></div>
            </div>
        </div>
        <!-- <?php foreach($record as $row): ?> -->
        <div class="row">
        	<div class="small-3 columns">
            	<div class="edit">
                    <a href="<?php echo base_url(); ?>index.php/edit/general/directory/<?php echo $row->directory_id; ?>">
                        <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users"></p>
                <?php echo $row->directory_firstname . " " . $row->directory_lastname; ?>
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
        <?php endforeach; ?>
        <!-- <div class="row">
        	<div class="small-3 columns">
            	<div class="edit">
                    <a href="cms_edit_general_directory.php">
                        <img src="<?php // echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">user2</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php // echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
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
                    <a href="cms_edit_general_directory.php">
                        <img src="<?php // echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">user3</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php // echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
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
                    <a href="cms_edit_general_directory.php">
                        <img src="<?php // echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">user4</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php // echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                </a>
            </div>
        </div> -->
        
    </section>
    <section id="popup">
    	<div class="row">
        	<div class="small-12 columns">
            	<p id="deleteNot">Are you sure you want to permanently delete user *insert username here*?</p>
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