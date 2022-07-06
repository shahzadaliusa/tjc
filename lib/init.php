<?php

    class Init{
        function __construct(){
            
            //URL Identification

            $url = isset($_GET['url'])?$_GET['url']:null;
            $url = rtrim($url,'/');
            $url = explode('/', $url);


            //HOMEPAGE
            if(empty($url[0])){
                require 'controllers/index.php';
                $controller = new Index();
                $controller->loadModel('index');
                $controller->index();
                
                return false;
            }
            //OTHER PAGES
            $file = 'controllers/'.$url[0].'.php';
            if(file_exists($file)){
                require $file;
            }
            else{
                $this->errors();
                return false;
            }
            
            //CALLING URL'S CONTROLLER'S CONSTRUCTOR FUNCTION AND CREATING CONTROLLER'S OBJECT
            $controller = new $url[0]();

            $controller->loadModel($url[0]);


        if(isset($url[3])){
            if(method_exists($controller,$url[2])){
                $controller->index($url[0],$url[1],$url[2],$url[3]);
            }
            else{$controller->errors(); echo "Third level error";}
            return false;
        }
        else if(isset($url[2])){
            //which is a index page for packages hotels and visiting points
            if(method_exists($controller,$url[2])){
                $controller->index($url[1],false);
                $controller->{$url[2]}($url[1],false);
            }
            else{$controller->errors(); echo "Second level Error";}
            return false;
        }
        else if(isset($url[1])){
            //programming for each separate place in case Place controller like CNP, Ramnagar, Nainital etc Programmed
                $controller->index($url[0],$url[1]);
                return false;
        }
        else if(isset($url[0])){//index page or controller of each. Designed and rendered.
            $controller->index();
            return false;
        }
        else{
            $controller->errors();
            echo "First and Second level Errors";
        }
        }
        
           public function errors(){
            require 'controllers/errors.php';
            $controller = new Errors();
            $controller->index();
            return false;
            }
            public function rating($rate){
                if($rate=='5'){
                    return '&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>';
                }
                else if($rate=='4'){
                    return '&#x2605;&#x2605;&#x2605;&#x2605;';
                }
                else if($rate=='3'){
                    return '&#x2605;&#x2605;&#x2605;';
                }
                else if($rate=='2'){
                    return '<span class="filled">&#x2605;&#x2605;';
                }
                else {
                    return '<span class="filled">&#x2605;';
                }
}
    }

?>