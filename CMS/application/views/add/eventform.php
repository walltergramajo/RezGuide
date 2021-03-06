    <section>
        <?php 
            if(isset($success)){
                echo "<div class=\"successmsg form_msg\"><p>" . $sectTitle . " " . $success . "</p></div>";
            }elseif(strlen(validation_errors()) != 0){
                echo "<div class=\"errormsg form_msg\">" . validation_errors() . "</div>";
            }
        ?>
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

                    <div class="row">
                        <div class="small-2 columns">
                            <label>More Info</label>
                        </div>
                        <div class="small-10 columns">
                            <?php echo $moreinfo; ?>
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
                            <?php echo $s_day . $s_month . $s_year; ?>
                        </div>
                        <div class="small-2 columns">
                            <label>End</label>
                        </div>
                        <div class="small-4 columns">
                            <?php echo $e_day . $e_month . $e_year; ?>
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
                <?php if(isset($id)) { echo $id; } ?>
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