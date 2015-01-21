<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-2 small-push-4 columns option-add">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/<?php echo $controller_uri . "/" . $function_uri; ?>">
                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-2 small-pull-4 columns option-edit">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/<?php echo $controller_uri . "/" . $function_uri . "/edit"; ?>">
            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>