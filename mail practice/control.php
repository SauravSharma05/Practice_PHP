<?php 

include "model.php";
class controller extends model
{
        public function __construct()
        {
            $url = $_SERVER['PATH_INFO'];
            model::__construct();
            switch ($url) 
            {

                    case "/index":
                    
                    if(isset($_REQUEST['submit']))
                    {
                                
                        // print_r($_REQUEST);
                        // exit;
                        $userdata = $this->login();
                    }
                    include "index.php";
                    break;


                    
                    case "/forgotpass":
                    
                    include "forgotpass.php";
                    break;




            }
        }
    }


    $obj = new controller;
