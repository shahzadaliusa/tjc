<?php
public function rating($rate){
                            if($rate=='5'){
                                return '&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>';
                            }
                            else if($rate=='4'){
                                return '&#x2605;&#x2605;&#x2605;&#x2605;';
                            }
                            else if($rate=='3'){
                                return '&#x2605;&#x2605;&#x2605;';
                            }
                            else if($rate=='2'){
                                return '<span class="filled">&#x2605;&#x2605;';
                            }
                            else {
                                return '<span class="filled">&#x2605;';
                            }
}

?>