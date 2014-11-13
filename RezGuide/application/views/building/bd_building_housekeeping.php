<section>
    <div class="mainContent">
        <div class="row" id="buildingRow">
            <div class="small-11 small-centered columns">
                <div class="small-2 small-push-1 columns">
                    <?php foreach ($results as $row): ?>
                        <div>
                            <p><?php echo $row->gbhk_day ?></p>
                        </div>
                    <?php endforeach; ?>
                    <!-- <img src="<?php echo base_url(); ?>img/tuesday.png" id="cleaningImage" class="left" alt="Cleaning Day"> -->
                </div>
                <div class="small-8 columns">    
                    <p id="noticeTitle" class="header text-center">Housekeeping</p>
                    <div class="buildingLine"> </div>
                    <p class="text-center" id="buildingContent"> Mauris scelerisque vitae erat non vestibulum. Mauris at lobortis felis, in convallis eros. Fusce eget pellentesque quam. Cras in enim laoreet, pulvinar eros id, imperdiet neque. Cum sociis natoque penatibus et magnis dis parturient montes. </p>
                    <div class="buildingLine"> </div>
                </div>
            </div>
        </div>
    </div><!--End mainContent-->
    
    <div class="row">
    	<div class="small-5 small-centered columns">
        	<div class="profileNav3">
        		<ul class="pagination">
            		<li><a href="<?php echo base_url(); ?>index.php/building/garbage"><img id="prevArrow" src="<?php echo base_url(); ?>img/WA_larrow.png" height="20px" width="20px" alt="previous"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/building/garbage"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="currentPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/building/housekeeping"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/building/rules"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/building/rules"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li>
             	</ul>
            </div>
        </div>
    </div>
</section>