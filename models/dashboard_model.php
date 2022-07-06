<?php
    class Dashboard_Model extends Model{
        function __construct(){
            parent::__construct();
        }

         

        function insertQuery($string){
             $sth = $this->db->prepare($string);
             $sth->execute();
             echo "Your Complaint is submitted successfully" ;
                echo "<a href='".HOME."'>HOME PAGE</a>";
        
        }  
    }
?>