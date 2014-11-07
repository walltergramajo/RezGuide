<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Building Housekeeping</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link href="css/cms_styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-3 columns" id="mainLogo">
            	<img src="../img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-9 columns" id="pageTitle">
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="header">Fanshawe Rezguide</h1>
            	<h2 id="titleHeader" class="text-right header">Housekeeping Info</h2>
                </div>
            </div>
        </div>
    </header>
    
    <section>
    	<form id="garbage">
            <div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-12 columns">
                            <h2 class="directName">Garbage Days</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="lgTitleDivider"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label id="selectDay">Select Day</label>
                        </div>
                        <div class="small-10 columns">
                        	<select>
                            	<option>Select a day</option>
                                <option>Mondays</option>
                                <option>Tuesdays</option>
                                <option>Wednesdays</option>
                                <option>Thursdays</option>
                                <option>Fridays</option>
                                <option>Saturdays</option>
                                <option>Sundays</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-3 columns">
                            <div class="editDay">
                                <a href="#">
                                    <img src="../img/edit.png" alt="Edit">
                                </a>
                            </div>
                        </div>
                        <div class="small-6 columns">
                            <p class="day">Tuesdays</p>
                        </div>
                        <div class="small-3 columns">
                            <a href="#">
                                <img class="deleteDay" src="../img/delete.png" alt="Delete">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="divider"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="small-2 columns">
                        	<label id="message">Message</label>
                        </div>
                        <div class="small-10 columns">
                        	<textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet elementum dui eget malesuada. Fusce sodales, magna eu vestibulum porttitor, massa nunc mattis nulla, sed sodales nisl felis sed felis. Cras molestie ante pretium placerat egestas. Vestibulum orci augue, suscipit id fringilla nec, auctor quis enim. Nam turpis nibh, pharetra sed mi at, ornare rhoncus lorem. Suspendisse potenti. Vivamus volutpat fermentum porta. Duis ac turpis nulla. Donec id fermentum arcu, a facilisis lorem. Quisque nibh sem, commodo nec neque eu, scelerisque placerat nulla. Quisque faucibus porttitor tortor, in semper diam lobortis eget. Aliquam at malesuada est.</textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="small-12 columns">
                            <input id="add" type="submit" value=" ">
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
                                <img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" src="../img/homeIcon.png" alt="Home">
                                <p class="menuText header">Home</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_add_main.php">
                                <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" src="../img/addIcon.png" alt="Add">
                                <p class="menuText header">Add</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_edit_main.php">
                                <img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" src="../img/editNavIcon.png" alt="Edit">
                                <p class="menuText header">Edit</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_users_main.php">
                                <img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="../img/usersNavIcon.png" alt="Users">
                                <p class="menuText header">Users</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="includes/caller.php?caller_id=logout">
                                <img onMouseOver="swapDark('4')" onMouseOut="swapLight('4')" class="botImg" src="../img/logoutIcon.png" alt="Logout">
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
