<?php
    class Errors extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $this->View->render('errors/errors');

        }
    }
?>