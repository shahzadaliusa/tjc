<?php
    class Payment extends Controller{
        public function __construct(){
            parent::__construct();
        }

        function index(){
            $title = 'Invisiter | Your Payment Issues and Guide';
            $description = 'Dont worry about your payment transfer and refund. We care of it.';
            $keywords = 'Invisiter Payments';
            $this->View->render('company/payment',false,$title,$description,$keywords);

        }
    }
?>