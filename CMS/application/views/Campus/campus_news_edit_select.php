<section id="select">
        <div class="row">
            <div class="small-10 small-centered columns">
                <h2 id="subTitle">CHOOSE NEWS ITEM TO EDIT</h2>
            </div>
        </div>
        
        <?php foreach($news as $row): ?>
        <div class="row">
        	<div class="small-12 columns">
            	<div class="divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="small-3 columns">
            	<div class="edit">
                    <a href="<?php echo base_url(); ?>index.php/<?php echo $controller_uri; ?>/<?php echo $function_uri; ?>/edit/<?php echo $row->news_id; ?>">
                        <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users"><?php echo $row->news_title; ?></p>
            </div>
            <div class="small-3 columns">
            	<a class="del" href="#" data-record="<?php echo $row->news_id; ?>" data-controller="<?php echo $controller_uri; ?>" data-function="<?php echo $function_uri; ?>">
                	<img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                </a>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- <div class="row">
        	<div class="small-12 columns">
            	<div class="divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="small-3 columns">
            	<div class="edit">
                    <a href="cms_edit_building_events_contest.php">
                        <img src="<?php// echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">Contest 2</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php// echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
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
                    <a href="cms_edit_building_events_contest.php">
                        <img src="<?php// echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">Contest 3</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php// echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
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
                    <a href="cms_edit_building_events_contest.php">
                        <img src="<?php// echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                    </a>
                </div>
            </div>
            <div class="small-6 columns">
            	<p class="users">Contest 4</p>
            </div>
            <div class="small-3 columns">
            	<a href="#">
                	<img class="delete" src="<?php// echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                </a>
            </div>
        </div> -->
        
    </section>