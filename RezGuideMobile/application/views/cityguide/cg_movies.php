<div data-role="page" id="moviesCity">
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
        <h3 class="requestsSubHeader">MOVIES</h3>
      </div>
    </div>
    <div class="genInfoContent">
      <div class="row">
        <dl class="accordion" data-accordion>
          <?php foreach ($results as $row): ?>
            <dd>
              <a href="#panel<?php echo $row->city_id ?>" onClick="highlightLink(this);"><span class="complaintText"><?php echo $row->city_title ?></span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
              <div id="panel<?php echo $row->city_id ?>" class="content">
                <p class="dateColor"><?php echo $row->city_hours ?></p>
                <!-- <p class="time">6:30pm</p> -->
                <p class="location"><?php echo $row->city_location ?></p>
                <p><?php echo $row->city_description ?></p>
                <a href="<?php echo $row->city_link ?>"><p>More Info</p></a>
              </div>
            </dd>
          <?php endforeach; ?>
          <!-- <dd>
            <a href="#panel82" onClick="highlightLink(this);"><span class="complaintText">Gone Girl</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
            <div id="panel82" class="content">
              <p class="dateColor">October 8</p>
              <p class="time">6:30pm</p>
              <p class="location">Rainbow Cinemas (CITI Plaza)</p>
              <p>The October 8th film is Gone Girl. On the occasion of his fifth wedding anniversary, Nick Dunne (Ben Affleck) reports that his beautiful wife has gone missing. Under pressure from the police and a growing media frenzy, Nick's portrait of a blissful union begins to crumble. Soon his lies, deceits and strange behavior have everyone asking the same dark question: Did Nick Dunne kill his wife? </p>
              <a href="http://fsu.ca/calendar.php"><p>More Info</p></a>
            </div>
          </dd>
          <dd>
            <a href="#panel83" onClick="highlightLink(this);"><span class="complaintText">Dracula Untold</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
            <div id="panel83" class="content">
              <p class="dateColor">October 15</p>
              <p class="time">7:00pm</p>
              <p class="location">Rainbow Cinemas (CITI Plaza)</p>
              <p>The October 15th film is Dracula Untold, the origin story of the man who became Dracula.</p>
              <a href="http://fsu.ca/calendar.php"><p>More Info</p></a>
            </div>
          </dd>
          <dd>
            <a href="#panel84" onClick="highlightLink(this);"><span class="complaintText">The Judge</span> <span class="selectionArrowGenInfo"><img src="<?php echo base_url(); ?>img/rightArrowIcon.png" alt="right_arrow"></span></a>
            <div id="panel84" class="content">
              <p class="dateColor">October 22</p>
              <p class="time">6:30pm</p>
              <p class="location">Rainbow Cinemas (CITI Plaza)</p>
              <p>The October 1st film is The Judge. A big-city lawyer returns home after the death of his mother, only to learn that his estranged father, the town's judge, is suspected of murder. He sets out to discover the truth and along the way reconnects with the family he walked away from years before. </p>
              <a href="http://fsu.ca/calendar.php"><p>More Info</p></a>
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