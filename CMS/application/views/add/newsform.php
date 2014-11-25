    <section>
    <?php if(!empty($message)){echo $message;} ?>
        <form  enctype="multipart/form-data" action="cms_add_news_monthly.php" method="post" id="newsMonthly">
            
            <div class="row coreInfo">
                <div class="large-9 columns">

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Location</label>
                        </div>
                        <div class="small-10 columns">
                            <input name="location" type="text" placeholder="Location">
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Date</label>
                        </div>
                        <div class="small-10 columns">
                            <input name="date" type="text" placeholder="DD / MM / YY">
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Time</label>
                        </div>
                        <div class="small-10 columns">
                            <input name="time" type="text" placeholder="Time">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Title</label>
                        </div>
                        <div class="small-10 columns">
                            <input name="name" type="text" placeholder="Title">
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-2 columns">
                            <label>Content</label>
                        </div>
                        <div class="small-10 columns">
                            <textarea name="desc" placeholder="Content"></textarea>
                        </div>
                    </div>
                    
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