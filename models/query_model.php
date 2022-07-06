<?php
    class Query_Model extends Model{
        function __construct(){
            parent::__construct();
        }

        function findModule($page,$colStr,$tabStr,$query){
            $sth = $this->db->prepare($query);
            $sth->execute();
        
            $returnType = $sth->setFetchMode(PDO::FETCH_ASSOC);
            $result = $sth->fetchAll();

            $this->View = new View();
            $this->View->renderModule($page,$colStr,$tabStr,$result);
        } 

        function insertQuery($string){
             $sth = $this->db->prepare($string);
             $sth->execute();
             echo "Your Query is submitted successfully";
             echo "<a href='".HOME."'>HOME PAGE</a>";
        
        
        }  
    }
?>