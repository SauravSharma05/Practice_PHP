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
                        $email= $_REQUEST['email'];
                        $address= $_REQUEST['address'];
                        $password= $_REQUEST['password'];
                        $gender= $_REQUEST['gender'];
                        // $hobby= $_REQUEST['hobby'];
                        $file = $_FILES['image']['tmp_name'];
                        $loc = "images/".time().$_FILES['image']['name'];
                        move_uploaded_file($file,$loc);
                    $data = array(
                        "name" => $name,
                        "email" => $email,
                        "address" => $address,
                        // "hobby" => $hobby,
                        "gender" => $gender,
                        "password" => $password,
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
                        else if (isset($_REQUEST['updatedata']))
                        {  
                            if($_FILES['image']['error'] == UPLOAD_ERR_OK  )
                            {
                                $image = "images/".time().$_FILES['image']["name"];
                                move_uploaded_file($_FILES['image']['tmp_name'],$image);
                            }
                            else
                            {
                               $image = $_REQUEST["image"];
                            }
                            $data = array(
                                "name"=>$_REQUEST["name"],
                                "email"=>$_REQUEST["email"],
                                "address"=>$_REQUEST["address"],
                                "gender"=>$_REQUEST["gender"],
                                // "hobby"=>$_REQUEST["hobby"],
                                "password"=>$_REQUEST["password"],
                                "image" => $image 
                            );
                            $response =$this->update("user",$data ,$_REQUEST["updatedata"]);
                            header("location:userdata");    
                        }
                        break;              
            }
        }
}

$obj = new controller;

?>