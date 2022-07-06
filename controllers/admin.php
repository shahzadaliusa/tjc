<?php
    class Admin extends Controller{
        public function __construct(){
            parent::__construct();
        }


        public function index(){
            
                $this->View->render('login/login');
            
        }


        public function login($arg){
            
        }
    }

?>