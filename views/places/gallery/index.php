<div class="wrapper">
    <div class="header-nav">
        <ul>
            <li><a href="<?php echo HOME.'places/'.$data[0]['in__zone'].'/visitingPoints/'.$data[0]['in_gallery_place'];?>">About</a></li>
            <li><a href="<?php echo HOME.'places/'.$data[0]['in_gallery_zone'].'/packages/'.$data[0]['in_gallery_place'];?>">Packages</a></li>
            <li><a href="<?php echo HOME.'places/'.$data[0]['in_gallery_zone'].'/gallery/'.$data[0]['in_gallery_place'];?>">Gallery</a></li>
            <li><a href="<?php echo HOME.'places/'.$data[0]['in_gallery_zone'].'/hotels/'.$data[0]['in_gallery_place'];?>">Hotels</a></li>
           <!-- <li><a href="<?php echo HOME.'places/'.$data[0]['in_gallery_zone'].'/servicesOnRent/'.$data[0]['in_gallery_place'];?>">SORs</a></li> -->
        </ul>
    </div>
    <div class="icolumn icolumn-12" style="padding: 0 !important; box-shadow: none !important; float : none !important;" > 
            <div id="home-banner" class="owl-carousel owl-theme banner-6"  >
            <div class="item"><img src="<?php echo URL;?>img/1.jpg"></div>
            <div class="item"><img src="<?php echo URL;?>img/2.jpg"></div>
            <div class="item"><img src="<?php echo URL;?>img/3.jpg"></div>
            <div class="item"><img src="<?php echo URL;?>img/4.jpg"></div>
         </div>
         </div>
    <div class="bread"></div>

    <div class="row">
        <div class="column column-12">
            <?php
                foreach ($data as $key=>$val){
                    echo '<div class="caro-card caro-inline">
                            <a href="'.HOME.'gallery/'.$val['in_gallery_place'].'/viewImage/'.$val['in_gallery_name'].'" class="caro-card-anchor">
                                <div class="card-img"><img src="'.URL."img".$val['in_gallery_path'].'thumb/'.$val['in_gallery_photo'].'.jpg" width="100%"></div>
                                <div class="card-info">
                        	        <h1 class="item-title">'.$val['in_gallery_photo'].'</h1>
                        	        <div class="item-info">
                        		        <p align="center">'.$val['in_gallery_place'].'</p>
                        	</div>
                        	
                        </div>
                </a>
        </div>';
                }
            ?>
        
    </div>
</div>