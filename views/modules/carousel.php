<?php
    foreach($result as $x=>$y){
        echo '
            <div class="owl-item">
            <div class="grid-image">
            <img src="data:image/jpeg;base64,'.base64_encode($y[$colStr[3]]).'">
            </div>        
            <div class="grid-title">
                <a href="http://localhost/mvc/place/find/'.$y[$colStr[0]].'">'.$y[$colStr[0]].'</a>
             </div>
            </div>';    
    }
?>

<!--since we need here index values for accessing particular image as in_place_thumb or in_zone_thumb etc so

        //1. iterate our $colStr variable
        // echo $colStr[0]; ..............the name argument 
        //echo $colStr[1];................the zone argument
        //echo $colStr[2];..................the caT argument
        //echo $colStr[3];..................the thumb argument
        //REMEMBER THE ORDER OF PASSING DATABASE COLUMNS OTHERWISE DATA WILL BE DISTURBED ON VIEWS
        //ALSO DONT ALLOW MULTIPLE COLUMNS TO BE SPACED AFTER COMMA SEPARATION OF COLUMNS
        //THIS IS ALL DONE ON HOME PAGE VIEW FOR NOW -->