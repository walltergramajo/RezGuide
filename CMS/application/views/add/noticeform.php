<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-5 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/<?php echo $section . "/" . $uri; ?>">
                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-3 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/edit/<?php echo $section . "/" . $uri; ?>">
            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>


    <section>
    <!-- <form action="cms_add_notice_complaint.php" method="post" id="warning"> -->
    <?php 
            if(isset($success)){
                echo "<div class=\"successmsg form_msg\"><p>" . $sectTitle . " " . $success . "</p></div>";
            }elseif(strlen(validation_errors()) != 0){
                echo "<div class=\"errormsg form_msg\">" . validation_errors() . "</div>";
            }
        ?>
    <?php echo $formstart; ?>
        <div class="row">
            <div class="small-2 columns">
                <label>Student Name</label>
            </div>
            <div class="small-4 columns">
                <!-- <input id="studNum" name="studentNum" type="number" placeholder="0000000" value="<?php // if(!empty($autostudNum)){echo $autostudNum;} ?>"> -->
                <?php echo $studentName; ?>
                <div id="suggestions">
                    <div id="autoSuggestionsList">
                    </div>
                </div>
            </div>
            <div class="small-2 columns">
                <label>Type</label>
            </div>
            <div class="small-4 columns">
                <!-- <select name="type">
                    <option value="">Type</option>
                    <option value="1">Complaint 1</option>
                    <option value="2">Complaint 2</option>
                    <option value="3">Complaint 3</option>
                </select> -->
                <?php echo $type; ?>
            </div>
        </div>
        <div class="row">
            <div class="small-2 columns">
                <label>yyyy/mm/dd</label>
            </div>
            <div class="small-2 columns">
                <!-- <input id="complaintdate" name="date" type="text" placeholder="mm/dd/yyyy" value="<?php // if(!empty($autodate)){echo $autodate;} ?>"> -->
                <?php echo $date; ?>
            </div>
            <div class="small-2 columns">
                <label>Building</label>
            </div>
            <div class="small-2 columns">
                <!-- <select name="building">
                    <option value="">Building</option>
                    <option value="Merlin">Merlin</option>
                    <option value="Falcon">Falcon</option>
                    <option value="Paragon">Paragon</option>
                    <option value="Kestrel">Kestrel</option>
                </select> -->
                <?php echo $building; ?>
            </div>
            <div class="small-2 columns">
                <label>Room #</label>
            </div>
            <div class="small-2 columns">
                <!-- <input id="room1" name="roomNum" type="number" placeholder="Room #" value="<?php // if(!empty($autoroomNum)){echo $autoroomNum;} ?>"> -->
                <?php echo $roomNum; ?>
            </div>
        </div>
        <div class="row">
            <div class="small-2 columns">
                <label>Content</label>
            </div>
            <div class="small-10 columns">
                <!-- <textarea id="contentText" type="text" name="content" placeholder="Content" value="<?php // if(!empty($autocontentText)){echo $autocontentText;} ?>"></textarea> -->
                <?php echo $content; ?>
            </div>
        </div>
        <div class="row">
            <div class="small-4 columns push-4">
                <input type="submit" class="submitButton1" value="SUBMIT" alt="Submit!">
            </div>
        </div>
    </form>
</section>

<div class="filler"> </div>