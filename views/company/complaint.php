<div class="row">
        <div class="column column-12">
            <div class="row">
                <div class="form-card">
                <h1>Enquiry/Complaints</h1>
                <form action="<?php echo HOME?>query" method="POST">
                    <div class="row">
                        <div class="column column-4">
                            <div class="form-group">
                                <span>Name</span>
                                <input type="text" name="name" class="input-full" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <span>Place</span>
                                <input type="text" name="place" class="input-full" placeholder="Enter the Place You want to Visit">
                            </div>
                        </div>
                        <div class="column column-4">
                            <div class="form-group">
                                <span>Number of Visiter</span>
                                <input type="text" name="visiterCount" class="input-full" >
                                <span>Mobile Number</span>
                                <input type="text" name="mobile" class="input-full" >
                               
                                
                            </div>
                        </div>
                        <div class="column column-4">
                        <div class="form-group">
                             <span>Email Address</span>
                                <input type="text" name="email" class="input-full" >
                            <span>Your Messages</span>
                            <input type="text" name="message" class="input-full" style="height: 50px;">
                        </div>
                        <input type="submit" name="Subscribe" class="trip-button" value="Submit">
                    </div>
                    </div>
                </form>
            </div>
            </div>