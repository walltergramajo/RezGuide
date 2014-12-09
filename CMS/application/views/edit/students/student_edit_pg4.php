<section>
    	<form id="newStudent">
        	<div class="row" id="mainInfo">
                <div class="small-12 columns">
                	<div class="row">
                        <div class="small-12 columns">
                            <h2 class="titles">Points</h2>
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
                                    <h3 class="pointsTitle">Points</h3>
                                </div>
                                <div class="small-2 columns">
                                    <h3 class="pointsTitle">Delete</h3>
                                </div>
                            </div>    
                            
                            <div class="row">
                                <div class="small-2 columns">
                                    <div class="edit2">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                                        </a>
                                    </div>
                                </div>
                                <div class="small-4 columns">
                                    <p class="titleHere">Title Here</p>
                                </div>
                                <div class="small-1 small-push-1 columns">
                                    <p class="pointsHere">2</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="divider2"></div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="small-2 columns">
                                    <div class="edit2">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>img/CMS_editPencil.png" alt="Edit">
                                        </a>
                                    </div>
                                </div>
                                <div class="small-4 columns">
                                    <p class="titleHere">Title Here</p>
                                </div>
                                <div class="small-1 small-push-1 columns">
                                    <p class="pointsHere">2</p>
                                </div>
                                <div class="small-1 columns">
                                    <a href="#">
                                        <img class="delete" src="<?php echo base_url(); ?>img/CMS_delete.png" alt="Delete" >
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="divider2"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="small-5 columns">
                            <h2 class="addPointsHeader">Add Points:</h2>
                            <input class="titleText" type="text" placeholder="Title">
                            <textarea placeholder="Description"></textarea>
                            <h2 class="addPointsHeader">Amount:</h2>
                            <input type="radio" name="options" value="garbage" checked><span class="inputPLabel">1</span> 
                            <input type="radio" name="options" value="housekeeping"><span class="inputPLabel">2</span>
                            <input type="radio" name="options" value="housekeeping"><span class="inputPLabel">3</span>
                            <input type="radio" name="options" value="housekeeping"><span class="inputPLabel">4</span>
                    </div>

            </div>

            <div id="submitRow" class="row">
                <div class="small-2 small-centered columns">
                   <input type="submit" class="submitButton" value="Submit" alt="Send!">
                </div>
            </div>
        </form>
    </section>