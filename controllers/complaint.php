<?php
    class Complaint extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $title = 'Invisiter | Complaint Center';
            $description = 'Complaints About Any Service Issue | Payments Issue Etc.';
            $keywords = '';
            $this->View->render('company/complaint',false,$title,$description,$keywords);

        }
    }
?>