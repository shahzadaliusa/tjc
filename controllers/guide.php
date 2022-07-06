<?php
    class Guide extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $title = 'Invisiter | Tour and Travel Guide';
            $description = 'Lear this tour and travel guide for corbett national park, nainital and other tourism places.';
            $keywords = 'tour and travel guide';
            $this->View->render('company/guide',false,$title,$description,$keywords);

        }
    }
?>