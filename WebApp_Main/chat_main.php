<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat - Main</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="img/favicon.ico" />
    <script src="js/vendor/modernizr.js"></script>
    
    <script src="js/jquery.nicescroll.js"></script>
    
    <script>

	$(document).ready(

    function() {

        $(".chatScroll").niceScroll({cursorcolor:"#518d84",cursorwidth: "10px", cursorborder:"none"}); 
   	 });
	 </script>

  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="large-3 columns" id="mainLogo">
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
   <div class="row"> 
    	<div class="small-9 small-push-1 columns">
        	<div class="chatScroll">
        			<div class="row operatorResponse">
                        <div class="small-4 columns text-center">
                            <img src="img/chatProfilePic.png" class="left" alt="Operator">
                            <p class="chatUsersName">Operator</p>
                        </div>
                        <div class="small-8 columns">
                            <p class="chatText"> Lorem Ipsum noe ist nein volum </p>
                        </div>
                    </div>
                    <div class="row userResponse">
                        <div class="small-8 columns text-right">
                            <p class="chatText"> Lorem Ipsum noe ist nein volum </p>
                        </div>
                        <div class="small-4 columns  text-center">
                        <img src="img/chatUserProfilePic.png" class="right" alt="User Name">
                            <p class="chatUsersName">User Name</p>
                        </div>
                    </div>
                    <div class="row operatorResponse">
                        <div class="small-4 columns  text-center">
                            <img src="img/chatProfilePic.png" class="left" alt="Operator">
                            <p class="chatUsersName">Operator</p>
                        </div>
                        <div class="small-8 columns">
                            <p class="chatText"> Pellentesque dictum nisi in massa tristique, eu tristique orci interdum. Morbi blandit auctor justo, id faucibus purus luctus mattis.</p>
                        </div>
                    </div>
                    <div class="row userResponse">
                        <div class="small-9 columns text-right">
                            <p class="chatText"> Sed placerat, diam eget aliquam viverra, sapien justo. </p>
                        </div>
                        <div class="small-3 columns text-center">
                        <img src="img/chatUserProfilePic.png" class="right" alt="User Name">
                            <p class="chatUsersName">User Name</p>
                        </div>
                    </div>
                    <div class="row operatorResponse">
                        <div class="small-4 columns text-center">
                            <img src="img/chatProfilePic.png" class="left" alt="Operator">
                            <p class="chatUsersName">Operator</p>
                        </div>
                        <div class="small-8 columns">
                            <p class="chatText"> Lorem Ipsum noe ist nein volum </p>
                        </div>
                    </div>
                    <div class="row userResponse">
                        <div class="small-8 columns text-right">
                            <p class="chatText"> Lorem Ipsum noe ist nein volum </p>
                        </div>
                        <div class="small-4 columns  text-center">
                        <img src="img/chatUserProfilePic.png" class="right" alt="User Name">
                            <p class="chatUsersName">User Name</p>
                        </div>
                    </div>
                    <div class="row operatorResponse">
                        <div class="small-4 columns  text-center">
                            <img src="img/chatProfilePic.png" class="left" alt="Operator">
                            <p class="chatUsersName">Operator</p>
                        </div>
                        <div class="small-8 columns">
                            <p class="chatText"> Pellentesque dictum nisi in massa tristique, eu tristique orci interdum. Morbi blandit auctor justo, id faucibus purus luctus mattis.</p>
                        </div>
                    </div>
                    <div class="row userResponse">
                        <div class="small-9 columns text-right">
                            <p class="chatText"> Sed placerat, diam eget aliquam viverra, sapien justo. </p>
                        </div>
                        <div class="small-3 columns text-center">
                        <img src="img/chatUserProfilePic.png" class="right" alt="User Name">
                            <p class="chatUsersName">User Name</p>
                        </div>
                    </div>
        	</div><!--End chatScroll-->
            		<div class="row" id="inputArea">
                    	<form>
                    	<div class="small-9 small-push-1 columns">
                        <textarea>Your Text Here!</textarea>
                        </div>
                        <div class="small-2 columns">
                        	<a>
                        		<img id="chatSend" src="img/chatSendButton.png" alt="Send!">
                        	</a>
                        </div>
                        </form>
                    </div>
    	</div>
        
        			<div class="small-2 columns text-center" id="chatSideOptions">
            	<div class="row">
                	<div class="small-12 columns">
                    <a>
                    	<img src="img/addChatIcon.png" alt="Add Image">
                        <p class="iconTextChat header2">Add A Photo <br> or a file </p>
                    </a>
                    </div>
                </div>
                <div class="row">
                	<div class="small-12 columns">
                    	<a>
                    	<img src="img/saveChatIcon.png" alt="Save Chat">
                        <p class="iconTextChat header2">Save Chat </p>
                        </a>
                    </div>
                </div>
                <div class="row">
                	<div class="small-12 columns">
                    	<a href="mainMenu.html">
                    	<img src="img/logoutChatIcon.png" alt="Save Chat">
                        <p class="iconTextChat header2">Logout of<br> Chat </p>
                        </a>
                    </div>
                </div>
            </div>
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
