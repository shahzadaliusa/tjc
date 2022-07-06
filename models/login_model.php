<?php
    class Login_Model extends Model{
        function __construct(){
            parent::__construct();
        }

    
        function loginQuery($string){
            $sth = $this->db->prepare($string);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $result = $sth->execute();
            $data = $sth->fetchAll();
            $count = $sth->rowCount();
            return $count;
             
    }
}
?>