<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notices - Complaints</title>
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
            	<h2 id="titleHeaderSolo" class="text-right header">Notices</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <form>
    <div class="row">
    	<div class="small-5 small-centered columns text-center">
    		<p id="noticeTitle" class="header">File A Complaint</p>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 columns">
    		<label class="sectionLabel">Your Information</label>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 accountLine"></div>
    </div>
    <div class="row">
    	<div class="small-10 small-centered columns">
        <div class="row">
            <div class="small-3 columns">
                <label class="labelInfo"> Full Name </label>
            </div>
            <div class="small-9 columns">
                <input type="text" placeholder="First Name, Last Name"/>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
    	<div class="small-10 small-centered columns">
        <div class="row">
            <div class="small-3 columns">
                <label class="labelInfo"> Student Number </label>
            </div>
            <div class="small-9 columns">
                <input type="text" placeholder="Student Number"/>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 small-centered columns">
    		<label class=" sectionLabel">Add a Message</label>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 accountLine"></div>
    </div>
     <div class="row">
    	<div class="small-10 small-centered columns">
        <div class="row">
            <div class="small-3 columns">
                <label class="labelInfo"> Message </label>
            </div>
            <div class="small-9 columns">
                <textarea> </textarea>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
		<div class=" small-10 small-centered columns text-center">
        	<input type="image" src="img/send.png" name="Send" alt="Send">
		</div>
	</div>
     
     
     </form>
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
