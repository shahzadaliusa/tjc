<?php

    class Model{
        function __construct(){
            $this->db= new Database();
        }
    

    public function filterFetch($query){
            
            $sth = $this->db->prepare($query);
            $sth->execute();
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $result = $sth->fetchAll();
            $count = $sth->rowCount();
             if($count > 0){
                return $result;
            }
            else{return false;}
    }
    public function seoVisitingPoint($where1,$where2){
        $sth = $this->db->prepare("SELECT `in_place_kwd`,`in_place_title`,`in_place_desc` FROM `in_places` WHERE `in_place_zone`='$where1' AND `in_place_name`='$where2'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result;
    }
    public function seoPackages($where1,$where2){
        $sth = $this->db->prepare("SELECT `in_pkg_kwd`,`in_pkg_title`,`in_pkg_desc` FROM `in_packages` WHERE `in_pkg_zone`='$where1' AND `in_pkg_place`='$where2'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result;
    }

    public function seoViewPackage($where1,$where2){
        $sth = $this->db->prepare("SELECT `in_pkg_kwd`,`in_pkg_title`,`in_pkg_desc` FROM `in_packages` WHERE `in_pkg_place`='$where1' AND `in_pkg_name`='$where2'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result;
    }
    public function seoZone($query){
        
        $sth = $this->db->prepare("SELECT `in_zone_kwd`,`in_zone_title`,`in_zone_desc` FROM `in_zones` WHERE `in_zone_name`='$zone'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result; 
    }
}
    

?>