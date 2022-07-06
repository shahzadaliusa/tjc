<?php
    Class Query extends Controller{
        function __construct(){
            parent::__construct();
        }
        public function index(){
           if(!empty($_POST['name']&&$_POST['place']&&$_POST['visiterCount']&&$_POST['mobile']&&$_POST['email']&&$_POST['message'])){
            $name = $_POST['name'];
            $place = $_POST['place'];
            $visitor = $_POST['visiterCount'];
            $mobile= $_POST['mobile'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $type = 'query';
            $query = "INSERT INTO `in_queries` (`in_query_id`, `in_query_name`, `in_query_type`, `in_query_visiter`, `in_query_place`, `in_query_mobile`, `in_query_email`, `in_query_message`) VALUES (NULL, '$name', '$type', '$visitor', '$place', '$mobile', '$email', '$message')";
            $this->model->insertQuery($query);
           }
           else{
               echo "Please fill all informations.";
               echo "<a href='".HOME."'>HOME PAGE</a>";
           }
        }

    }
?>