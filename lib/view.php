<?php 
    class View{
        function __construct(){

        }

        function render($name, $data=false,$title=false,$description=false,$keywords=false){
            if($data!=false){
                $string = $data;
                require 'views/head.php';
                if($title!=false){
                    echo '<title>'.$title.'</title>';
                }
                if($description!=false){
                    echo '<meta name="description" content="'.$description.'">';
                }
                if($keywords!=false){
                    echo '<meta name="keywords" content="'.$keywords.'">';}
  			    require 'views/header.php';
                require 'views/'.$name.'.php';
                require 'views/footer.php';
            }
            else{
                
                require 'views/head.php';
                if($title!=false){
                    echo '<title>'.$title.'</title>';
                }
                if($description!=false){
                    echo '<meta name="description" content="'.$description.'">';
                }
                if($keywords!=false){
                    echo '<meta name="keywords" content="'.$keywords.'">';}
                require 'views/header.php';
                require 'views/'.$name.'.php';
                require 'views/footer.php';
                
             }
        }
            
        function renderModule($page,$colStr,$tabStr,$result){
            $colStr = explode(',',$colStr);  
            require 'views/'.$page.'.php';
            
        }
   }
        

?>