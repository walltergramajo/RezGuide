<section>
        <div class="row">
            <div class="small-12 columns">
                <h2 id="subTitle">ADD A NEW USER</h2>
            </div>
        </div>
        <?php echo $formstart; ?>
            <div class="row">
                <div class="small-2 columns">
                    <label>First Name</label>
                </div>
                <div class="small-3 columns">
                    <?php echo $firstname; ?>
                </div>
                <div class="small-2 pull-1 columns">
                    <label>Last Name</label>
                </div>
                <div class="small-3 pull-3 columns">
                    <?php echo $lastname; ?>
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Email</label>
                </div>
                <div class="small-10 columns">
                	<?php echo $email; ?>
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Position</label>
                </div>
                <div class="small-3 columns">
                	<?php echo $position; ?>
                </div>
                <div class="small-2 pull-1 columns">
                    <label>Employee Number</label>
                </div>
                <div class="small-3 pull-3 columns">
                    <?php echo $empnum; ?>
                </div>
            </div>
             <div class="row">
                <div class="small-2 columns">
                	<label>Username</label>
                </div>
                <div class="small-10 columns">
                	<?php echo $username; ?>
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Password</label>
                </div>
                <div class="small-10 columns">
                	<?php echo $password; ?>
                </div>
            </div>
            <div class="row">
            	<div class="small-4 columns push-4">
                	<input type="submit" class="submitButton1" value="SUBMIT" alt="Send!">
                </div>
            </div>
        <?php echo $adminlevel; ?>
        </form>
    </section>