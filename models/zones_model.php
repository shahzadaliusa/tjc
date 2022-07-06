<?php
    class Zones_Model extends Model{
        function __construct(){
            parent::__construct();
        }

        function indexFetch(){
        $sth = $this->db->prepare("SELECT * FROM in_zones");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        $count = $sth->rowCount();
        if($count > 0){
            return $result;
        }

    }

    function itemFetch($table,$col,$val){
        $sth = $this->db->prepare("SELECT * FROM `$table` WHERE `$col`='$val'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        $count = $sth->rowCount();
        if($count > 0){
            return $result;
        }
    }
    }
?>