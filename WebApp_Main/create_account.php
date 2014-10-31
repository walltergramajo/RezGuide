<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/vendor/modernizr.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" />
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-3 columns" id="mainLogo">
            	<img src="img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-9 columns" id="pageTitle">
            	<div id="headerContainerSolo">
            	<h2 id="titleHeaderSolo" class="text-right header">Create Account</h2>
                </div>
            </div>
            </div>
    </header>
    <secction class="mainContent">
    <div class="row" id="createAccountContent">
    <form>
    <div class="small-4 columns">
    	<div class="small-12 columns text-center">
        	<img id="profilePic2" src="img/profileImg.png" alt="Account Picture">
        </div>
    </div>
    <div class="small-8 columns">
        
   	 	<div class="row inputRow">
            <div class="row">
                <div class="small-12 small-centered columns">
                    <label class="sectionLabel">Basic Information</label>
                </div>
            </div>
            <div class="row">
                <div class="small-12 columns accountLine"></div>
            </div>
    	<div class="small-12 columns">
        	<div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> First Name </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="First Name"/>
            	</div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Last Name </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Last Name"/>
            	</div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Student # </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Student #"/>
            	</div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Program </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Program"/>
            	</div>
            </div>
        </div>
    </div>
    </div>
	<div class="row inputRow">
    	<div class="small-12 columns">
        	<div class="row">
                <div class="small-12 small-centered columns">
                    <label class="sectionLabel labelPush">Social Media</label>
                </div>
            </div>
            <div class="row">
    			<div class="small-12 accountLine"></div>
    		</div>
    		<div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Facebook Link </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Facebook Link"/>
            	</div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Twitter Link </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Twitter Link"/>
            	</div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> LinkedIn </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="LinkedIn"/>
            	</div>
            </div>
            <div class="row">
    			<div class="small-12 accountLine"></div>
    		</div>
        </div>
    </div>
     <div class="row">
    	<div class="small-10 small-centered text-center columns">
    		<img src="img/send.png" class="text-center" alt="submit">
        </div>
    </div>
     
     </form>
     </div>
    <div class="filler"> </div>
    </section>
    <footer>
        <?php
            include('includes/footer.php');
        ?>
    </footer>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/main.js"></script>
  </body>
</html>
