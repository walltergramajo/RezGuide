<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-5 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/general/information">

                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-3 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/edit/general/information">

            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>

    <section>
        <form id="LTC">
            <div class="row">
                <div class="small-12 columns">
                	<input id="busNum" type="text" placeholder="BUS #">
                </div>
            </div>
            <div class="row">
            	<div class="small-12 columns">
                	<div class="titleDivider"></div>
                </div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                	<label>Streets</label>
                </div>
                <div class="small-9 columns">
                	<input id="streets" type="text" placeholder="List Streets Here">
                </div>
            </div>
            <div class="row">
                <div class="small-3 columns">
                	<label>Stops at Fanshawe</label>
                </div>
                <div class="small-9 columns">
                	<input id="stops" type="text" placeholder="Yes/No">
                </div>
            </div>
             <div class="row">
                <div class="small-3 columns">
                	<label>PDF Link</label>
                </div>
                <div class="small-9 columns">
                	<input id="pdf" type="text" placeholder="www.busPDFlink.com">
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