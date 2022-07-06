<?php
    class Team extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $this->View->render('company/team');

        }
    }
?>