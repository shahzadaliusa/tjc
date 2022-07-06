<?php 
class Index_Model extends Model{
    public function __construct(){
        parent::__construct();
        
        
    }

    public function filters($arg1,$arg2,$arg3){
        $tableName = 'in_'.$arg1;
        $columnName = 'in_'.$arg2;
        $columnValue = $arg3;
        $sth = $this->db->prepare("SELECT * FROM '$tableName' WHERE '$columnName'='$columnValue'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        return $result; 
    }

    
    }
   

?>