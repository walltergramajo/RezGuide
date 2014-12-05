<div id="optionsIcons" class="row">
    <div class="small-8 small-centered columns">
        <div class="small-3 small-push-4 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/add/<?php echo $section . "/" . $uri; ?>">
                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="<?php echo base_url(); ?>img/CMS_add.png" alt="Add">
            </a>
        </div>
        <div class="small-3 small-pull-4 columns">
            <a class="botAnchor" href="<?php echo base_url(); ?>index.php/edit/<?php echo $section . "/" . $uri; ?>">
            <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="<?php echo base_url(); ?>img/CMS_edit.png" alt="Edit">
            </a>
        </div>
    </div>
</div>


    <section>
        <?php echo $formstart; ?>
            
            <div class="row coreInfo">
                <div class="large-9 columns">

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Title</label>
                        </div>
                        <div class="small-10 columns">
                            <?php echo $name; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Content</label>
                        </div>
                        <div class="small-10 columns">
                            <?php echo $content; ?>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Location</label>
                        </div>
                        <div class="small-10 columns">
                            <?php echo $location; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Who</label>
                        </div>
                        <div class="small-4 columns">
                            <?php echo $who; ?>
                        </div>
                        <div class="small-2 columns">
                            <label>Link</label>
                        </div>
                        <div class="small-4 columns">
                            <?php echo $link; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Start</label>
                        </div>
                        <div class="small-4 columns">
                            <?php echo $start; ?>
                        </div>
                        <div class="small-2 columns">
                            <label>End</label>
                        </div>
                        <div class="small-4 columns">
                            <?php echo $end; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>($) Price</label>
                        </div>
                        <div class="small-4 columns">
                            <?php echo $studprice; ?>
                        </div>
                        <div class="small-2 columns">
                            <label>($) Guests</label>
                        </div>
                        <div class="small-4 columns">
                            <?php echo $gstprice; ?>
                        </div>
                    </div>
                <?php echo $category; ?>
                </div>

                <div class="row">
                    <div class="large-3 columns">
                        <img src="<?php echo base_url(); ?>img/upload.png" alt="Choose an Image" onchange="readURL(this);" name="file" id="imageButton" type="file" value="choose image">
                    </div>
                
                    <div class="small-1 column addFile">
                        <span>+</span>
                        <input onchange="readURL(this);" name="file" id="imageButton" type="file" value="choose image">
                    </div>

                    <div class="small-1 column addFile">
                        <span>+</span>
                        <input onchange="readURL(this);" name="file" id="imageButton" type="file" value="choose image">
                    </div>
                
                    <div class="small-1 column addFile">
                        <span>+</span>
                        <input onchange="readURL(this);" name="file" id="imageButton" type="file" value="choose image">
                    </div>
                
                    <div class="small-3 columns">
                        <hr>
                        <input type="submit" class="submitButton2" value="SUBMIT" alt="Submit!">
                    </div>
                </div>

          </div>

        </form> 
    </section>
    
    <div class="filler"> </div>