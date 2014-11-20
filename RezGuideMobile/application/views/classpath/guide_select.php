<div data-role="page" id="selectorSection">
	<div class="section">
		<div class="topSection">
			<div class="row"> 
   				<div class="small-2 columns">
          			<a href="#main"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
         		</div>
    			<div class="small-9 small-push-3 columns">
        			<h2 id="selectorHeader" class="topHeader">SELECTOR</h2>
        		</div> 
    		</div> 
		</div>
		<div class="content">
			<div class="row">
    			<div class="small-10 small-centered columns">
        			<h3 class="pleaseSelectMethod">PLEASE SELECT THE<br> METHOD YOU WANT TO USE:</h3>
        		</div>
    		</div>
    		<div class="row">
    			<label for="link1">
    				<input type="radio" name="goTo" id="link1" class="hidden" value="textGuide" data-role="none">
    				<div id="textGuideBg" class="arrowSelection" onClick="highlightLinkPath(this);">
    					<div class="small-2 columns">
    						<img class="methodIcon" src="<?php echo base_url(); ?>img/textGuideIcon.png" alt="textGuideIcon">
        				</div>
        				<div class="small-9 columns">
        					<h3 id="textGuide">TEXT GUIDE</h3>
        				</div> 
    				</div>
    			</label>
    			<label for="link2">
    				<input type="radio" name="goTo" id="link2" class="hidden" value="pathGuide" data-role="none">
    				<div id="pathGuideBg" class="arrowSelection" onClick="highlightLinkPath(this);">
    					<div class="small-2 columns">
    						<img class="methodIcon" src="<?php echo base_url(); ?>img/pathGuideIcon.png" alt="pathGuideIcon">
        				</div>
        				<div class="small-9 columns">
        					<h3 id="pathGuide">PATH GUIDE</h3>
        				</div>
    				</div>
    			</label>
    		</div><!--End Row-->
    		<div class="row">
    			<div class="small-4 small-centered columns">
   	    			<a href="#textGuideSection" id="goButton"><img id="startButtonSelector" src="<?php echo base_url(); ?>img/startButton.png" alt="start button"></a>
        		</div>
    		</div>
		</div><!--Content End-->
		<div class="bottomSection">
			<div class="row">
    			<div class="small-4 columns">
   	    			<a href="#scheduleSection"><img src="<?php echo base_url(); ?>img/schedule.png" alt="schedule"></a> 
            		<h3 class="iconLabel">SCHEDULE</h3>
        		</div>
        		<div class="small-4 columns">
        			<a href="#classroomSection"><img src="<?php echo base_url(); ?>img/classroom.png" alt="classroom"></a>
            		<h3 class="iconLabel">CLASSROOM NUMBER</h3>
        		</div>
        		<div class="small-4 columns">
        			<a href="#3dmapSection"><img src="<?php echo base_url(); ?>img/3dMap.png" alt="3dMap"></a>
            		<h3 class="iconLabel">3D MAP</h3>
        		</div>
    		</div>
		</div><!--End BottomSection-->
	</div><!--End Section-->
</div><!--SelectionSection Page Container End-->