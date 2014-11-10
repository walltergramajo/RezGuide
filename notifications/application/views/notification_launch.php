<section id="notificationsRow">
    <div id="notificationsZone">
    	<div id="notifications" class="small-3 columns">
            <p>
                <?php
                $newAlerts = $this->notifications->getunseen();
                    if (is_string($newAlerts)) { 
                        echo $newAlerts;
                    } else { 
                        foreach($newAlerts as $row) {
                            echo "<p>". $row->notices_title ."</p>";
                        }
                    }
            	?>
            </p>
        </div>
    </div>
</section>