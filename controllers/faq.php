<?php
    class Faq extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $title = 'Invisiter | Frequently Asked Questions';
            $description = 'Find out important questions and queries that may arise when you want to travel in corbett national park and other hill stations.';
            $keywords = 'FAQ corbett national park, FAQ nainital tours';
            $this->View->render('company/faq',false,$title,$description,$keywords);

        }
    }
?>