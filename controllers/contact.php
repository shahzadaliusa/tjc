<?php
    class Contact extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $title = 'Invisiter | Customer Support | Contact Us';
            $description = 'We are here to provide you facilities and help 24X7';
            $keywords = 'Invisiter Customer Care';
            $this->View->render('company/contact',false,$title,$description,$keywords);

        }
    }
?>