                    <section id="popup">
                        <div class="row">
                            <div class="small-11 columns">
                                <p id="deleteNot">Are you sure you want to permanently delete notice *insert notice name here*?</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 small-pull-1 columns">
                                <ul id="deleteOpt">
                                    <li>
                                        <a id="cancelDel" href="#">
                                            <img src="http://localhost:8888/ryan/RezGuide/CMS/img/cancel.png" alt="Cancel Delete">
                                        </a>
                                    </li>
                                    <li>
                                        <a id="deleteMe">
                                            <img src="http://localhost:8888/ryan/RezGuide/CMS/img/deleteIcon.png" alt="Delete">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

<section>
    	<?php echo $formstart; ?>
            <div class="row" id="mainInfo">
                <div class="small-12 columns">
                    <div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Policies &amp; Regulations</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="lgTitleDivider"></div>
                        </div>
                    </div>
                </div>
            </div>
              
            <div class="row"> 
                <div class="small-7 columns">     
                       <div class="pointsTable"> 
                            <div id="labelsContainer" class="row">
                                <div class="small-2 columns">
                                    <h3 class="pointsTitle">Edit</h3>
                                </div>
                                <div class="small-4 columns">
                                    <h3 class="pointsTitle">Title</h3>
                                </div>
                                <div class="small-3 columns">
                                    <h3 class="pointsTitle">Policies</h3>
                                </div>
                                <div class="small-2 columns">
                                    <h3 class="pointsTitle">Delete</h3>
                                </div>
                            </div>    
                            
                            <?php foreach($rules as $row): ?>
                            <div class="row">
                                <div class="small-2 columns">
                                    <div class="edit2">
                                        <a href="<?php echo base_url(); ?>index.php/building/rules/<?php echo $row->rules_id; ?>">
                                            <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                                        </a>
                                    </div>
                                </div>
                                <div class="small-4 columns">
                                    <p class="titleHere"><?php echo $row->rules_title; ?></p>
                                </div>
                                <div class="small-3 columns">
                                    <p class="pointsHere"><?php echo word_limiter($row->rules_description, 5); ?></p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#" class="del" data-record="<?php echo $row->rules_id; ?>" data-controller="<?php echo $section; ?>" data-function="<?php echo $uri; ?>">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="divider2"></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- <div class="row">
                                <div class="small-2 columns">
                                    <div class="edit2">
                                        <a href="#">
                                            <img src="<?php// echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                                        </a>
                                    </div>
                                </div>
                                <div class="small-4 columns">
                                    <p class="titleHere">Title Here</p>
                                </div>
                                <div class="small-3 columns">
                                    <p class="pointsHere">Limit is 1L per student</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php// echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="divider2"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="small-5 columns">
                            <h2 class="addPointsHeader">Add New:</h2>
                            <?php echo $name; ?>
                            <?php echo $desc; ?>
                            <?php if(isset($id)) { echo $id; } ?>
                    </div>

            </div>


            <div id="submitRow" class="row">
                <div class="small-2 small-push-9 columns">
                   <input type="submit" class="submitButton" value="Submit" alt="Send!">
                </div>
            </div>
        </form>
    </section>