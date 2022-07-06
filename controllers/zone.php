<?php

    class Zone extends Controller{
        public function __construct(){
            parent::__construct();
            
        }

        function index($arg=false){
            if(!$arg){
                $this->View->render('zone/zone');
            }
            else{
                $this->View->render('zone/zone', $arg);
            }
            
        }

        

       
            
         
    } 

?>