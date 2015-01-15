<section>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="cms_add_notice_fine.php" method="post" id="fine">
        <div class="row">
            <div class="small-2 columns">
                <label>Student #</label>
            </div>
            <div class="small-4 columns">
            	<input id="studNum" name="studentNum" type="number" placeholder="0000000" value="<?php if(!empty($autostudNum)){echo $autostudNum;} ?>">
            </div>
            <div class="small-2 columns">
                <label>Type</label>
            </div>
            <div class="small-4 columns">
            	<select name="type">
                	<option value="">Type</option>
                    <option value="1">Complaint 1</option>
                    <option value="2">Complaint 2</option>
                    <option value="3">Complaint 3</option>
                </select>
            </div>
        </div>
        <div class="row">
        	<div class="small-2 columns">
            	<label>mm/dd/yyyy</label>
            </div>
            <div class="small-2 columns">
            	<input id="complaintdate" name="date" type="text" placeholder="mm/dd/yyyy" value="<?php if(!empty($autodate)){echo $autodate;} ?>">
            </div>
            <div class="small-2 columns">
            	<label>Building</label>
            </div>
            <div class="small-2 columns">
            	<select name="building">
                	<option value="">Building</option>
                    <option value="Merlin">Merlin</option>
                    <option value="Falcon">Falcon</option>
                    <option value="Paragon">Paragon</option>
                    <option value="Kestrel">Kestrel</option>
                </select>
            </div>
            <div class="small-2 columns">
            	<label>Room #</label>
            </div>
            <div class="small-2 columns">
            	<input id="room1" name="roomNum" type="number" placeholder="Room #" value="<?php if(!empty($autoroomNum)){echo $autoroomNum;} ?>">
            </div>
        </div>
        <div class="row">
        	<div class="small-2 columns">
            	<label>Content</label>
            </div>
            <div class="small-10 columns">
            	<textarea id="contentText" type="text" name="content" placeholder="Content" value="<?php if(!empty($autocontentText)){echo $autocontentText;} ?>"></textarea>
            </div>
        </div>
        <div class="row">
        	<div class="small-12 columns">
            	<input type="submit" name="submit" id="add" value=" ">
            </div>
        </div>
    </form>
</section>

<div class="filler"> </div>