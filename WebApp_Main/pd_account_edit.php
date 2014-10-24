<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit User Account</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/vendor/modernizr.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" />
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-2 columns" id="mainLogo">
            	<img src="img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-10 columns" id="pageTitle">
            	<div id="headerContainer">
            		<h1 id="titleDirectory" class="right header"><span class="kern">P</span><span class="kern">e</span><span class="kern">r</span><span class="kern">s</span><span class="kern">o</span><span class="kern">n</span><span class="kern">a</span><span class="kern">l</span> <span class="kern">D</span>a<span class="kern">s</span><span class="kern">h</span><span class="kern">b</span><span class="kern">o</span><span class="kern">a</span><span class="kern">r</span><span class="kern">d</span></h1>
            		<h2 id="titleHeader" class="text-right header">YOUR PROFILE</h2>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="mainContent">
        <div class="row" id="editAccountContent">
        	<div class="small-4 columns">
        		<div class="small-12 columns text-center">
            		<img id="profilePicEdit" src="img/cms-users.png" width="250" alt="Account Picture">
           		</div>
            	<div class="small-12 columns text-center">
            		<h3 class="headerInfo" id="firstName">First Name </h3>
           		</div>
            	<div class="small-12 columns text-center">
            		<h3 class="headerInfo" id="lastName">Last Name </h3>
            	</div>
            	<div class="small-12 columns text-center">
            		<h3 class="headerInfo" id="programName">Program </h3>
            	</div>
        	</div>
        	<div class="small-8 columns">
            	<div class="profileInfo">
        			<div class="row">
            			<div class="small-7 columns">
                			<h3 class="sectionLabel">CONTACT INFORMATION</h3>
                		</div>
                		<div class="small-4 small-push-2 columns">
                			<a href="#"><h4 class="sectionLabel">edit profile</h4></a>
                		</div>
            		</div>
                    <div class="row">
        				<div class="small-12 accountLine"></div>
        			</div>
                    <form>
                    	<div class="row">
                    		<div class="small-2 columns">
                        		<label class="labelInfo">cellphone#</label>
                        	</div>
                            <div class="small-4 small-push-1 columns">
                            	<input type="text" placeholder="Cellphone #"/>
                            </div>
                            <div class="small-2 small-push-1 columns">
                        		<label class="labelInfo">student#</label>
                        	</div>
                            <div class="small-3 columns">
                            	<input type="text" placeholder="student #"/>
                            </div>
                    	</div>
                        <div class="row">
                        	<div class="small-3 columns">
                            	<label class="labelInfo">build/floor/room</label>
                            </div>
                            <div class="small-9 columns">
                            	<input type="text" placeholder="build/floor/room"/>
                            </div>
                        </div>
                        <div class="row">
            				<div class="small-7 columns">
                				<h3 class="sectionLabel" id="socialMedia">SOCIAL MEDIA</h3>
                			</div>
                			
            			</div>
                    	<div class="row">
        					<div class="small-12 accountLine"></div>
        				</div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label class="labelInfo">facebook</label>
                            </div>
                            <div class="small-9 columns">
                            	<input type="text" placeholder="facebook"/>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label class="labelInfo">twitter</label>
                            </div>
                            <div class="small-9 columns">
                            	<input type="text" placeholder="twitter"/>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="small-2 columns">
                            	<label class="labelInfo">linkedIn</label>
                            </div>
                            <div class="small-9 columns">
                            	<input type="text" placeholder="linkedIn"/>
                            </div>
                        </div>
                    </form>
                 </div><!--End Profile Info-->
         	</div>
        </div><!--End Row--> 
        </div><!--End MainContent-->

        <div class="row">
            <div class="small-5 small-centered columns">
                <div class="profileNav">
                    <ul class="pagination"> 
                        <li class="arrow unavailable"><a href=""><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                        <li><a href="pd_account_edit.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="currentPage"></a></li> 
                        <li><a href="pd_account_edit_p2.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="pd_account_edit_p2.php"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    </ul>
                </div>
            </div>
        </div>
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
