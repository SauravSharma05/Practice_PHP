<?php

class model
{
    public $connection;
    public function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "ajaxcrud");
    }

    public function login()
    {
        if (isset($_REQUEST['submit'])) {
            $SQL = "SELECT * FROM admin WHERE email = '$_REQUEST[email]' AND password = '$_REQUEST[password]';";
            $sqlex = $this->connection->query($SQL);
            if ($sqlex->num_rows > 0) {
                $userdata = $sqlex->fetch_object();

                // if ($userdata->role_as == 1) {
                //     // echo "Admin side";
                //     header("location:../admin/dashh");
                // } else {
                //     header("location:index");
                // }
                
                echo "<script> alert('User VERIFIED...!!!')  </script>";

            } else {
                echo "<script> alert('Invalid Username or Password')  </script>";
            }
        } else {
            // echo "inside else";
        }
        return $userdata;
    }
}
