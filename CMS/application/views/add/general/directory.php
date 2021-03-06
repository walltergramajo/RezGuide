<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-5 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/general/directory">

                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-3 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/edit/general/directory">

            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>

    <section>
        <form id="createUser">
            <div class="row">
                <div class="small-12 columns">
                	<input id="directName" type="text" placeholder="First, Last Name">
                </div>
            </div>
            <div class="row">
            	<div class="small-12 columns">
                	<div class="titleDivider"></div>
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Email</label>
                </div>
                <div class="small-10 columns">
                	<input id="email" type="email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Room #</label>
                </div>
                <div class="small-10 columns">
                	<input id="name" type="text" placeholder="Room #">
                </div>
            </div>
             <div class="row">
                <div class="small-2 columns">
                	<label>Username</label>
                </div>
                <div class="small-10 columns">
                	<input id="username" type="text" placeholder="Username">
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Phone</label>
                </div>
                <div class="small-10 columns">
                	<input id="password" type="text" placeholder="XXX-XXX-XXXX">
                </div>
            </div>
            <div class="row">
                <div class="small-2 columns">
                	<label>Position</label>
                </div>
                <div class="small-10 columns">
                	<select id="position">
                    	<option>Select a Position</option>
                        <option>Position 1</option>
                        <option>Position 2</option>
                        <option>Position 3</option>
                        <option>Position 4</option>
                        <option>Position 5</option>
                    </select>
                </div>
            </div>
            <div class="row">
            	<div class="small-4 columns push-4">
                	<input type="submit" class="submitButton1" value="SUBMIT" alt="Send!">
                </div>
            </div>
        </form>
    </section>
    <div class="filler"> </div>