<header>
	<div class="row" id="headerRow">
    	<div class="small-3 columns" id="mainLogo">
        	<img src="<?php echo base_url(); ?>img/WA_rgLogoSm.png" alt="RezGuide"> 
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
    	<h1 class="welcomeHeader"><?php echo welcomeMessage(); ?><br>Welcome to your admin page</h1>
    </div>
</div>
<div class="row iconRow">
    <div class="small-12 small-centered columns text-center">
        <div class="row">
            <div class="small-6 columns">
                <div class=" menu">
                    <ul class="menu-icons">
                        <li>
                            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/notice/complaint">
                            <div class="small-4 columns">
                                <img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="<?php echo base_url(); ?>img/CMS_notices.png" alt="Notices">
                            </div>
                            <div class="small-8 columns">
                                <p class="dashboardText text-justify header"> Notices </p>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/students">
                            <div class="small-4 columns">
                                <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="<?php echo base_url(); ?>img/CMS_students.png" alt="Students">
                            </div>
                            <div class="small-8 columns">
                                <p class="dashboardText text-justify header"> Students </p>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/news/upcoming">
                            <div class="small-4 columns">
                                <img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="<?php echo base_url(); ?>img/campus01_Med.png" alt="News">
                            </div>
                            <div class="small-8 columns">
                                <p class="dashboardText text-justify header">Campus </p>
                            </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="small-6 columns">
                <div class=" menu">
                    <ul class="menu-icons">
                        <li>
                            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/building/index">
                            <div class="small-4 columns">
                                <img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="<?php echo base_url(); ?>img/CMS_building.png" alt="Building">
                            </div>
                            <div class="small-8 columns">
                                <p class="dashboardText text-justify header"> Building </p>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/fsu/contests">
                            <div class="small-4 columns">
                                <img onMouseOver="swapDark('4')" onMouseOut="swapLight('4')" class="botImg" src="<?php echo base_url(); ?>img/CMS_fsu.png" alt="FSU">
                            </div>
                            <div class="small-8 columns">
                                <p class="dashboardText text-justify header"> FSU </p>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/general/city">
                            <div class="small-4 columns">
                                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_general.png" alt="General">
                            </div>
                            <div class="small-8 columns">
                                <p class="dashboardText text-justify header"> General </p>
                            </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="filler"> </div>