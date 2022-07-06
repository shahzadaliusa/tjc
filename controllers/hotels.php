<?php 
    class Hotels extends Controller{
        function __construct(){
            parent::__construct();
        }

        function index($url0=false, $url1=false, $url2=false, $url3=false){
            if(!$url1 && !$url2 &&!$url3){
            //Only $url[0]
                $g = $this->model->indexFetch();
                $title = 'Invisiter Hotels &amp; Resorts| Corbett Resorts | Nainital Hotels | Uttarakhand Hotel Bookings';
                $description = 'All Places that invisiter covers are in the page. You can Choose to Book Packages, Choose Hotels,
                Book Services on rent and More...';
                $keywords = 'Nainital City, Dhikala, Jim Corbett National Park, Ramnagar';
                $this->View->render('hotels/index',$g,$title,$description,$keywords);
                return false;
            }

            else if ($url1 && !$url2){//Case 2 : When $url[1] available but not $url[2]
            //When only the $url[1] and $url[2] is set
                $seo = $this->generateQuery('in_hotels','in_hotel_name',$url1);
                $title = $seo[0]['in_hotel_title'];
                $description = $seo[0]['in_hotel_desc'];
                $keywords = $seo[0]['in_hotel_kwd'];
                $this->View->render('hotels/item',$seo,$title,$description,$keywords);
                
                return false;
            }
      
        }
    }
?>