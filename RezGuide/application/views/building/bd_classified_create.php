<section class="sectionContainer">
    <div class="mainContent">
        <div class="row">
            <div class="small-4 small-centered columns text-center">
                <p id="noticeTitle" class="header">Create</p>
            </div>
        </div>
        <form method="post" action="<?php echo base_url(); ?>index.php/classifieds/create_classified">
            <div class="row">
                <!-- LEFT SECTION -->
                <div class="small-7 columns">
                    <div class="row">
                        <div class="small-2 columns">
                            <label class="labelInfo">Category</label>
                        </div>
                        <div class="small-4 columns">
                            <select name="category">
                                <option>Category</option>
                                <option value="1">Books</option>
                                <option value="2">Clothing</option>
                                <option value="3">Furniture</option>
                                <option value="4">Electronics</option>
                                <option value="5">Other</option>
                            </select>
                        </div>
                        <div class="small-2 columns">
                            <label class="labelInfo">Type</label>
                        </div>
                        <div class="small-4 columns">
                            <select name="type">
                                <option>Type</option>
                                <option value="buy">Buy</option>
                                <option value="sell">Sell</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-2 columns">
                            <label class="labelInfo"> Title </label>
                        </div>
                        <div class="small-10 columns">
                            <input name="title" class="inputBox" type="text" placeholder="Title"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-2 columns">
                            <label class="labelInfo"> Description </label>
                        </div>
                        <div class="small-10 columns">
                            <textarea name="itemDescription" id="classifiedDescription"></textarea>
                        </div>
                    </div>
                    <div class="classifiedDivider"></div>
                    <div class="row">
                        <div class="small-2 columns">
                            <label class="labelInfo">Email</label>
                        </div>
                        <div class="small-4 columns">
                            <input name="email" type="text" placeholder="Email"/>
                        </div>
                        <div class="small-2 columns">
                            <label class="labelInfo">Phone</label>
                        </div>
                        <div class="small-4 columns">
                            <input name="phone" type="text" placeholder="Phone"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-2 columns">
                            <label class="labelInfo">Student #</label>
                        </div>
                        <div class="small-10 columns">
                            <input name="studentNum" type="text" placeholder="Student Number"/>
                        </div>
                    </div>
                </div>
                <!-- RIGHT SECTION -->
                <div class="small-5 columns createBkg">
                    <div class="row">
                        <div class="small-5 columns button">
                            <span class="imageChoose">Choose Image</span>
                            <input name="img01" type="file">
                        </div>
                        <div class="small-7 columns">
                            <textarea name="img01Description" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-5 columns button">
                            <span class="imageChoose">Choose Image</span>
                            <input name="img02" type="file">
                        </div>
                        <div class="small-7 columns">
                            <textarea name="img02Description" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-5 columns button">
                            <span class="imageChoose">Choose Image</span>
                            <input name="img03" type="file">
                        </div>
                        <div class="small-7 columns">
                            <textarea name="img03Description" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="classifiedDivider2"></div>
                    <div class="row">
                        <div class="small-6 columns" id="classifiedMoneyInput">
                            <label class="labelInfo left" id="dollarSign">$</label>
                            <input name="price" id="moneyInput" type="text"  placeholder="Price">
                        </div>
                        <div class="small-1 columns">
                            <input name="trade" type="checkbox">
                            <input name="free" type="checkbox">
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
        <div class="small-5 small-centered columns">
            <div class="profileNav3">
                <ul class="pagination"> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img id="prevArrow" src="<?php echo base_url(); ?>img/WA_larrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/buy"><img src="<?php echo base_url(); ?>img/WA_dotEmpty.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                    <li><a href="<?php echo base_url(); ?>index.php/classifieds/create"><img src="<?php echo base_url(); ?>img/WA_dotFull.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    <li class="arrow unavailable"><a href="#"><img id="nextArrow" src="<?php echo base_url(); ?>img/WA_rArrow.png" height="20px" width="20px" alt="previous"></a></li>
                </ul>
            </div>
        </div>
    </div> 

</section>