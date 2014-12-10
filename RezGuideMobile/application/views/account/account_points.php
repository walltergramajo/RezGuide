<div data-role="page" id="pointsPage">
  <div class="section">
    <div class="topSection">
		  <div class="row"> 
    		<div class="small-2 columns">
          <a href="<?php echo base_url(); ?>index.php/dashboard"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
        <div class="small-9 small-push-2 columns">
        	<h2 id="accountPointsHeader" class="topHeader">ACCOUNT</h2>
        </div> 
      </div> 
    </div>
  </div>
  <div class="contentDashboard">
    <div class="row">
      <div class="small-7 small-centered columns">
        <h2 id="pointsHeader">POINTS</h2>
      </div>
    </div>
    <div class="row">
      <div id="pointsBg">
        <div class="small-12 columns">
          <div class="small-4 small-centered columns">
   	    		<div class="pointsCircle">
              <p class="pointsValue">5</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php foreach ($results as $row): ?>
    <div class="pointsContainer">
      <div class="pointsSelectionArrow pointsViolation">
        <div class="row">
          <div class="sideSelectionBar">
    		    <div class="selectionDiv" onClick="highlightLinkPoints(this);">
        		  <div class="small-8 columns">
                <div class="violationInfo">
        				  <h3 class="pointsTitle"><?php echo $row->points_name ?></h3>
            			<!-- <p class="pointsDate">DECEMBER 1, 2013</p> -->
            		</div>
        		  </div>
       			  <div class="small-2 columns">
                <div class="pointsCircleSmall">
                  <p class="pointsValueSmall"><?php echo $row->points_number ?></p>
                </div>
        		  </div>
            </div>
          </div>    
        </div>
      </div>
      <?php endforeach; ?>
      <!-- <div class="pointsSelectionArrow pointsViolation">
        <div class="row">
          <div class="sideSelectionBar">
            <div class="selectionDiv" onClick="highlightLinkPoints(this);">
              <div class="small-8 columns">
                <div class="violationInfo">
                  <h3 class="pointsTitle">UNDERAGE DRINKING</h3>
                  <p class="pointsDate">DECEMBER 1, 2013</p>
                </div>
              </div>
              <div class="small-2 columns">
                <div class="pointsCircleSmall">
                  <p class="pointsValueSmall">3</p>
                </div>
              </div>
            </div>
          </div>    
        </div>
      </div> -->
    </div>
  </div>

  <div class="bottomSection">
    <div class="row">
    	<div class="small-4 columns">
   	    <a href="<?php echo base_url(); ?>index.php/account/profile"><img src="<?php echo base_url(); ?>img/profileIcon.png" alt="profile"></a> 
        <h3 class="iconLabel">PROFILE</h3>
      </div>
      <div class="small-4 columns">
        <div class="currentPage">
        	<a href="<?php echo base_url(); ?>index.php/account/points"><img src="<?php echo base_url(); ?>img/pointsIcon.png" alt="points"></a>
        </div>
        <h3 class="iconLabel">POINTS</h3>
      </div>
      <div class="small-4 columns">
        <a href="<?php echo base_url(); ?>index.php/account/balance"><img src="<?php echo base_url(); ?>img/balanceIcon.png" alt="balance"></a>
        <h3 class="iconLabel">BALANCE</h3>
      </div>
    </div>
  </div>    
</div>