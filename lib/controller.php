<?php

class Controller{
    function __construct(){
        $this->View = new View();
       
    }

    public function loadModel($name){
        $path = 'models/'.$name.'_model.php';
        if(file_exists($path)){
            require 'models/'.$name.'_model.php';
            $modelName = $name.'_model';
            $this->model = new $modelName();
        }
    }

    public function generateQuery($arg1,$arg2=false,$arg3=false){
        if($arg2 && $arg3){
            $query = "SELECT * FROM `$arg1` WHERE `$arg2`='$arg3'";
            $this->xmodel = new Model();
            $g = $this->xmodel->filterFetch($query);
            return $g;
        }
        else if(!$arg2 && !$arg3){
            $query = "SELECT * FROM `$arg1`";
            $this->xmodel = new Model();
            $g = $this->xmodel->filterFetch($query);
            return $g;
        }
        
    }

    public function searchQuery($query){
            $this->xmodel = new Model();
            $g = $this->xmodel->filterFetch($query);
            return $g;
        }
        
    }

    

    

    

    




?>