<?php 
class Packages_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function indexFetch(){
        $sth = $this->db->prepare("SELECT * FROM in_packages");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        $count = $sth->rowCount();
        if($count > 0){
            return $result;
        }
    }

    function dataFetch($arg1, $arg2){
        $sth = $this->db->prepare("SELECT * FROM in_places WHERE in_place_zone='$arg1' AND in_place_name='$arg2'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result;
    }

    function pkgDetails($arg1,$arg2){
      $sth = $this->db->prepare("SELECT * FROM in_packages WHERE in_pkg_place='$arg1' AND in_pkg_name='$arg2'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result;  
    }

    function galleryFetch($arg1,$arg2){
        $sth = $this->db->prepare("SELECT * FROM in_gallery WHERE in_gallery_zone='$arg1' AND in_gallery_place='$arg2'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result;  
    }

    function hotelFetch($arg1,$arg2){
        $sth = $this->db->prepare("SELECT * FROM in_hotels WHERE in_hotel_zone='$arg1' AND in_hotel_place='$arg2'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result;  
    }
    function xhrAbout($data){
        $string = $_POST[$data];
        $sth = $this->db->prepare("SELECT in_zone_about FROM in_zone WHERE in_zone_name='$string'");
        $data = $sth->execute();
    }
}