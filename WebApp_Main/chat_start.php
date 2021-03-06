<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat - Inquiry</title>
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
            	<h2 id="titleHeaderSolo" class="text-right header">Chat</h2>
                </div>
            </div>
            </div>
    </header>
    <section class="mainContent">
    <div class="row" id="createAccountContent">
    <form>
    <div class="small-4 columns">
    	<div class="small-10 small-push-1 columns">
        	<img id="chatIconLarge" src="img/chatFormIcon.png" alt="Inquiry Picture">
        </div>
    </div>
    <div class="small-8 columns">
    
    <div class="row">
    	<div class="small-12 columns">
    		<label id="chatInformation" class="sectionLabel">YOUR INFORMATION</label>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 accountLine"></div>
    </div>
    <div class="row inputRow">
    	<div class="small-12 columns">
        	<div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Your Name </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="First Name, Last Name"/>
            	</div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Building </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Building"/>
            	</div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                <label class="labelInfo"> Apartment </label>
                </div>
                <div class="small-9 columns">
    			<input type="text" placeholder="Room #"/>
            	</div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
    	<div class="small-11 small-push-1 columns">
    		<label id="inquiryTitle" class="sectionLabel labelPush">INQUIRY</label>
            <div class="accountLine"></div>
        </div>
    </div>
	<div class="row">
    	<div class="small-11 small-push-1 text-center columns">
        	<textarea placeholder="Please write your Inquiry"></textarea>
            
        </div>
    </div>
     <div class="row">
    	<div class="small-12 text-center columns">
       	 	<a href="chat_main.php">
    			<img src="img/send.png" class="text-center" alt="submit">
            </a>
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
