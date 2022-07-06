<div class="wrapper">
    <div class="bread"></div>

    <div class="row">
        <div class="detail-card column column-6">
            <h1 class="column-heading">Nainital Intercity Package</h1>
            <div class="basic-info">
                <h3>Package Information</h3>
                <p>Source : Ramnagar City</p>
                <p>Destination : Nainital</p>
                <p>Duration : 1 Day</p>
                <p>Timing : 07:00 AM to 07:00 PM</p></div>
        </div>
        <div class="detail-card column column-6 route">
            <h1 class="column-heading">Advanced Information</h1>
            <div class="style-info">
                <h3>Route Map</h3>
                <p>Visit at Ramnagar City on time.</p>
                <p>The Vehicle will take you to travel.</p>
                <p>First, Driver will take you to Corbett Meusium.</p>
                <p>Next Station is Sariatal Fall Where you will stay 30 minutes.</p>
                <p>Next Station is Barapatthar. Add on available here for the Horse Riding.</p>
                <p>Finally you will reach at Nainital City. Here you can do Boating, Lunch and Stay here to enjoy.</p>
                <p>At Last, You can choose the one of these point to visit - The Zoo or Snow View Point.</p>
                <p>Thereafter, We will return back to Ramnagar City.</p>
                
            </div>
        </div>
        
    </div>
    
    <div class="row">
        <div class="detail-card column column-6">
            <h1 class="column-heading">Enquiry</h1>
            <div class="form-card">
                <form action="<?php echo HOME?>query" method='POST'>
                    <div class="form-group">
                        <span>Name</span>
                    <input type="text" name="name" class="input-full" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <span>Place</span>
                    <input type="text" name="place" class="input-full" placeholder="Enter the Place You want to Visit">
                    </div>
                    
                    <div class="form-group">
                    <span>Number of Visiters</span>
                    <input type="number" name="visiterCount" class="input-full" >
                    <span>Mobile Number</span>
                    <input type="text" name="mobile" class="input-full" >
                    <span>Email Address</span>
                    <input type="text" name="email" class="input-full" >
                    <span>Nationality</span>
                    <input type="text" name="nationality" class="input-full">
                    </div>
                    
                    <div class="form-group">
                        <span>Address</span>
                    <input type="text" name="message" class="input-full" style="height: 50px;">
                    </div>
                    <input type="submit" name="Subscribe" class="trip-button" value="Enquiry">
                </form>
        </div>
        </div>
        <div class="detail-card column column-6">
            <?php echo $data[0]['in_pkg_note'];?>
        </div>
        
    </div>
    
</div>