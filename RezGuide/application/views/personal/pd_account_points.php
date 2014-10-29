<section class="mainContent">
    <div class="row">
    	<div class="small-4 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Points</p>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
        	<div class="small-6 columns text-center">
                <!-- <div><?php echo $pointsTotal; ?></div> -->
            	<div class="pointsCircle">
                    <p class="pointsNumber">1</p>
                </div>
            </div>
    	    <div class="small-6 columns">
                <div id="pointsScroll">
                	<dl class="accordion" data-accordion>
                        <?php foreach ($results as $row): ?>
                        	<dd>
                    			<a href="#panel<?php echo $row->points_id ?>">
                                    <div class="row pointsInfo">
                                        <div class="small-8 columns">
                                            <p class="pointsInfraction"><?php echo $row->points_name ?></p>
                                            <!-- <p class="pointsDate">date<?php //echo $row->points_date ?></p> -->
                                        </div>
                                        <div class="small-4 columns">
                                            <div class="smallCircle">
                                             <div class="smallPoints"><?php echo $row->points_number ?></div>
                                            </div>
                                        	<!-- <img class="right pointsMiniImage" src="<?php echo base_url(); ?>img/pointsMini.png" alt="2"> -->
                                        </div>
                                    </div>
                                </a>
                                <div class="pointsDivider">
                                </div>
                    			<div id="panel<?php echo $row->points_id ?>" class="content"><?php echo $row->points_description ?></div>
                  			</dd>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="filler"> </div> 
</section>