<?php 

include "db.php";
    
        

    if($_POST['type']==1)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        $sql = "insert into crud (name,email,phone,city) values('$name','$email','$phone','$city')";

        $run = $conn->query($sql);

        if($run)
        {
            echo json_encode(array("status"=>200));
        }

        // $sqldata = "select * from crud";
        // $run = $conn->query($sqldata);
        // print_r($run);
    }

?>