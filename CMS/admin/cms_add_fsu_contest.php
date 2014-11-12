<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Add FSU Contest</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link href="css/cms_styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/fanFavicon.ico" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-3 columns" id="mainLogo">
            	<img src="../img/WA_rgLogoSm.png" alt="RezGuide"> </div>
            <div class="small-9 columns" id="pageTitle">
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="header">Fanshawe Rezguide</h1>
            	<h2 id="titleHeader" class="text-right header">Add An FSU Contest</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section>
    	<form id="fsuContest">
        	<div class="row">
            	<div id="fsuContest" class="small-4 columns">
                	<div class="row">
                    	<div id="browseButton" class="small-10 small-push-3 columns">
                        	<div class="small button">
                            	<span>choose image</span>
                        			<input id="imageButton" type="file" value="choose image"  onchange="img.src= URL.createObjectURL(this.files[0])">
                            </div>
                        </div>
                    </div>
                	<div class="row">
                    	<div class="small-12 columns">
                        	<img src="../img/fsuImage.png" alt="Image Preview">
                        </div>
                    </div>
                </div>
                <div class="small-8 columns">
                	<div class="coreInfo">
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Title</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Description</label>
                            </div>
                            <div class="small-10 columns">
                                <textarea id="desc" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label>Start</label>
                            </div>
                            <div class="small-4 columns">
                            	<input type="text" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="small-2 columns">
                            	<label>End</label>
                            </div>
                            <div class="small-4 columns">
                            	<input type="text" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Who</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="Who Can Enter">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 columns">
                                <label>Link</label>
                            </div>
                            <div class="small-10 columns">
                                <input type="text" placeholder="www.contestLink.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 columns">
                                <input type="submit" id="add" value=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    
    <div class="filler"> </div>
    <footer>
    	<div class="row text-center">
        	<div class="small-6 small-centered columns">
                <nav class="row">
                    <div class="small-12 columns">
                        <ul id="footerNav">
                            <li>
                                <a class="botAnchor" href="cms_main.php">
                                <img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="../img/CMS_home.png" alt="Home">
                                <p class="menuText header">Home</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_add_main.php">
                                <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="../img/CMS_add.png" alt="Add">
                                <p class="menuText header">Add</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_edit_main.php">
                                <img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="../img/CMS_edit.png" alt="Edit">
                                <p class="menuText header">Edit</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_users_main.php">
                                <img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="../img/CMS_users.png" alt="Users">
                                <p class="menuText header">Users</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="includes/caller.php?caller_id=logout">
                                <img onMouseOver="swapDark('4')" onMouseOut="swapLight('4')" class="botImg" src="../img/CMS_logout.png" alt="Logout">
                                <p class="menuText header">Logout</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
        	</div>
        </div>
    </footer>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="../js/main.js"></script>
  </body>
</html>
