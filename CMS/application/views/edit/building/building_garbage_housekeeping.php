<section>
    	<form id="garbage">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-12 columns">
                                <h2 class="directName">Garbage &amp; Housekeeping</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 columns">
                                <div class="lgTitleDivider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="duplicater">
                <div class="row">
                        <div class="small-4 columns">
                            <h2 class="garbageTitle">Building</h2>
                        </div>
                        <div class="small-4 columns">
                            <h2 class="garbageTitle">Selection</h2>
                        </div>
                        <div class="small-4 columns">
                            <h2 class="garbageTitle">Day</h2>
                        </div>
                </div>

                <div class="row">
                    <div class="small-2 columns">
                        <select>
                            <option value="R1">Falcon</option>
                            <option value="R2">Kestrel</option>
                            <option value="R3">Merlin</option>
                            <option value="R3">Peregrine</option>
                        </select>
                    </div>

                    <div id="garbageInputs" class="small-3 small-push-2 columns">
                        <span class="inputLabel">Garbage</span><input class="buildingRadio" type="radio" name="options" value="garbage" checked> <span class="inputLabel">Housekeeping</span><input class="buildingRadio" type="radio" name="options" value="housekeeping">
                    </div>
                    
                    <div class="small-2 small-push-3 columns">
                        <select>
                            <option value="R1">Monday</option>
                            <option value="R2">Tuesday</option>
                            <option value="R3">Wednesday</option>
                            <option value="R3">Thursday</option>
                            <option value="R3">Friday</option>
                        </select>
                    </div>

                    <div  class="small-3 small-push-2 columns">
                        <input type="submit" class="submitButton2" value="add" alt="Send!">
                    </div>
                </div>
            </div>
            
            <div class="row">
                        <div class="small-3 small-push-10 columns">
                            <a id="addInput" href="#"><img src="<?php echo base_url(); ?>img/WA_addR.png" alt="add day"><p class="addAnother">Add Another Day</p></a>
                        </div>
                </div>        
        </form>
    </section>