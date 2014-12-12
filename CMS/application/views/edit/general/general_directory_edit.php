<section>
        <div class="row">
            <div class="small-12 columns">
                <h2 id="subTitle">EDIT USER</h2>
            </div>
        </div>
        <?php echo $formstart; ?>
            <div class="row">
                <div class="small-2 columns">
                	<label>Name</label>
                </div>
                <div class="small-10 columns">
                	<input id="name" type="text" name="name" placeholder="John Smith" >
                   <!--  value="<?php echo reset($record)->directory_firstname . " " . reset($record)->directory_lastname; ?>" -->
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Email</label>
                </div>
                <div class="small-10 columns">
                	<input id="email" name="email" type="email" placeholder="jsmith@example.com" >
                    <!-- value="<?php echo reset($record)->directory_email; ?>" -->
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Building</label>
                </div>
                <div class="small-3 columns">
                	<select id="build" type="text">
                    	<!--<option>Select a Building</option>-->
                        <option>Merlin</option>
                        <option>Falcon</option>
                        <option>Paragon</option>
                        <option>Kestrel</option>
                    </select>
                </div>
                <div class="small-7 columns"  id="userRoom">
                    <label id="roomLabel">Room #</label>
                    <input id="room" type="text" name="officenumber" placeholder="543" value="<?php echo reset($record)->directory_officenumber; ?>">
                </div>
            </div>
             <div class="row">
                <div class="small-2 columns">
                	<label>Username</label>
                </div>
                <div class="small-10 columns">
                	<input id="username" type="text" name="username" placeholder="jsmith" value="<?php echo reset($record)->directory_username; ?>">
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Password</label>
                </div>
                <div class="small-10 columns">
                	<input id="password" type="password" name="password" placeholder="password" value="<?php echo reset($record)->directory_password; ?>">
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Position</label>
                </div>
                <div class="small-10 columns">
                    <input id="username" type="text" name="position" placeholder="Position" value="<?php echo reset($record)->directory_position; ?>">
                	<!-- <select id="position">
                    	<option>Select a Position</option>
                        <option>Position 1</option>
                        <option>Position 2</option>
                        <option>Position 3</option>
                        <option>Position 4</option>
                        <option>Position 5</option>-->
                    </select>
                </div>
            </div>
            <div class="row">
            	<div class="small-4 columns push-4">
                	<input type="submit" class="submitButton1" value="SUBMIT" alt="Send!">
                </div>
            </div>
            <input id="userid" name="id" type="hidden" value="<?php echo reset($record)->directory_id; ?>">
        </form>
    </section>