<?php
    class Index extends Controller{
        public function __construct(){
           parent::__construct();
            
        }

        
        function index(){
            $title = 'Corbett National Park | Nainital Visiting Places | Uttarakhand Tours';
            $description = 'We provide you the best tour and travels packages.';
            $keywords = 'Corbett Bookings, Nainital Bookings';
            
            $this->View->render('home/home',false,$title,$description,$keywords);
            
        }
    }
?>