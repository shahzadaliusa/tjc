<div class="wrapper">
    <div class="icolumn icolumn-12" style="padding: 0 !important; box-shadow: none !important; float : none !important;" > 
        <div id="home-banner" class="owl-carousel owl-theme banner-6">
            <div class="item"><img src="<?php echo URL;?>img/1.jpg"></div>
            <div class="item"><img src="<?php echo URL;?>img/2.jpg"></div>
            <div class="item"><img src="<?php echo URL;?>img/3.jpg"></div>
            <div class="item"><img src="<?php echo URL;?>img/4.jpg"></div>
        </div>
    </div>
    <div class="row">
        <div class="column column-12">
            <?php
                foreach ($data as $key=>$val){
                    echo '<div class="caro-card caro-inline">
                            <a href="'.HOME.'packages/'.$val['in_pkg_place'].'/viewPackage/'.$val['in_pkg_name'].'" class="caro-card-anchor">
                                <div class="card-img"><img src="'.URL."img/places".$val['in_pkg_media'].'/pkg/thumb/'.$val['in_pkg_name'].'.jpg" width="100%"></div>
                                <div class="card-info">
                        	        <p class="item-title">'.$val['in_pkg_name'].'</p>
                        	        <div class="item-info">
                        		        <p align="center">'.$val['in_pkg_zone'].'</p>
                        	</div>
                        	
                        </div>
                </a>
        </div>';
                }
            ?>
        
    </div>
</div>