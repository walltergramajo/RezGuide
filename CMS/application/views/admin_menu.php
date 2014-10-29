<header>
	<div class="row" id="headerRow">
    	<div class="small-3 columns" id="mainLogo">
        	<img src="<?php echo base_url(); ?>img/FINAL_LOGO.png" alt="RezGuide"> 
        </div>
        <div class="small-9 columns" id="pageTitle">
        	<div id="headerContainer">
        	<h1 id="titleDirectory" class="header">Fanshawe Rezguide</h1>
        	<h2 id="titleHeader" class="text-right header">Home</h2>
            </div>
        </div>
    </div>
</header>
<div class="row">
	<div class="small-7 small-centered columns">
    	<h1 class="welcomeHeader"><?php echo $greetings; ?> WELCOME</h1>
    </div>
</div>
<div class="row iconRow">
	<div class="small-6 small-centered columns text-center">
    	<div class="row">
        	<div class=" menu">
                <ul class="menu-icons">
                    <li>
                        <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add_main">
                        <div class="small-4 columns">
                            <img src="<?php echo base_url(); ?>img/cms-create.png" onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" alt="Add">
                        </div>
                        <div class="small-8 columns">
                            <p class="dashboardText text-justify header"> Add </p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a class="botAnchor" href="<?php echo base_url(); ?>index.php/edit_main.php">
                        <div class="small-4 columns">
                            <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="<?php echo base_url(); ?>img/cms-edit.png" alt="Edit">
                        </div>
                        <div class="small-8 columns">
                            <p class="dashboardText text-justify header"> Edit </p>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a class="botAnchor" href="<?php echo base_url(); ?>index.php/users_main.php">
                        <div class="small-4 columns">
                            <img id="usersIcon" onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="<?php echo base_url(); ?>img/cms-users.png" alt="Users">
                        </div>
                        <div class="small-8 columns">
                            <p class="dashboardText text-justify header"> Users </p>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
    	</div>
    </div>
</div>
<div class="filler"> </div>