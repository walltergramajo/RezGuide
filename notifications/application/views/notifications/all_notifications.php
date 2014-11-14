<section>
    <div class="mainContent">
        <div class="row">
            <div class="small-10 small-centered columns text-center">
                <p id="noticeTitle" class="header">New Notifications</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
                <div class="accordionScroll">
                    <dl class="accordion" data-accordion>
                        <?php $allAlerts = $this->fetchnotifications->getnotifications("*", 0); ?>
                        <?php foreach ($allAlerts as $row): ?>
                            <dd class="accordionBottom">
                                <a href="#panel<?php echo $row->notices_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->notices_title ?><span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                                <div id="panel<?php echo $row->notices_id ?>" class="content">
                                    <p class="complaintDate"><?php echo $row->notices_date ?></p>
                                    <p class="location"><?php echo $row->notices_description ?></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="small-10 small-centered columns text-center">
                <p id="noticeTitle" class="header">Previous Notifications</p>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-centered columns">
                <div class="accordionScroll">
                    <dl class="accordion" data-accordion>
                        <?php $allAlerts = $this->fetchnotifications->getnotifications("*", 1); ?>
                        <?php foreach ($allAlerts as $row): ?>
                            <dd class="accordionBottom">
                                <a href="#panel<?php echo $row->notices_id ?>" class="accordionLink accordionTitle" onClick="highlightLink2(this);"><?php echo $row->notices_title ?><span class="right accordionDropDownIcon"><img class="imgswap" src="<?php echo base_url(); ?>img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                                <div id="panel<?php echo $row->notices_id ?>" class="content">
                                    <p class="complaintDate"><?php echo $row->notices_date ?></p>
                                    <p class="location"><?php echo $row->notices_description ?></p>
                                </div>
                            </dd>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </div>
    </div><!--End mainContent-->
    
    <div class="filler"> </div>
</section>