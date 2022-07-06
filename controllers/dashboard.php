<?php
    class Dashboard extends Controller{
        public function __construct(){

        }

        public function index(){
            $url = isset($_GET['url'])?$_GET['url']:null;
            $url = rtrim($url,'/');
            $url = explode('/', $url);

            if($url[1]==='DVbooking'){
                $this->DVbooking();
            }
            else if($url[1]=='NSbooking'){
                $this->NSbooking();
            }
            else{
                return 0;
            }

        }

        public function query(){
            
        }

        public function complaints(){

        }

        public function DVbooking(){
            
            /*
            Copyright 2011 3e software house & interactive agency

            Licensed under the Apache License, Version 2.0 (the "License");
            you may not use this file except in compliance with the License.
            You may obtain a copy of the License at

                http://www.apache.org/licenses/LICENSE-2.0

            Unless required by applicable law or agreed to in writing, software
            distributed under the License is distributed on an "AS IS" BASIS,
            WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
            See the License for the specific language governing permissions and
            limitations under the License.
            */


            require_once "./webdriver/phpwebdriver/WebDriver.php";

            $webdriver = new WebDriver("localhost", "4444");
            $webdriver->
            $webdriver->connect("chrome");                            
            $webdriver->get("http://google.com");
            $element = $webdriver->findElementBy(LocatorStrategy::name, "q");
            if ($element) {
                $element->sendKeys(array("php webdriver" ) );
                $element->submit();
            }

            $webdriver->close();


            $loginID = $_POST['loginID'];
            
        }

        public function NSbooking(){
            
        }
    }

?>