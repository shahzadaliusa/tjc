<?php
    class Login extends Controller{
        public function __contruct(){
            parent::__construct();
        }

        public function index(){
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $_POST['username'];
                $password = md5($_POST['password']);

                $query = "SELECT * FROM `co_user_cred` WHERE `co_user_uname`='$username' AND `co_user_passwd`='$password'";
                $result = $this->model->loginQuery($query);
                if($result===1){
                    $this->View->render('login/dashboard');
                }
                else{echo "Please Enter Valid Details";}
            }
     }
}

?>