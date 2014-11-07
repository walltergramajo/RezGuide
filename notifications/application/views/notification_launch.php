	<div id="notifications">
        <p>
            <?php
            $newAlerts = $this->notifications->getunseen();
                if (is_string($newAlerts)) { 
                    echo $newAlerts;
                } else { 
                    foreach($newAlerts as $row) {
                        echo "<p>". $row->notices_id . $row->notices_title . $row->notices_description ."</p>";
                    }
                }
        	?>
        </p>
    </div>