<?php $this->xcontroller = new controller();
$zone = $data[0]['in_zone_name'];
$post1=$data[0]['in_zone_post1'];
$post2=$data[0]['in_zone_post2'];
$post3=$data[0]['in_zone_post3'];
$post4=$data[0]['in_zone_post4'];
$post5=$data[0]['in_zone_post5'];

?>	
    <div class="wrapper">
        <div class="irow">
            <div class="icolumn icolumn-12" style="margin : 0!important;padding: 0 !important; box-shadow: none !important;">
                    <a class="item"  href="#"><img style="width:100%;" src="<?php echo URL;?>img/zones/<?php echo strtolower($zone);?>/banner/1.jpg" alt="Corbett National Park"></a>
            </div>
        </div>
    
        <article class="page-article">
            <?php echo $data[0]['in_zone_about']; ?>
            <div class="row">
                <div class="column column-12">
                    <div class="caro-title">
                        <p><span class="title">All Places</span></p>  
                    </div>
                    <div class="caro owl-carousel owl-theme column-3">
                        <?php 
                            $query = "SELECT * FROM `in_places` WHERE `in_place_zone` = '$zone' AND `in_place_active`=1";
                            $data = $this->xcontroller->searchQuery($query);
                            foreach($data as $key=>$val){
                                echo '<div class="caro-card caro-inline">
                                    <a href="'.HOME.'places/'.$val['in_place_name'].'" class="caro-card-anchor">
                                        <div class="card-img"><img class="owl-lazy" data-src="'.URL."img/".$val['in_place_media'].'thumbs/'.strtolower($val['in_place_name']).'.jpg" width="100%"></div>
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
            <?php echo $post1; ?>      
            <div class="row">
                <div class="column column-12">
                    <div class="caro-title">
                        <p><span class="title">All Packages</span><span class="links" style="float : right;"><a href="#">See All</a></span></p>
                        
                    </div>
                    <div class="caro owl-carousel owl-theme column-3">
                            <?php 
                                $query = "SELECT * FROM `in_packages` WHERE `in_pkg_zone` = '$zone' AND `in_pkg_active`=1";
                                $sdata = $this->xcontroller->searchQuery($query);
                                foreach($sdata as $key=>$val){
                                    echo '<div class="caro-card caro-inline">
                                            <a href="'.HOME.'packages/'.$val['in_pkg_name'].'" class="caro-card-anchor">
                                                <div class="card-img"><img class="owl-lazy" data-src="'.URL."img".$val['in_pkg_media'].'/thumbs/'.strtolower($val['in_pkg_name']).'.jpg" width="100%"></div>
                                                <div class="card-info">
                                                    <p class="item-title">'.$val['in_pkg_name'].'</p>
                                                    <div class="item-info">
                                                        <p align="center" style="float : left; color : #ffc252;">Price : '.$val['in_pkg_price'].'</p>
                                                        <p align="center" style="float:right; text-decoration : line-through; color : #ccc;">MRP : '.$val['in_pkg_discount'].'</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>';}
                            ?>
                    </div>
                </div>
            </div>

            <?php echo $post2;?>
            <div class="row">
                <div class="column column-12">
                    <div class="caro-title">
                        <p><span class="title">Suggested Places for Upgrading Your Packages</span></p>  
                    </div>
                    <div class="caro owl-carousel owl-theme column-3">
                        <?php 
                            $query = "SELECT * FROM `in_places` WHERE `in_place_seo` LIKE '%$zone%' AND `in_place_active`=1";
                            $data = $this->xcontroller->searchQuery($query);
                            foreach($data as $key=>$val){
                                echo '<div class="caro-card caro-inline">
                                    <a href="'.HOME.'places/'.$val['in_place_name'].'" class="caro-card-anchor">
                                        <div class="card-img"><img class="owl-lazy" data-src="'.URL."img/places/".strtolower($val['in_place_zone']).'/'.strtolower($val['in_place_name']).'/thumbs/'.strtolower($val['in_place_name']).'.jpg" width="100%"></div>
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
            <?php.$post3.$post4.$post5;?>
        </article>
    </div>