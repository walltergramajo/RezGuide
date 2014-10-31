<section>
    <div class="mainContent">
       <div class="row">
        <div class="small-4 small-centered columns text-center">
            <p id="noticeTitle" class="header">Create</p>
        </div>
    </div>
    
    <form>
    <!-- LEFT SECTION -->
        <div class="row">
        <div class="small-7 columns">
            
            <div class="row">
                <div class="small-2 columns">
                    <label class="labelInfo">Category</label>
                </div>
                <div class="small-4 columns">
                    <select><option>Category</option></select>
                </div>
                <div class="small-2 columns">
                    <label class="labelInfo">Type</label>
                </div>
                <div class="small-4 columns">
                    <select><option>Type</option></select>
                </div>
            </div>
            
            <div class="row">
                <div class="small-2 columns">
                    <label class="labelInfo"> Title </label>
                </div>
                <div class="small-10 columns">
                    <input class="inputBox" type="text" placeholder="Title"/>
                </div>
            </div>
            
            <div class="row">
                <div class="small-2 columns">
                    <label class="labelInfo"> Description </label>
                </div>
                <div class="small-10 columns">
                    <textarea id="classifiedDescription" spellcheck="true"></textarea>
                </div>
            </div>
            
            
            <div class="classifiedDivider"></div>
            
            <div class="row">
                <div class="small-2 columns">
                    <label class="labelInfo">Email</label>
                </div>
                <div class="small-4 columns">
                    <input type="text" placeholder="Email"/>
                </div>
                <div class="small-2 columns">
                    <label class="labelInfo">Phone</label>
                </div>
                <div class="small-4 columns">
                    <input type="text" placeholder="Phone"/>
                </div>
            </div>
            
            <div class="row">
                <div class="small-2 columns">
                    <label class="labelInfo">Student #</label>
                </div>
                <div class="small-10 columns">
                    <input type="text" placeholder="Student Number"/>
                </div>
            </div>
            
        </div>
        
        <!-- RIGHT SECTION -->
        <div class="small-5 columns createBkg">
            
            <div class="row">
                <div class="small-5 columns button">
                    <span class="imageChoose">Choose Image</span>
                    <input type="file">
                </div>
                <div class="small-7 columns">
                    <textarea placeholder="Description"></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="small-5 columns button">
                    <span class="imageChoose">Choose Image</span>
                    <input type="file">
                </div>
                <div class="small-7 columns">
                    <textarea placeholder="Description"></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="small-5 columns button">
                    <span class="imageChoose">Choose Image</span>
                    <input type="file">
                </div>
                <div class="small-7 columns">
                    <textarea placeholder="Description"></textarea>
                </div>
            </div>
            
            <div class="classifiedDivider2"></div>
            
            <div class="row">
                <div class="small-6 columns" id="classifiedMoneyInput">
                    <label class="labelInfo left" id="dollarSign">$</label>
                    <input id="moneyInput" type="text"  placeholder="Price">
                </div>
                <div class="small-1 columns">
                    <input type="checkbox">
                    <input type="checkbox">
                </div>
                
                <div class="small-5 columns">
                    <p id="freeOption">Trade <br> Free</p>
                </div>
            </div>
            </div>
            
            
        </div>
        
        <div class="row">
            <div class="small-2 columns right-align small-push-10">
                <input type="submit" class="submitButton1" value="SEND" alt="Send!">
            </div>
        </div>
        </form>
    </div><!--End mainContent-->
     
    <div class="row">
        <div class="small-5 small-push-4 columns">
            <div class="profileNav3">
                <ul class="pagination"> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img id="prevArrow" src="<?php echo base_url(); ?>img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/create"><img src="<?php echo base_url(); ?>img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li class="arrow unavailable"><a href="#"><img id="nextArrow" src="<?php echo base_url(); ?>img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li>
                </ul>
            </div>
        </div>
    </div> 
     
    <div class="filler"> </div>
</section>