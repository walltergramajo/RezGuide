<section>
    <div class="mainContent">
        <div class="row" id="buildingRow">
            <div class="small-11 small-centered columns">
                <div class="small-4 small-push-1 columns">
                    <?php foreach ($results as $row): ?>
                        <div>
                            <p><?php echo $row->gbhk_day ?></p>
                        </div>
                    <?php endforeach; ?>
                    <!-- <img src="<?php echo base_url(); ?>img/garbageDays.png" id="garbageImage" alt="Cleaning Day"> -->
                </div>
                <div class="small-8 columns">    
                    <p id="noticeTitle" class="header text-center">Garbage</p>
                    <div class="buildingLine"> </div>
                    <p class="text-center" id="buildingContent"> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas lectus lorem, rutrum sit amet iaculis nec, porta quis nisl. Pellentesque vulputate elit nec turpis hendrerit tempor. Etiam eu viverra velit. Integer urna arcu, tincidunt non sem at, tincidunt ornare nisl. </p>
                    <div class="buildingLine"> </div>
                </div>
            </div>
        </div>
    </div>    
        
        <div class="row">
        	<div class="small-5 small-push-4 columns">
            	<div class="profileNav3">
            		<ul class="pagination">
                		<li><a href="<?php echo base_url(); ?>index.php/building"><img id="prevArrow" src="<?php echo base_url(); ?>img/WA_larrow.png" height="20px" width="20px" alt="previous"></a></li>
                    	<li><a href="<?php echo base_url(); ?>index.php/building/garbage"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="currentPage"></a></li>
                    	<li><a href="<?php echo base_url(); ?>index.php/building/housekeeping"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/building/rules"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	<li><a href="<?php echo base_url(); ?>index.php/building/housekeeping"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li>
                 	</ul>
                </div>
            </div>
        </div>
</section>