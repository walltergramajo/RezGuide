<div data-role="page" id="restaurantsCity">
  <div class="section">
    <div class="topSection">
      <div class="row"> 
        <div class="small-2 columns">
          <a href="<?php echo base_url(); ?>index.php/cityguide"><img class="backButton" src="<?php echo base_url(); ?>img/backButton.png" alt="backButton"></a>
        </div>
        <div class="small-9 small-push-1 columns">
          <h2  class="topHeader">CITY GUIDE</h2>
        </div>
      </div> 
    </div> 
  </div>

  <div class="contentNews">
    <div class="row">
      <div class="small-12 small-centered columns">
        <h3 class="requestsSubHeader">RESTAURANTS</h3>
      </div>
    </div>
    <div class="genInfoContent">
      <div class="row">
        <dl class="accordion" data-accordion>
          <?php foreach ($results as $row): ?>
            <dd>
              <a href="#panel<?php echo $row->city_id ?>" onClick="highlightLink(this);"><span class="complaintText"><?php echo $row->city_title ?></span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
              <div id="panel<?php echo $row->city_id ?>" class="content">
                <img class="restaurantLogos" src="<?php echo base_url(); ?>img/<?php echo $row->city_img ?>" alt="bertoldi Logo">
                <p class="dateColor"><?php echo $row->city_hours ?></p>
                <p class="location"><?php echo $row->city_location ?></p>
                <p><?php echo $row->city_description ?></p>
                <a href="<?php echo $row->city_link ?>"><p>More Info</p></a>
              </div>
            </dd>
          <?php endforeach; ?>
          <!-- <dd>
            <a href="#panel86" onClick="highlightLink(this);"><span class="complaintText">Thaifoon Restaurant </span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
            <div id="panel86" class="content">
              <img class="restaurantLogos" src="img/thaifoon.jpg" alt="bertoldi Logo">
              <p class="dateColor">(519) 850-1222 </p>
              <p class="location">120 Dundas Street</p>
              <p>Thaifoon is a destination for business luncheon, pre-theatre &amp; concert events, social gathering, a romantic dinner or a casual night out. <br><br>Sample Thai delicacies made from scratch using diverse authentic &amp; modern styles. Specialties includes Pad Thai, Thai Curry, Peanut Past, Panko-crusted Salmon.</p>
              <a href="http://www.londontourism.ca/Places-To-Eat/Casual-Dining/Thaifoon-Restaurant"><p>More Info</p></a>
            </div>
          </dd>
          <dd>
            <a href="#panel87" onClick="highlightLink(this);"><span class="complaintText">Auberge du Petit Prince</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
            <div id="panel87" class="content">
              <img class="restaurantLogos" src="img/AubergePatio.jpg" alt="bertoldi Logo">
              <p class="dateColor">(519) 434-7124 </p>
              <p class="location">458-460 King Street</p>
              <p>At Auberge du Petit Prince we want our guests to have a unique dining experience like no other in the city. Our new Head Chef Kyle Rose, and Sous Chef Byron Hallett, has developed a myriad of classic French offerings with a modern flare. Our menu is our strongest foot and we lead with it consistently. We update the menu seasonally, and also offer a 3-course price fixed menu year round.</p>
              <a href="http://www.londontourism.ca/Places-To-Eat/Casual-Dining/Auberge-du-Petit-Prince"><p>More Info</p></a>
            </div>
          </dd>
          <dd>
            <a href="#panel89" onClick="highlightLink(this);"><span class="complaintText">The Church Key Bistro-Pub</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
            <div id="panel89" class="content">
              <img class="restaurantLogos" src="img/ChurchKeyInterior.jpg" alt="bertoldi Logo">
              <p class="dateColor">(519) 936-0960  </p>
              <p class="location">2476 Richmond Street</p>
              <p>Warm and comfortable, with a pleasing combination of brick, stone, and wood, The Church Key is an extensively renovated pub in a prominent Richmond Row heritage building. An intimate outdoor courtyard flanks the south side of the building. The Church Key follows in the British tradition of the gastro pub by specializing in traditional food done with gourmet flair. Chef Michael Anglestad, with over 20 years in fine dining, uses seasonal, locally sourced ingredients extensively.</p>
              <a href="http://www.londontourism.ca/Places-To-Eat/Casual-Dining/Bertoldis-Trattoria"><p>More Info</p></a>
            </div>
          </dd> -->
        </dl>
      </div>
    </div> 
  </div>

  <div class="bottomSection">
    <div class="row">
      <div class="small-11 small-centered columns">
        <div class="small-4 columns">
          <div class="currentPage2">
            <a href="<?php echo base_url(); ?>index.php/cityguide"><img src="<?php echo base_url(); ?>img/cityGuideIcon.png" alt="fsuEvents"></a> 
            <h3 class="iconLabel">CITY<br>GUIDE</h3>
          </div>
        </div>
        <div class="small-4 columns">
          <a href="<?php echo base_url(); ?>index.php/info/ltc"><img src="<?php echo base_url(); ?>img/busIcon.png" alt="fsuContests"></a>
          <h3 class="iconLabel">LTC</h3>
        </div>
        <div class="small-4 columns">
          <a href="<?php echo base_url(); ?>index.php/info/directory"><img src="<?php echo base_url(); ?>img/directoryIcon.png" alt="fsuInfo"></a>
          <h3 class="iconLabel">DIRECTORY</h3>
        </div>
      </div>
    </div>
  </div><!--Gen Info City Guide End-->
</div>