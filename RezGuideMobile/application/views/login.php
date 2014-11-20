<div data-role="page" id="logIn">
	<div class="logInContainer">
    	<div id="logoWhiteSpace" class="row">
        	<div class="small-5 small-centered columns">
       	    	<img id="logInLogo" src="img/logInLogo.png" alt="logo"> 
            </div>
        </div>
        <div class="row">
         	<div class="small-8 small-centered columns">
            	<h2 class="loginHeader"><span class="fanshaweSmall">FANSHAWE</span> REZGUIDE</h2>
            </div>
        </div>
        <div class="row">
         	<div class="small-5 small-centered columns">
       	    	<h3 class="pleaseLogIn">PLEASE LOG IN</h3>
            </div>
        </div>
        <form action="<?php echo base_url(); ?>index.php/login/submit">
            <div class="row">
             	<div class="small-8 small-centered columns">
                	<input type="text" data-role="none" name="uname" placeholder="username">
                </div>
            </div>
            <div class="row">
             	<div class="small-8 small-centered columns">
                	<input class="logIn" data-role="none" type="password" name="pword" placeholder="password">
                </div>
            </div>
            <div class="row">
             	<div class="small-4 small-centered columns">
           	    	<!-- <a href="#mainMenu"><img class="logInStart" src="img/largeStartIcon.png" alt="start"></a> -->
                    <button type="submit" value="Start" border="0"><img class="logInStart" src="<?php echo base_url(); ?>img/largeStartIcon.png" alt="start"></button>
                </div>
            </div>
        </form>
        <div class="row">
         	<div class="small-6 small-centered columns">
            	<a href="#"><p class="forgotPassword">FORGOT PASSWORD?</p></a>
            </div>
        </div>
    </div><!--logInContainer End-->
</div><!--logIn Page End-->