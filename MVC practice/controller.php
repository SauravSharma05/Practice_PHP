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
                case '/index':   
                    // print_r($_SERVER);
                    if(isset($_REQUEST['submit']))
                    {
                        $name= $_REQUEST['name'];
                        $file = $_FILES['image']['tmp_name'];
                        $loc = "images/".time().$_FILES['image']['name'];
                        move_uploaded_file($file,$loc);
                    $data = array(
                        "name" => $name,
                        "image" => $loc,
                    );
                    $this->insert('user',$data);
                    }
                include "index.php";
                    break;

                
               
            }
        }
}

$obj = new controller;

?>