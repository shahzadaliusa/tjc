<?php 
    class Packages extends Controller{
        function __construct(){
            parent::__construct();
        }

        function index($url0=false, $url1=false, $url2=false, $url3=false){
            if(!$url1 && !$url2 &&!$url3){
            //Only $url[0]
                $g = $this->model->indexFetch();
                $title = 'Invisiter | Corbett Tours | Nainital Tours | Uttarakhand Hill Station | Himalaya Views';
                $description = 'All Places that invisiter covers are in the page. You can Choose to Book Packages, Choose Hotels,
                Book Services on rent and More...';
                $keywords = 'Nainital City, Dhikala, Jim Corbett National Park, Ramnagar';
                $this->View->render('packages/index',$g,$title,$description,$keywords);
                return false;
            }

            else if ($url1 && !$url2){//Case 2 : When $url[1] available but not $url[2]
            //When only the $url[1] and $url[2] is set
                $seo = $this->generateQuery('in_packages','in_pkg_name',$url1);
                $title = $seo[0]['in_pkg_title'];
                $description = $seo[0]['in_pkg_desc'];
                $keywords = $seo[0]['in_pkg_kwd'];
                $this->View->render('packages/item',$seo,$title,$description,$keywords);
                
                return false;
            }
        /*    
        function index($url0=false, $url1=false, $url2=false, $url3=false){
            if(!$url1 && !$url2 &&!$url3){
            //Only $url[0]
                $g = $this->model->indexFetch();
                $this->View->render('packages/index',$g);
            }

            else if ($url1 && !$url2){//Case 2 : When $url[1] available but not $url[2]
            //When only the $url[1] and $url[2] is set
                if($arg1=='packages'){
                    $this->Packages($arg2);
                    return false;
                }
            }
            else if ($url1 && $url2 && $url3){
                //when both are set $url[1] and $url[3]
                if($url2=='viewPackage'){
                    $this->viewPackage($url1,$url3);
                    return false;
                }

                if($url2=='gallery'){
                    $this->Gallery($url1,$url3);
                }
                if($url2=='hotels'){
                    $this->Hotels($url1,$url3);
                    return false;
                }
                if($url2=='visitingPoints'){
                    $this->visitingPoints($url1,$url3);
                }
                if($url1=='ServicesOnRent'){
                    $this->SORs($url2);
                    return false;
                }

            }
            else echo "error index";
            
        }

        
        public function viewPackage($where1=false,$where2=false){
            if($where1 && $where2){
                $seo = $this->model->seoViewPackage($where1,$where2);
                $title = $seo[0]['in_pkg_title'];
                $description = $seo[0]['in_pkg_desc'];
                $keywords = $seo[0]['in_pkg_kwd'];
                $g = $this->model->pkgDetails($where1,$where2);
                $this->View->render('packages/item',$g,$title,$description,$keywords);
            }
            
        }

        public function errors(){
            echo "Controller Error";
        }
        function xhrAbout($string){
          
        
*/
        }
    }
?>