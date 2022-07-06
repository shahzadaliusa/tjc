<?php $this->xcontroller = new controller();
    $ratingOfPlace = $data[0]['in_place_rating'];
    $place = $data[0]['in_place_name'];
    $zone = $data[0]['in_place_zone'];
?>		
<div class="wrapper">
    <div class="irow">
        <div class="icolumn icolumn-12" style="margin : 0!important;padding: 0 !important; box-shadow: none !important;">
                <a class="item"  href="#"><img style="width:100%;" src="<?php echo URL;?>img/places/<?php echo strtolower($zone.'/'.$place);?>/banner/1.jpg" alt="Corbett National Park"></a>
        </div>  
    </div>
    <article class="page-article">
        <?php echo $data[0]['in_place_post1']; ?>
        <div class="cd-tabs cd-tabs--vertical container js-cd-tabs">
		    <nav class="cd-tabs__navigation">
		        <ul class="cd-tabs__list">
                    <li><a href="#tab-packages" class="cd-tabs__item cd-tabs__item--selected"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M17.218,2.268L2.477,8.388C2.13,8.535,2.164,9.05,2.542,9.134L9.33,10.67l1.535,6.787c0.083,0.377,0.602,0.415,0.745,0.065l6.123-14.74C17.866,2.46,17.539,2.134,17.218,2.268 M3.92,8.641l11.772-4.89L9.535,9.909L3.92,8.641z M11.358,16.078l-1.268-5.613l6.157-6.157L11.358,16.078z"></path></svg></div><span>Available Packages</span></a></li>
                    <li><a href="#tab-visitings" class="cd-tabs__item cd-tabs__item"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M17.659,9.597h-1.224c-0.199-3.235-2.797-5.833-6.032-6.033V2.341c0-0.222-0.182-0.403-0.403-0.403S9.597,2.119,9.597,2.341v1.223c-3.235,0.2-5.833,2.798-6.033,6.033H2.341c-0.222,0-0.403,0.182-0.403,0.403s0.182,0.403,0.403,0.403h1.223c0.2,3.235,2.798,5.833,6.033,6.032v1.224c0,0.222,0.182,0.403,0.403,0.403s0.403-0.182,0.403-0.403v-1.224c3.235-0.199,5.833-2.797,6.032-6.032h1.224c0.222,0,0.403-0.182,0.403-0.403S17.881,9.597,17.659,9.597 M14.435,10.403h1.193c-0.198,2.791-2.434,5.026-5.225,5.225v-1.193c0-0.222-0.182-0.403-0.403-0.403s-0.403,0.182-0.403,0.403v1.193c-2.792-0.198-5.027-2.434-5.224-5.225h1.193c0.222,0,0.403-0.182,0.403-0.403S5.787,9.597,5.565,9.597H4.373C4.57,6.805,6.805,4.57,9.597,4.373v1.193c0,0.222,0.182,0.403,0.403,0.403s0.403-0.182,0.403-0.403V4.373c2.791,0.197,5.026,2.433,5.225,5.224h-1.193c-0.222,0-0.403,0.182-0.403,0.403S14.213,10.403,14.435,10.403"></path></svg></div><span>Visiting Places</span></a></li>
                    <li><a href="#tab-adventures" class="cd-tabs__item cd-tabs__item"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M15.94,10.179l-2.437-0.325l1.62-7.379c0.047-0.235-0.132-0.458-0.372-0.458H5.25c-0.241,0-0.42,0.223-0.373,0.458l1.634,7.376L4.06,10.179c-0.312,0.041-0.446,0.425-0.214,0.649l2.864,2.759l-0.724,3.947c-0.058,0.315,0.277,0.554,0.559,0.401l3.457-1.916l3.456,1.916c-0.419-0.238,0.56,0.439,0.56-0.401l-0.725-3.947l2.863-2.759C16.388,10.604,16.254,10.22,15.94,10.179M10.381,2.778h3.902l-1.536,6.977L12.036,9.66l-1.655-3.546V2.778z M5.717,2.778h3.903v3.335L7.965,9.66L7.268,9.753L5.717,2.778zM12.618,13.182c-0.092,0.088-0.134,0.217-0.11,0.343l0.615,3.356l-2.938-1.629c-0.057-0.03-0.122-0.048-0.184-0.048c-0.063,0-0.128,0.018-0.185,0.048l-2.938,1.629l0.616-3.356c0.022-0.126-0.019-0.255-0.11-0.343l-2.441-2.354l3.329-0.441c0.128-0.017,0.24-0.099,0.295-0.215l1.435-3.073l1.435,3.073c0.055,0.116,0.167,0.198,0.294,0.215l3.329,0.441L12.618,13.182z"></path></svg></div><span>Adventure Activities</span></a></li>	
                    <li><a href="#tab-services" class="cd-tabs__item cd-tabs__item"><div class="svg-area"><svg class="svg-icon" viewBox="0 0 20 20"><path fill="none" d="M7.93,4.509H9.62v1.689c0,0.233,0.189,0.422,0.422,0.422s0.422-0.189,0.422-0.422V4.509h1.689c0.233,0,0.423-0.189,0.423-0.422s-0.189-0.422-0.423-0.422h-1.689V1.975c0-0.233-0.189-0.422-0.422-0.422S9.62,1.742,9.62,1.975v1.689H7.93c-0.233,0-0.422,0.189-0.422,0.422S7.697,4.509,7.93,4.509 M18.489,8.311H1.595c-0.466,0-0.845,0.378-0.845,0.845V10c0,0.466,0.378,0.845,0.845,0.845h0.169l1.533,7.282l0.007-0.001c0.046,0.183,0.205,0.321,0.402,0.321h12.67c0.198,0,0.356-0.139,0.403-0.321l0.007,0.001l1.533-7.282h0.169c0.466,0,0.845-0.379,0.845-0.845V9.155C19.334,8.689,18.955,8.311,18.489,8.311 M2.626,10.845H5.53l0.266,1.689H2.982L2.626,10.845z M3.16,13.379h2.769l0.267,1.689H3.515L3.16,13.379z M4.049,17.603l-0.355-1.689h2.636l0.267,1.689H4.049z M9.62,17.603H7.441l-0.267-1.689H9.62V17.603z M9.62,15.068H7.041l-0.267-1.689H9.62V15.068z M9.62,12.534H6.641l-0.266-1.689H9.62V12.534z M12.644,17.603h-2.179v-1.689h2.446L12.644,17.603zM13.043,15.068h-2.579v-1.689h2.845L13.043,15.068z M10.464,12.534v-1.689h3.245l-0.266,1.689H10.464z M16.035,17.603h-2.548l0.268-1.689h2.636L16.035,17.603z M16.569,15.068h-2.682l0.267-1.689h2.77L16.569,15.068z M17.103,12.534h-2.814l0.267-1.689h2.903L17.103,12.534z M18.489,10H1.595V9.155h16.895V10z"></path></svg></div><span>Services On Rent</span></a></li>
                </ul> <!-- cd-tabs__list -->
		    </nav>

		    <ul class="cd-tabs__panels">
			    <li id="tab-packages" class="cd-tabs__panel cd-tabs__panel--selected text-component">
                    <h2 class="c-title" ><?php echo $place;?></h2>
                    <div class="rating">
                        <?php
                            if($ratingOfPlace=='5'){
                                echo '<span class="filled">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>';
                            }
                            else if($ratingOfPlace=='4'){
                                echo '<span class="filled">&#x2605;&#x2605;&#x2605;&#x2605;</span><span>☆</span>';
                            }
                            else if($ratingOfPlace=='3'){
                                echo '<span class="filled">&#x2605;&#x2605;&#x2605;</span><span>☆☆</span>';
                            }
                            else if($ratingOfPlace=='2'){
                                echo '<span class="filled">&#x2605;&#x2605;</span><span>☆☆☆</span>';
                            }
                            else {
                                echo '<span class="filled">&#x2605;</span><span>☆☆☆☆</span>';
                            }
                        ?>

                        
                    </div>

                    <div class="row">
                        <div class="column column-12">
                            <div class="caro-title">
                                <p><span class="title">All Packages</span></p>    
                            </div>
                            <div class="caro owl-carousel owl-theme column-3">
                                <?php 
                                    $query = "SELECT * FROM `in_packages` WHERE `in_pkg_place` = '$place' AND `in_pkg_active`=1";
                                    $sdata = $this->xcontroller->searchQuery($query);
                                    if($sdata){
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
                                    }
                                    else{echo "Sorry ! Nothing is available;";}
                                    
                                ?> 
                                        
                            </div>
                        </div>
                    </div>
                </li>

                <li id="tab-visitings" class="cd-tabs__panel text-component">
                    <div class="row">
                        <div class="column column-12">
                            <div class="caro-title">
                                <p><span class="title">Nearest Visiting Points</span></p>    
                            </div>
                            <div class="caro owl-carousel owl-theme column-3">
                                
                                <?php 
                                    $query = "SELECT * FROM `in_visiting` WHERE (`in_vp_place` = '$place' OR `in_vp_seo` LIKE '%$place%') AND `in_vp_active`=1 ";
                                    $hData = $this->xcontroller->searchQuery($query);
                                    if($hData){
                                        foreach($hData as $key=>$val){
                                            echo   '<div class="caro-card caro-inline">
                                                        <a href="'.HOME.'vp/'.$val['in_vp_name'].'" class="caro-card-anchor">
                                                            <div class="card-img"><img src="'.URL."img".$val['in_vp_media']."/thumbs/".strtolower($val['in_vp_name']).'.jpg" width="100%"></div>
                                                            <div class="card-info">
                                                                <p class="item-title">'.$val['in_vp_name'].'</p>
                                                                <div class="item-info">
                                                                    <p align="center">'.$val['in_vp_zone'].'</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>';}
                                    }
                                    else{echo "Sorry ! Nothing is available here.";}
                                ?>
                                        
                            </div>
                        </div>
                    </div>
                </li>

                <li id="tab-adventures" class="cd-tabs__panel text-component">
                    <div class="row">

                        <div class="row">
                        <div class="column column-12">
                            <div class="caro-title">
                                <p><span class="title">Nearest Adventures Points</span></p>    
                            </div>
                            <div class="caro owl-carousel owl-theme column-3">
                                <?php 
                                    $query = "SELECT * FROM `in_adventures` WHERE `in_adv_place` = '$place' OR `in_adv_seo` LIKE '%$place%'";
                                    $aData = $this->xcontroller->searchQuery($query);
                                    if($aData){
                                        foreach($aData as $key=>$val){
                                            echo   '<div class="caro-card caro-inline">
                                                        <a href="'.HOME.'hotels/'.$val['in_adv_name'].'" class="caro-card-anchor">
                                                            <div class="card-img"><img src="'.URL."img/adventures/parks/".strtolower($val['in_adv_name'])."/thumbs/".strtolower($val['in_adv_name']).'.jpg" width="100%"></div>
                                                            <div class="card-info">
                                                                <p class="item-title">'.$val['in_adv_name'].'</p>
                                                                <div class="item-info">
                                                                    <p align="center">'.$val['in_adv_zone'].'</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>';}
                                    }
                                    else{echo "Sorry ! Nothing is available here.";}

                                ?>
                                        
                            </div>
                        </div>
                    </div> 
                </li>

                <li id="tab-services" class="cd-tabs__panel text-component">
                    <div class="row">

                        <div class="row">
                        <div class="column column-12">
                            <div class="caro-title">
                                <p><span class="title">Available Services On Rent</span></p>    
                            </div>
                            <div class="caro owl-carousel owl-theme column-3">
                            <?php 
                            $query = "SELECT * FROM `in_sor` WHERE `in_sor_priority` = 'recommended' AND `in_sor_active`=1";
                            $data = $this->xcontroller->searchQuery($query);
                                if($data){
                                    foreach($data as $key=>$val){
                                        echo '<div class="caro-card caro-inline">
                                                <a href="'.HOME.'sor/'.$val['in_sor_name'].'" class="caro-card-anchor">
                                                    <div class="card-img"><img class="owl-lazy" data-src="'.URL."img".strtolower($val['in_sor_media']).'/thumbs/'.strtolower($val['in_sor_name']).'.jpg" width="100%"></div>
                                                    <div class="card-info">
                                                        <p class="item-title">'.$val['in_sor_name'].'</p>
                                                        <div class="item-info">
                                                            <p align="center" style="float : left; color : #ffc252;">Price : '.$val['in_sor_price'].'</p>
                                                            <p align="center" style="float:right; text-decoration : line-through; color : #ccc;">MRP : '.$val['in_sor_discount'].'</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>';}
                                }

                                        else{echo "Sorry ! Nothing is available here.";}

                            ?>          
                    </div>
                        </div>
                    </div>
                </li>

		    </ul> <!-- cd-tabs__panels -->
	    </div> <!-- cd-tabs -->
        <?php 
            if(isset($data[0]['in_place_post2'])){
                echo $data[0]['in_place_post2'];
            }
        
        ?>
        <div class="row">
            <div class="column column-12">
                <div class="caro-title">
                    <p><span class="title">Suggested Packages</span></p>    
                </div>
                <div class="caro owl-carousel owl-theme column-3">                    
                    <?php
                        $query = "SELECT * FROM `in_packages` WHERE  `in_pkg_seo` LIKE '%$place%' AND `in_pkg_active`=1";
                        $pData = $this->xcontroller->searchQuery($query);
					    if($pData){
                            foreach($pData as $key=>$val){
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
                        }
                    ?>
							
			    </div>
            </div>
        </div>
        <?php  
            if(isset($data[0]['in_place_post3'])){
                echo $data[0]['in_place_post3'];
            } 
            if(isset($data[0]['in_place_post4'])){
                echo $data[0]['in_place_post4'];
            }
            if(isset($data[0]['in_place_post5'])){
                echo $data[0]['in_place_post5'];
            }
        ?>
    </article>
    </div>