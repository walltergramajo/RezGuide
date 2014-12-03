<div data-role="page" id="main"> <!--Main Page Container Start-->
	<div> <!--Main Start-->
 		<div id="container"><!--Container Start-->
			<div class="topSection">
				<div class="row"> 
        			<div class="small-2 columns">
            			<a href="<?php echo base_url(); ?>index.php/main">
                            <img id="mainMenuButton" src="<?php echo base_url(); ?>img/mainMenuButton.png" alt="mainMenu"> 
            			</a>
            		</div>
    				<div class="small-9 small-push-2 columns">
        				<h2 id="classPath" class="topHeader">CLASS PATH</h2>
       	    		</div> 
   		 		</div> 
			</div>
			<div class="contentClassPath">
				<div class="row">
    				<div class="small-8 small-centered columns">
   	    				<img id="pathImage" src="<?php echo base_url(); ?>img/path.png" alt="path"> 
        			</div>
    			</div>
        		<div class="row">
    				<div class="small-11 small-centered columns">
        				<p class="welcomeHeader">WELCOME TO CLASS PATH</p>
        				<p class="welcomeStartingPoint">PLEASE SELECT STARTING POINT</p>
        				<input class="classInputHome" type="search" name="classroomStart" placeholder="#B2002" id="startPoint">
        			</div>
    			</div>
			</div><!--End contentClassPath-->
			<div class="row">
            	<div class="small-4 small-centered columns">
           	    	<a href="#scheduleSection"><img id="classPathStart2" src="<?php echo base_url(); ?>img/startButton.png" alt="classpath_start"></a> 
                </div>
            </div>	
		</div><!--Container End-->
	</div> <!--Main End-->
</div> <!--Main Page Container End-->

<!-- Schedule -->
<div data-role="page" id="scheduleSection">
    <div class="section">
        <div class="topSection">
            <div class="row"> 
                <div class="small-2 columns">
                    <a href="#main"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
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
                    <a href="#selectorSection"><img class="startButton" src="<?php echo base_url(); ?>img/startButton.png" alt="start button"></a> 
                </div>
            </div>
        </div><!--End contentClassPath-->
        <div class="bottomSection">
            <div class="row">
                <div class="small-4 columns">
                    <div class="currentPage">
                        <a href="#scheduleSection"><img src="<?php echo base_url(); ?>img/schedule.png" alt="schedule"></a> 
                    </div>
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
        </div>
    </div> <!--Schedule Section End-->
</div><!--Schedule Section Page Container End-->

<!-- Classpath Manual Input -->
<div data-role="page" id="classroomSection"><!--ClassroomSection Page Container Start-->
    <div class="section">
        <div class="topSection">
            <div class="row"> 
                <div class="small-2 columns">
                    <a href="#main"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
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
                        <a href="#selectorSection" id="classPathStart"><img id="startButton2" src="<?php echo base_url(); ?>img/startButton.png" alt="start button"></a> 
                    </div>
                </div>
            </div>
        </div><!--End Content ClassPath-->
        <div class="bottomSection">
            <div class="row">
                <div class="small-4 columns">
                    <a href="#scheduleSection"><img src="<?php echo base_url(); ?>img/schedule.png" alt="schedule"></a> 
                    <h3 class="iconLabel">SCHEDULE</h3>
                </div>
                <div class="small-4 columns">
                    <div class="currentPage">
                        <a href="#classroomSection"><img src="<?php echo base_url(); ?>img/classroom.png" alt="classroom"></a>
                    </div>
                    <h3 class="iconLabel">CLASSROOM NUMBER</h3>
                </div>
                <div class="small-4 columns">
                    <a href="#3dmapSection"><img src="<?php echo base_url(); ?>img/3dMap.png" alt="3dMap"></a>
                    <h3 class="iconLabel">3D MAP</h3>
                </div>
            </div>
        </div><!--Bottom Section End-->
    </div><!--Classroom Section End-->
</div><!--ClassroomSection Page Container End-->

<!-- 3D Map -->
<div data-role="page" id="3dmapSection"> <!--3D Map Section Page Container Start-->
    <div class="section">
        <div class="topSection">
            <div class="row"> 
                <div class="small-2 columns">
                    <a href="#main"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
                </div>
                <div class="small-9 small-push-4 columns">
                    <h2 class="topHeader">3D MAP</h2>
                </div> 
            </div> 
        </div>
        <div class="contentClassPath">
            <div class="content3">
                <div class="highlightBox1"></div>
                <div class="highlightBox2"></div>
                <div class="highlightBox3"></div>
                <div class="highlightBox4"></div>
                <div class="highlightBox5"></div>
                <div class="highlightBox6"></div>
                <div class="highlightBox7"></div>
                <div class="highlightBox8"></div>
                <div class="iconScroll">
                    <div class="row">
                        <div class="small-3 columns">
                            <div id='cssmenu'>
                                <ul>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="buildingIcon" class="sideIcons" src="<?php echo base_url(); ?>img/buildingIcon.png" alt="building"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span class="iconLabeL">BUILDING</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="classroomIcon" class="sideIcons" src="<?php echo base_url(); ?>img/classroomIcon.png" alt="classroom2"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span>CLASSROOM</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="labsIcon" class="sideIcons" src="<?php echo base_url(); ?>img/labIcon.png" alt="lab"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span>LABS</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="bathroomIcon" class="sideIcons" src="<?php echo base_url(); ?>img/bathroomIcon.png" alt="washroom"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span>WASHROOM</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="shoppingIcon" class="sideIcons" src="<?php echo base_url(); ?>img/shoppingIcon.png" alt="shopping"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span>SHOPPING</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="restaurantIcon" class="sideIcons" src="<?php echo base_url(); ?>img/restaurantIcon.png" alt="restaurant"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span>RESTAURANT</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="servicesIcon" class="sideIcons" src="<?php echo base_url(); ?>img/servicesIcon.png" alt="services"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span>SERVICES</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="officesIcon" class="sideIcons" src="<?php echo base_url(); ?>img/officesIcon.png" alt="offices"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span>OFFICES</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub last'>
                                        <a href='#'>
                                            <span><img id="transportationIcon" class="sideIcons" src="<?php echo base_url(); ?>img/transportationIcon.png" alt="transportation"></span>
                                        </a>
                                        <ul>
                                            <li class='last'><a href='#'><span class="iconLabeL">TRANSPORTATION</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!--End CSSMENU-->
                        </div>
                    </div>
                </div><!--End IconScroll-->
            </div>
        </div><!--End Content ClassPath-->
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
                    <div class="currentPage">
                        <a href="#3dmapSection"><img src="<?php echo base_url(); ?>img/3dMap.png" alt="3dMap"></a>
                    </div>
                    <h3 class="iconLabel">3D MAP</h3>
                </div>
            </div>
        </div>
    </div><!--End 3dmapSection-->
</div><!--End 3DMapSection Page Container-->

<!-- Classpath Guide Selection -->
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

<!-- Path Guide -->
<div data-role="page" id="pathGuideSection">
    <div class="section">
        <div class="topSection">
            <div class="row"> 
                <div class="small-2 columns">
                    <a href="<?php echo base_url(); ?>index.php/classpath"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
                </div>
                <div class="small-9 small-push-2 columns">
                    <h2 id="pathGuideHeader" class="topHeader">PATH GUIDE</h2>
                </div> 
            </div> 
        </div>

        <div class="content">
            <div class="row">
                <div class="small-9 small-centered columns">
                    <img id="rightArrow" src="<?php echo base_url(); ?>img/rightArrow.png" alt="turn right"> 
                </div>
            </div>
            <div class="row">
                <div class="slideBg">
                    <div class="small-8 small-centered columns">
                        <h3 class="nextStep">slide to next step</h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="bottomSectionDiv1">
            <div class="row">
                <div class="small-4 columns">
                    <a href="#"><img src="<?php echo base_url(); ?>img/photoHelpIcon.png" alt="schedule"></a> 
                    <h3 class="iconLabel">PHOTO HELP</h3>
                </div>
                <div class="small-4 columns">
                    <a href="#textGuideSection"><img src="<?php echo base_url(); ?>img/textGuideIcon.png" alt="classroom"></a>
                    <h3 class="iconLabel">TEXT<br> GUIDE</h3>
                </div>
                <div class="small-4 columns">
                    <a href="<?php echo base_url(); ?>index.php/classpath/start"><img src="<?php echo base_url(); ?>img/startOverIcon.png" alt="3dMap"></a>
                    <h3 class="iconLabel">START<br> OVER</h3>
                </div>
            </div>
        </div>
    </div>
</div><!--End data-page-->

<!-- Text Guide -->
<div data-role="page" id="textGuideSection">
    <div class="section">
        <div class="topSection">
            <div class="row"> 
                <div class="small-2 columns">
                    <a href="#main"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
                </div>
                <div class="small-9 small-push-2 columns">
                    <h2 id="textGuideHeader" class="topHeader">TEXT GUIDE</h2>
                </div> 
            </div> 
        </div>
        <div class="content">
            <div class="row">
                <div class="small-10 small-centered columns">
                    <h3 class="pleaseFollow">YOU ARE GOING TO <span id="destinationRoom"></span><br> FOLLOW THE GUIDE:</h3>
                </div>
            </div>
            <div id="guideScroll">
                <div class="row"></div>
            </div>
        </div><!--Content End-->
        <div class="bottomSection">
            <div class="row">
                <div class="small-4 columns">
                    <a href="<?php echo base_url(); ?>index.php/classpath/schedule"><img src="<?php echo base_url(); ?>img/schedule.png" alt="schedule"></a> 
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
    </div>
</div><!--textGuideSection End-->