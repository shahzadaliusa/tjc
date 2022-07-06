<?php 
    class Vp extends Controller{
        function __construct(){
            parent::__construct();
        }

        function index($url0=false, $url1=false, $url2=false, $url3=false){
            if(!$url1 && !$url2 &&!$url3){
            //Only $url[0]
                $g = $this->model->indexFetch();
                $title = 'Invisiter | Visiting Points near Zone | Explore Visiting Points in Tourism Place';
                $description = 'Find Best Visiting Places | Explore Visiting Points Near a Tourism Place';
                $keywords = 'Visiting Points, Visiting Places';
                $this->View->render('vp/index',$g,$title,$description,$keywords);
                return false;
            }

            else if ($url1 && !$url2){//Case 2 : When $url[1] available but not $url[2]
            //When only the $url[1] and $url[2] is set
                $seo = $this->generateQuery('in_visiting','in_vp_name',$url1);
                $title = $seo[0]['in_vp_title'];
                $description = $seo[0]['in_vp_desc'];
                $keywords = $seo[0]['in_vp_kwd'];
                $this->View->render('vp/item',$seo,$title,$description,$keywords);
                
                return false;
            }
      
        }
    }
?>