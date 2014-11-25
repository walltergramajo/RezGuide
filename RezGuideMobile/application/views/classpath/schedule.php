<div data-role="page" id="scheduleSection">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
        <div class="small-2 columns">
          <a href="<?php echo base_url(); ?>index.php/classpath"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
    		<div class="small-9 small-push-3 columns">
        	<h2 class="topHeader">SCHEDULE</h2>
       	</div> 
    	</div> 
		</div>
		<div class="contentClassPath">
			<div class="row">
    		<div id="days">
       		<div class="small-push-1">
        		<div class="small-1 column"></div>
        		<div class="small-2 columns">
       	    	<a href="#" data-dropdown="drop2"><img id ="monday"  src="<?php echo base_url(); ?>img/days_M.png" alt="Monday"></a>
              <div id="drop2" data-dropdown-content class="small f-dropdown content">
                <div class="dailyClasses">
  								<p id="paraGraph" onClick="highlightLinkSchedule(this);">ARTS - Arts and Crafts</p>
  								<p onClick="highlightLinkSchedule(this);">MATH - Multiplication Table</p>
  								<p onClick="highlightLinkSchedule(this);">DRIV - Driver G1 Training</p>
                </div>
							</div>
            </div>
           	<div class="small-2 columns">
            	<a href="#" data-dropdown="drop3"><img src="<?php echo base_url(); ?>img/days_T.png" alt="Tuesday"></a>
              <div class="eventContainer">
                <div id="drop3" data-dropdown-content class="small f-dropdown content">
                  <div class="dailyClasses">
  									<p onClick="highlightLinkSchedule(this);">PSYC - Culture of Addiction</p>
  									<p onClick="highlightLinkSchedule(this);">MATH - Algebra</p>
  									<p onClick="highlightLinkSchedule(this);">DRIV - Parallel Parking</p>
                  </div>
								</div>
							</div>
            </div>
            <div class="small-2 columns">	
            	<a href="#" data-dropdown="drop4"><img src="<?php echo base_url(); ?>img/days_W.png" alt="Wednesday"></a>
              <div id="drop4" data-dropdown-content class="small f-dropdown content">
                <div class="dailyClasses">
 						 			<p onClick="highlightLinkSchedule(this);">ARTS - Pottery Level 1</p>
 						 			<p onClick="highlightLinkSchedule(this);">MATH - Mathematics Fundamentals</p>
  								<p onClick="highlightLinkSchedule(this);">DRIV - Driver G2 Training</p>
                </div>
              </div>
            </div>
            <div class="small-2 columns">
            	<a href="#" data-dropdown="drop5"><img src="<?php echo base_url(); ?>img/days_T.png" alt="Thursday"></a>
              <div id="drop5" data-dropdown-content class="f-dropdown content">
                <div class="dailyClasses">
                	<p onClick="highlightLinkSchedule(this);">PHYS - Core Training</p>
  								<p onClick="highlightLinkSchedule(this);">MATH - Mathematics Fundamentals</p>
 					    		<p onClick="highlightLinkSchedule(this);">DRIV - Driver G2 Training</p>
                </div>
              </div>
            </div>
            <div class="small-2 columns">
            	<a href="#" data-dropdown="drop6"><img src="<?php echo base_url(); ?>img/days_F.png" alt="Friday"></a>
              <div id="drop6" data-dropdown-content class="f-dropdown content">
                <div class="dailyClasses">
                	<p onClick="highlightLinkSchedule(this);">HIST - Civil War</p>
  								<p onClick="highlightLinkSchedule(this);">GEOG - Minerals and Rocks</p>
  								<p onClick="highlightLinkSchedule(this);">AUTO - Tire Changing</p>
                </div>
              </div>
            </div>
            <div class="small-1 column"></div>
         	</div>
       	</div>
   		</div>
    	<div class="row">
    		<div class="small-4 small-centered columns">
   	    	<a href="<?php echo base_url(); ?>index.php/classpath/guide_select"><img class="startButton" src="<?php echo base_url(); ?>img/startButton.png" alt="start button"></a> 
        </div>
   		</div>
		</div><!--End contentClassPath-->
		<div class="bottomSection">
			<div class="row">
    		<div class="small-4 columns">
        	<div class="currentPage">
   	    		<a href="<?php echo base_url(); ?>index.php/classpath/schedule"><img src="<?php echo base_url(); ?>img/schedule.png" alt="schedule"></a> 
          </div>
          <h3 class="iconLabel">SCHEDULE</h3>
        </div>
        <div class="small-4 columns">
        	<a href="<?php echo base_url(); ?>index.php/classpath/begin_classpath"><img src="<?php echo base_url(); ?>img/classroom.png" alt="classroom"></a>
          <h3 class="iconLabel">CLASSROOM NUMBER</h3>
        </div>
        <div class="small-4 columns">
          <a href="<?php echo base_url(); ?>index.php/classpath/threeDmap"><img src="<?php echo base_url(); ?>img/3dMap.png" alt="3dMap"></a>
          <h3 class="iconLabel">3D MAP</h3>
        </div>
    	</div>
		</div>
	</div> <!--Schedule Section End-->
</div><!--Schedule Section Page Container End-->