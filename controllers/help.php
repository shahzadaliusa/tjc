<?php
    class Help extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $this->View->render('help/help');

        }


        public function other($arg=false){
            require 'models/help_model.php';
            
            $model = new Help_Model();          
        }
    }


?>