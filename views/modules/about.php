<?php
    foreach($result as $x=>$y){
        echo '
            <div class="image-block">
                <img src="data:image/jpeg;base64,'.base64_encode($y[$colStr[2]]).'" />
            </div>'.$y[$colStr[3]];
               
    }
?>


