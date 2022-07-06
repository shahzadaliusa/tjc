<div class="wrapper">
    <div class="header-nav">
        <ul>
            <li><a href="<?php echo HOME.'places/'.$data[0]['in_place_zone'].'/visitingPoints/'.$data[0]['in_place_name'];?>">About</a></li>
            <li><a href="<?php echo HOME.'places/'.$data[0]['in_place_zone'].'/packages/'.$data[0]['in_place_name'];?>">Packages</a></li>
 
        </ul>
    </div>
<?php $mediaPath = $data[0]['in_place_media']; $placePath = $data[0]['in_place_name'];?>
    <div class="icolumn icolumn-12" style="padding: 0 !important; box-shadow: none !important; float : none !important;" > 
            <div id="home-banner" class="owl-carousel owl-theme banner-6"  >
                <div class="item"><img src="<?php echo URL;?>img/places<?php echo $mediaPath;?>/banner/1.jpg"></div>
            </div>
         </div>
    <div class="bread"></div>
<?php
    foreach ($data as $key=>$val){
        echo $val['in_place_about'];
    }
?>
    <!--Take the about code here from database-->
</div>