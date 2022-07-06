<?php
    class About extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $title = 'Invisiter | About our Services of Tour and Travels';
            $description = 'We are for providing you Safari, Services on Rent and Advetures Activities';
            $keywords = 'About Invisiter.com';
            $this->View->render('company/about',false,$title,$description,$keywords);

        }
    }
?>