<section id="notificationsRow">
    <div id="notificationsZone">
        <div id="noti-button"></div>
    	<div id="notifications" class="small-3 columns">
            <p>
                <?php
                $newAlerts = $this->fetchnotifications->getnotifications("notices_title", 0);
                    if (is_string($newAlerts)) { 
                        echo $newAlerts;
                    } else { 
                        foreach($newAlerts as $row) {
                            echo "<p>". $row->notices_title ."</p>";
                        }
                    }
            	?>
                <p><a href="<?php echo base_url(); ?>index.php/notifications">View all Notifications</a></p>
            </p>
        </div>
    </div>
</section>