<div data-role="page" id="profileSection">
    <div class="section">
        <div class="topSection">
            <div class="row"> 
                <div class="small-2 columns">
                    <a href="#personalDashboard"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
                </div>
                <div class="small-9 small-push-2 columns">
                    <h2 id="accountHeader" class="topHeader">ACCOUNT</h2>
                </div> 
            </div> 
        </div>
        <div class="contentNews">
            <div class="row">
                <div class="small-5 small-push-1 columns">
                    <img id="colouredDummy" src="<?php echo base_url(); ?>img/colouredDummyIcon.png" alt="coloured_dummy"> 
                </div>
                <div class="small-7 columns">
                    <div id="profileInfo">
                        <input type="text" class="profileName" placeholder="FIRST NAME" name="first_name" />
                        <input type="text" class="profileName" placeholder="LAST NAME" name="last_name" />
                        <input type="text" id="programHeader" placeholder="PROGRAM" name="program" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-10 small-push-2 columns">
                    <h4 id="contactInfo">CONTACT INFORMATION</h4>
                </div>
            </div>
            <div class="row">
                <div class="small-12 small-pull-1 columns">
                    <div class="greyBar"></div>
                </div>
            </div>
            <div class="infoDiv">
                <div class="row">
                    <div class="small-11 small-push-1 columns">
                        <div>
                            <input type="text" class="cellphone" placeholder="Cellphone#:                    519-777-7777" name="cell_phone"/>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="small-11 small-push-1 columns">
                        <div>
                            <input type="text" class="address" placeholder="Address:               123 Fake St, London" name="address"/>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="row">
                <div class="small-10 small-push-2 columns">
                    <h4 id="socialInfo">SOCIAL MEDIA</h4>
                </div>
            </div>
            <div class="row">
                <div class="small-12 small-pull-1 columns">
                    <div class="greyBar"></div>
                </div>
            </div>
            <div class="infoDiv">
                <div class="row">
                    <div class="small-11 small-push-1 columns">
                        <div class="infoContainerTop">
                            <input type="text" class="facebook" placeholder="Facebook:               www.facebook.com" name="facebook"/>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="small-11 small-push-1 columns">
                        <div class="infoContainer">
                            <input type="text" class="twitter" placeholder="Twitter:                          www.twitter.com" name="twitter"/>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="row">
                <div class="small-4 small-centered columns">
                    <a href="#"><img src="<?php echo base_url(); ?>img/sendButton.png" alt="sendButton" value="submit"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bottomSection">
        <div class="row">
            <div class="small-4 columns">
                <div class="currentPage">
                    <a href="#profileSection"><img src="<?php echo base_url(); ?>img/profileIcon.png" alt="profile"></a> 
                </div>
                <h3 class="iconLabel">PROFILE</h3>
            </div>
            <div class="small-4 columns">
                <a href="#pointsPage"><img src="<?php echo base_url(); ?>img/pointsIcon.png" alt="points"></a>
                <h3 class="iconLabel">POINTS</h3>
            </div>
            <div class="small-4 columns">
                <a href="#accountBalance"><img src="<?php echo base_url(); ?>img/balanceIcon.png" alt="balance"></a>
                <h3 class="iconLabel">BALANCE</h3>
            </div>
        </div>
    </div>
</div>