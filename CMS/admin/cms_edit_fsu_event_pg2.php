<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Edit FSU Event</title>
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
            	<h2 id="titleHeader" class="text-right header">Edit FSU Event</h2>
                </div>
            </div>
        </div>
    </header>
    <section>
        <form id="createUser">
        	<div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-12 columns">
                            <h2 class="directName">Core Information</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="titleDivider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-2 columns">
                            <label>Location</label>
                        </div>
                        <div class="small-10 columns">
                            <input id="email" type="text" placeholder="Location" value="The Outback Shack">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-2 columns">
                            <label>Start</label>
                        </div>
                        <div class="small-3 columns">
                            <input type="text" placeholder="__:__am/pm" value="6:00pm">
                        </div>
                        <div class="small">
                            <div class="small-2 columns">
                                <label>End</label>
                            </div>
                            <div class="small-3 columns">
                                <input type="text" placeholder="__:__am/pm" value="10:30pm">
                            </div>
                        </div>
                        <div class="small-2 columns">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-2 columns">
                            <label class="smallLabel">Who</label>
                        </div>
                        <div class="small-10 columns">
                            <input id="name" type="text" placeholder="Who Can Come" value="Persons over 19">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <h2 class="directName">Price</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="titleDivider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="row">
                                <div class="small-2 columns">
                                    <label>Students</label>
                                </div>
                                <div class="small-3 columns">
                                    <input type="text" placeholder="$__.__" value="$2.00">
                                </div>
                                <div class="small">
                                    <div class="small-2 columns">
                                        <label>Guests</label>
                                    </div>
                                    <div class="small-3 columns">
                                        <input type="text" placeholder="$__.__" value="$3.00">
                                    </div>
                                </div>
                                <div class="small-2 columns">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <input id="submit" type="submit" value=" ">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
        	<div class="small-5 small-centered columns">
                <ul id="pageNav">
                    <li>
                        <a href="cms_edit_fsu_event_pg1.php">
                            <img src="../img/prev.png" alt="Previous Page">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_fsu_event_pg1.php">
                            <img src="../img/unselected.png" alt="Page 1">
                        </a>
                    </li>
                    <li>
                        <a href="cms_edit_fsu_event_pg2.php">
                            <img src="../img/selected.png" alt="Page 2">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="../img/next.png" alt="Next Page">
                        </a>
                    </li>
                </ul>
        	</div>
        </div>
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
