<div data-role="page" id="classroomSection"><!--ClassroomSection Page Container Start-->
	<div class="section">
		<div class="topSection">
			<div class="row"> 
        <div class="small-2 columns">
          <a href="<?php echo base_url(); ?>index.php/classpath"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
    		<div class="small-9 small-push-1 columns">
        	<h2 id="classRoom" class="topHeader">CLASSROOM</h2>
        </div> 
    	</div> 
		</div>
		<div class="contentClassPath">
			<div class="row">
    		<div id="whiteBar"></div>
    	</div>
			<div class="row"> 
    		<div id="pleaseEnter" class="small-10 small-centered columns">
          PLEASE ENTER THE CLASSROOM NUMBER INCLUDING THE BUILDING.
        </div>  
      </div>
    	<div class="row">
    		<div class="small-10 small-centered columns">
        	<div class="destinationInput">
            <h3>START POINT:</h3>
        		<input class="classInput" type="search" name="classroomStart" placeholder="#B2002" id="start">
        		<h3>DESTINATION:</h3>
            <input class="classInput" type="search" name="classroomDestination" placeholder="#B2020" id="end">
        	</div>
        </div>
    	</div>
			<div class="row">
				<div id="buttonWhite">
					<div class="small-4 small-centered columns">
   	    		<a href="<?php echo base_url(); ?>index.php/classpath/guide_select" id="classPathStart"><img id="startButton2" src="<?php echo base_url(); ?>img/startButton.png" alt="start button"></a> 
       		</div>
      	</div>
  		</div>
		</div><!--End Content ClassPath-->
		<div class="bottomSection">
			<div class="row">
    		<div class="small-4 columns">
   	    	<a href="<?php echo base_url(); ?>index.php/classpath/schedule"><img src="<?php echo base_url(); ?>img/schedule.png" alt="schedule"></a> 
          <h3 class="iconLabel">SCHEDULE</h3>
        </div>
        <div class="small-4 columns">
          <div class="currentPage">
        		<a href="<?php echo base_url(); ?>index.php/classpath/start"><img src="<?php echo base_url(); ?>img/classroom.png" alt="classroom"></a>
          </div>
          <h3 class="iconLabel">CLASSROOM NUMBER</h3>
        </div>
        <div class="small-4 columns">
        	<a href="<?php echo base_url(); ?>index.php/classpath/threeDmap"><img src="<?php echo base_url(); ?>img/3dMap.png" alt="3dMap"></a>
          <h3 class="iconLabel">3D MAP</h3>
        </div>
    	</div>
		</div><!--Bottom Section End-->
	</div><!--Classroom Section End-->
</div><!--ClassroomSection Page Container End-->