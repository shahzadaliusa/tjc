<?php $this->xcontroller = new controller();
    $sor = $data[0]['in_sor_name'];
    $zone = $data[0]['in_sor_zone'];
    $place = $data[0]['in_sor_place'];
    $media = $data[0]['in_sor_media'];
    $rate = $data[0]['in_sor_rating'];
    $mrp = $data[0]['in_sor_discount'];
    $price = $data[0]['in_sor_price'];
    $discount = $mrp - $price;
    $percentage = round($discount*100/$mrp);
?>


<div class="wrapper">
    <div class="irow">
        <div class="icolumn icolumn-12" style="margin : 0!important;padding: 0 !important; box-shadow: none !important;">
                <a class="item"  href="#"><img style="width:100%;" src="<?php echo URL;?>img/sor/<?php echo $sor?>/banner/1.jpg" alt="<?php echo $sor;?>"></a>
        </div>
    </div>
    
    <article class="page-article">
        <div class="row">
            <div class="column column-8 booking-block" style="background : none; border : none; box-shadow : none;">
                <?php echo $data[0]['in_sor_about'];?>
            </div>
            
            <div class="column column-4 booking-form" style = "background : none;border : none; box-shadow : none; display : inline-block; text-align:center;">
                <div class="row">
                    <div class="column column-12 sticky-note" style="padding : 5%;">
                        <h2 style="text-align : center; font-family : 'Abel'; font-size : 2em;padding : 10px 0; border-bottom : 3px solid #ff6767;">Need Help?</h2>
                        <p>Call Us at Our 24X7 Helpline Number</p>
                        <p style="font-size : 3vw; color : #3cb878;">+91-8171151719<br/>+91-8126491043</p>
                        <div class="form-container">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--END OF DIV.ROW-->
        
        
        
        
    </article>
</div>