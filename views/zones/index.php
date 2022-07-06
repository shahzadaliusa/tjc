<?php $this->xcontroller = new controller();?>	
    <div class="wrapper">
        <div class="irow">  
            <div class="icolumn icolumn-12" style="margin : 0!important;padding: 0 !important; box-shadow: none !important;">
                <div id="home-banner" class="owl-carousel owl-theme banner-6" >
                    <a class="item" href="#"><img src="<?php echo URL;?>img/zones/index/banner/1.jpg" alt="Corbett National Park"></a>
                    <a class="item" href="#"><img src="<?php echo URL;?>img/zones/index/banner/2.jpg" alt="Nainital Tours and Booking"></a>
                    <a class="item" href="#"><img src="<?php echo URL;?>img/zones/index/banner/3.jpg" alt="Corbett National Park"></a>
                    <a class="item" href="#"><img src="<?php echo URL;?>img/zones/index/banner/4.jpg" alt="Nainital Tours and Booking"></a>
                </div>
            </div>
        </div>
        <article class="page-article">
            <h1 class="article-heading">Our Covering Zones</h1>
            <p class="article">
                Invisiter Covers the Uttarakhand Tours and travels in India initially. Because of future expanding plans, we divide our places
                according to zones. A zone containing different places to visit. Initially we cover only the Corbett National Park Zone, Ramnagar 
                Zone, Nainital Tours and its nearest places, Ranikhet tours, Kausani Tours, Mukteshwar Tours and Almora.
            </p>
            <div class="row">
                <div class="column column-12">
                    <div class="caro-title">
                        <p><span class="title">Our Zones</span></p> 
                    </div>
                    <div class="caro owl-carousel owl-theme column-3">
                            <?php $data = $this->xcontroller->generateQuery('in_zones');
                                foreach($data as $key=>$val){
                                    echo '<div class="caro-card caro-inline">
                                        <a href="'.HOME.'zones/'.$val['in_zone_name'].'" class="caro-card-anchor">
                                            <div class="card-img"><img class="owl-lazy" data-src="'.URL."img".$val['in_zone_media'].'/thumbs/'.strtolower($val['in_zone_name']).'.jpg" width="100%"></div>
                                            <div class="card-info">
                                                <p class="item-title">'.$val['in_zone_name'].'</p>
                                                <div class="item-info">
                                                    <p align="center">'.$val['in_zone_type'].'</p>
                                                </div>	
                                            </div>
                                        </a>
                                    </div>';}
                                    
                                    
                            ?>
                                    
                    </div>
                </div>
            </div>

            <h2 class="article-heading">Recommended Zones</h2>
            <p class="article">
                Some of zones are recommended to visitors like visitors wants to safari in jungle, Corbett National Park is best suited, For 
                Adventure Activities, Corbett National Park, Ramnagar and  Nainital Tour is best. For Hills and Himalaya Views, Nainital, Mukteshwar and Kausani is recommended.
            </p>
        
            <div class="row">
                <div class="column column-12">
                    <div class="caro-title">
                        <p><span class="title">Recommended Places</span><span class="links" style="float : right;"><a href="#">See All</a></span></p>    
                    </div>
                    <div class="caro owl-carousel owl-theme column-3">
                        <?php 
                            $query = "SELECT * FROM `in_places` WHERE `in_place_priority` = 'recommended' AND `in_place_active`=1";
                            $data = $this->xcontroller->searchQuery($query);
                            foreach($data as $key=>$val){
                                echo '<div class="caro-card caro-inline">
                                    <a href="'.HOME.'places/'.$val['in_place_name'].'" class="caro-card-anchor">
                                        <div class="card-img"><img class="owl-lazy" data-src="'.URL."img".$val['in_place_media'].'/thumbs/'.strtolower($val['in_place_name']).'.jpg" width="100%"></div>
                                        <div class="card-info">
                                            <p class="item-title">'.$val['in_place_name'].'</p>
                                            <div class="item-info">
                                                <p align="center">'.$val['in_place_zone'].'</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>';}
                        ?>		
                    </div>
                </div>
            </div>

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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>