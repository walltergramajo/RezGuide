<section>
        <div class="row">
            <div class="small-12 columns">
                <h2 id="subTitle">ADD A NEW USER</h2>
            </div>
        </div>
        <form id="createUser">
            <div class="row">
                <div class="small-2 columns">
                	<label>Name</label>
                </div>
                <div class="small-10 columns">
                	<input id="name" type="text" placeholder="First, Last Name">
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
                	<label>Building</label>
                </div>
                <div class="small-3 columns">
                	<select id="build" type="text">
                    	<option>Select a Building</option>
                        <option>Merlin</option>
                        <option>Falcon</option>
                        <option>Paragon</option>
                        <option>Kestrel</option>
                    </select>
                </div>
                <div class="small-7 columns" id="userRoom">
                    <label id="roomLabel">Room #</label>
                    <input id="room" type="text" placeholder="Room #">
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
                	<label>Password</label>
                </div>
                <div class="small-10 columns">
                	<input id="password" type="text" placeholder="Password">
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