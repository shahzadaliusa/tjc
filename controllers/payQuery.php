<?php
    Class payQuery extends Controller{
        function __construct(){
            parent::__construct();
        }
        public function index(){
           if(!empty($_POST['name']&&$_POST['holder']&&$_POST['account']&&$_POST['mobile']&&$_POST['amount']&&$_POST['txn']&&$_POST['message'])){
            $name = $_POST['name'];
            $holder = $_POST['holder'];
            $account = $_POST['account'];
            $mobile= $_POST['mobile'];
            $amount = $_POST['amount'];
            $txn = $_POST['txn'];
            $message = $_POST['message'];
            $type = 'complaint';
            $query = "INSERT INTO `in_payments` (`in_pay_id`, `in_pay_name`, `in_pay_holder`, `in_pay_account`, `in_pay_mobile`, `in_pay_amount`, `in_pay_txn`, `in_pay_message`) VALUES (NULL, '$name', '$holder', '$account', '$mobile', '$amount', '$txn', '$message')";
            $this->model->insertQuery($query);
           }
           else{
               $home = HOME;
               echo "Please fill all informations.";
               echo "<a href='".HOME."'>HOME PAGE</a>";
           }
        }

    }
?>