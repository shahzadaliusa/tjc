<?php 
    class Sor extends Controller{
        function __construct(){
            parent::__construct();
        }

        function index($url0=false, $url1=false, $url2=false, $url3=false){
            if(!$url1 && !$url2 &&!$url3){
            //Only $url[0]
                $g = $this->model->indexFetch();
                $title = 'Invisiter Services| Buy Items on Rent | Services on Rent | Tourism Rental Services';
                $description = 'Invisiter Services on Rent for Adding in your package at anytime';
                $keywords = 'Camera on Rent, DSLR on Rent, Taxi on Rent, Hire a Driver';
                $this->View->render('sor/index',$g,$title,$description,$keywords);
                return false;
            }

            else if ($url1 && !$url2){//Case 2 : When $url[1] available but not $url[2]
            //When only the $url[1] and $url[2] is set
                $seo = $this->generateQuery('in_sor','in_sor_name',$url1);
                $title = $seo[0]['in_sor_title'];
                $description = $seo[0]['in_sor_desc'];
                $keywords = $seo[0]['in_sor_kwd'];
                $this->View->render('sor/item',$seo,$title,$description,$keywords);
                
                return false;
            }
      
        }
    }
?>