<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Edit Notice</title>
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
            	<h2 id="titleHeader" class="text-right header">Edit Warning</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section>
    	<form id="warning">
            <div class="row">
                <div class="small-2 columns">
                    <label>Student #</label>
                </div>
                <div class="small-4 columns">
                	<input type="text" placeholder="0000000">
                </div>
                <div class="small-2 columns">
                    <label>Type</label>
                </div>
                <div class="small-4 columns">
                	<select>
                    	<!--<option>Select A Warning Type</option>-->
                        <option>Warning 1</option>
                        <option>Warning 2</option>
                        <option>Warning 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
            	<div class="small-2 columns">
                	<label>mm/dd/yyyy</label>
                </div>
                <div class="small-2 columns">
                	<input type="text" placeholder="mm/dd/yyyy" value="10/15/2014">
                </div>
                <div class="small-2 columns">
                	<label>Building</label>
                </div>
                <div class="small-2 columns">
                	<select>
                    	<!--<option>Select A Building</option>-->
                        <option>Merlin</option>
                        <option>Falcon</option>
                        <option>Paragon</option>
                        <option>Kestrel</option>
                    </select>
                </div>
                <div class="small-2 columns">
                	<label>Room #</label>
                </div>
                <div class="small-2 columns">
                	<input type="number" placeholder="Room #" value="610">
                </div>
            </div>
            <div class="row">
            	<div class="small-2 columns">
                	<label>Content</label>
                </div>
                <div class="small-10 columns">
                	<textarea placeholder="Content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacinia sapien quis arcu interdum sollicitudin. Ut nulla libero, condimentum non est sed, consequat sollicitudin enim. Curabitur interdum consectetur augue. Donec cursus urna ac sapien mattis egestas. Duis sapien lacus, mattis vel quam quis, aliquam blandit leo. Praesent feugiat velit nec facilisis pellentesque. Nullam laoreet lectus nec gravida convallis. Etiam ornare nisi vitae arcu consequat semper nec vel massa. Pellentesque pellentesque elit consectetur sagittis semper.</textarea>
                </div>
            </div>
            <div class="row">
            	<div class="small-4 columns push-4">
                	<input type="submit" class="submitButton1" value="SUBMIT" alt="Send!">
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
