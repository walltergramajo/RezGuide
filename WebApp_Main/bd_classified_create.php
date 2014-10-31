<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Building Dashboard - Create Listing</title>
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
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="right header">Building Dashboard</h1>
            	<h2 id="titleHeader" class="text-right header">Classifieds</h2>
                </div>
            </div>
            </div>
    </header>
    <section class="mainContent">
    <div class="row" id="listingForm">
    <form>
    
    <div class="small-7 columns">
    	<div class="row inputRow" id="createRow1">
        	<div class="row">
            <div class="small-10 columns text-center">
            	<p id="listingTitleCreate" class="header">Create</p>
            </div>
            </div>
        	<div class="small-2 columns">
                <label class="labelInfo"> Category </label>
            </div>
        	<div class="small-4 columns">
            	<select>
                	<option>Category</option>
                </select>
            </div>
            <div class="small-2 columns">
                <label class="labelInfo"> Type </label>
            </div>
            <div class="small-4 columns">
            	<select>
                	<option>Type</option>
                </select>
            </div>
        </div>
        <div class="row inputRow" id="createRow2">
            <div class="small-2 columns">
                <label class="labelInfo"> Title </label>
                </div>
                <div class="small-10 columns">
    			<input type="text" placeholder="Title"/>
            </div>	
        </div>
    	
        <div class="row inputRow" id="createRow3">
            <div class="small-2 columns">
                <label class="labelInfo"> Description </label>
                </div>
                <div class="small-10 columns">
    			<textarea id="classifiedDescription" spellcheck="true">Description</textarea>
            	</div>	
        </div>
        
         <div class="row inputRow" id="createRow4">
            <div class="small-2 columns">
                <label class="labelInfo"> Email </label>
                </div>
                <div class="small-4 columns">
    			<input type="text" placeholder="Email"/>
            	</div>	
                <div class="small-2 columns">
                <label class="labelInfo"> Phone </label>
                </div>
                <div class="small-4 columns">
    			<input type="text" placeholder="Phone"/>
            	</div>	
        </div>
         <div class="row inputRow" id="createRow5">
            <div class="small-3 columns">
                <label class="labelInfo">Student #</label>
                </div>
                <div class="small-9 small-pull-1 columns">
    			<input type="text" placeholder="651566"/>
            	</div>	
        </div>
    </div>
    <div class="small-5 columns" id="imageInputs">
        <!-- <div class="small-12 columns">
            <div class="row">
                <div class="small-10 push-1 columns text-right">
                    
                    <p id="uploadText">Please choose up to 3 images</p>
                            <div class="small button">
                                <span>choose image</span>
                                    <input id="imageButton" type="file" value="choose image">
                            </div>
                </div>
                <div class="small-3 columns">
                   
                    <img src="img/addphotoMiniIcon.png" class="right" alt="thumbnail">
                    
                    <img src="img/addphotoMiniIcon.png" class="right" alt="thumbnail">
                    
                    <img src="img/addphotoMiniIcon.png" alt="thumbnail">
                    
                </div>
                <div class="small-9 columns" id="uploadImage">
         
                    <img id="profilePic"  src="img/addphotoMainIcon2.png" alt="Uploaded Photo">
                    <a id= "removeImg">
                    <img id="deleteIcon" src="img/removeImg.png" alt="Remove Image" height="40px" width="40px">
                    </a>
                </div>
            </div>
            <div class="row" id="listingRadio"> 
                <div class="small-4 small-push-2 columns" id="classifiedMoneyInput">
                    <label class="labelInfo left" id="dollarSign">$</label>
                    <input id="moneyInput" type="text">
                    
                </div>
                 <div class="small-4 small-push-1 columns">
                    <div class="onoffswitch">
                        
                        <div class="switch small round">
                            <input id="z" name="switch-z" type="radio" checked>
                                <label for="z" onclick=""></label>

                                <input id="z1" name="switch-z" type="radio">
                                 <label for="z1" onclick=""></label>

                            <span></span>
                        </div>
                    </div>
                 </div>
                <div class="small-4 columns text-center">
                    <p id="freeOption">free</p>
                </div>
            </div>
        </div>
    </div> -->
        <div class="row">
            <div class="small-5 columns">
                <div class="small button">
                                <span class="imageChoose">choose image</span>
                                    <input type="file">
                </div>
            </div>
            
            <div class="small-6 columns">
                <textarea placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="small-5 columns">
                <div class="small button">
                                <span class="imageChoose">choose image</span>
                                    <input type="file">
                </div>
            </div>
            
            <div class="small-6 columns">
                <textarea placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="small-5 columns">
                <div class="small button">
                                <span class="imageChoose">choose image</span>
                                    <input type="file">
                </div>
            </div>
            
            <div class="small-6 columns">
                <textarea placeholder="Description"></textarea>
            </div>
        </div>
        
        <div class="row radioButtons" id="listingRadio"> 
                <div class="small-4 small-push-2 columns" id="classifiedMoneyInput">
                    <label class="labelInfo left" id="dollarSign">$</label>
                    <input id="moneyInput" type="text">
                    
                </div>
                 <div class="small-4 small-push-1 columns">
                    <div class="onoffswitch">
                        
                        <div class="switch small round">
                            <input id="z" name="switch-z" type="radio" checked>
                                <label for="z" onclick=""></label>

                                <input id="z1" name="switch-z" type="radio">
                                 <label for="z1" onclick=""></label>

                            <span></span>
                        </div>
                    </div>
                 </div>
                <div class="small-4 columns text-center">
                    <p id="freeOption">free</p>
                </div>
            </div>
     </form>
     </div> 
     <div class="row">
        <div class="small-2 small-centered columns">
            <a href="#"><img src="img/submitButton.png" class="text-center" alt="submit"></a>
        </div>
        </div>
     <div class="row">
            <div class="small-4 small-centered columns">
                <div class="profileNav3">
                    <ul class="pagination"> 
                        <li><a href="bd_classified_buy.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                        <li><a href="bd_classified_sell.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                        <li><a href="bd_classified_buy.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="bd_classified_create.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                         
                        <li class="arrow unavailable"><a href="#"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>  
                    </ul>
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
