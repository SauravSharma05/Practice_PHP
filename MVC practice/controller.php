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
                    // echo "<pre>";
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

                case '/userdata':

                    $userdata = $this->show('user');
                    if(isset($_REQUEST['del']))
                    {   
                        $id = $_REQUEST['del'];
                        $this->delete('user',$id);
                        header('location:userdata');
                    }
                    
                    include 'userlist.php';
                    break;
                    
                    case '/updateuser':
                        if(isset($_REQUEST['upd']))
                        {   
                            $id = $_REQUEST['upd'];
                            // echo $id;
                            $data = $this->showwhere('user',$id);
                            include "updateuser.php";
                        }
                    

                
               
            }
        }
}

$obj = new controller;

?>