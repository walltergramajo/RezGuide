<header class="hide">
    <h1 class="hide"> Login </h1>
</header>
<div id="loginLogo" class="row">
	<div class="small-6 small-centered columns text-center">
    	<img src="<?php echo base_url(); ?>img/WA_rglogoHome.png" alt="RezGuide">
    </div>
</div>
<section id="loginArea">
    <div class="rezguideLogin">
        <div class="row">
        	<div class="large-6 small-centered columns text-center">
                <p id="schoolName" class="header">Fanshawe</p>
            </div>
        </div>
        <div class="row">
        	<div class="large-6 small-centered columns text-center">
           	    <p id="appTitle" class="header">Rezguide</p>
            </div>
        </div>
        <form action="<?php echo base_url(); ?>index.php/login/submit">
            <div class="row">
            	<div class="small-4 small-centered columns text-center">
                    <label class="header">Username</label>
            		<input type="text" name="uname" placeholder="Username" />
                </div>
            </div>
            <div class="row">
            	<div class="small-4 small-centered columns text-center">
                    <label class="header">Password</label>
            		<input type="password" name="pword" placeholder="Password" />
                </div>
            </div>
            <div class="row">
            	<div class="small-2 small-centered columns text-center">
                    <input type="submit" class="login" value="LOGIN" alt="LOGIN!">
                </div>
            </div>
        </form>
    </div>
</section>