<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"), true);

$user_id = $data['eid'];

include "config.php";

$sql = "SELECT * FROM users WHERE id = {$user_id}";

$run = $connection->query($sql);

if(mysqli_num_rows($run) > 0)
{
    $output = mysqli_fetch_all($run, MYSQLI_ASSOC);         
    echo json_encode($output);
}
else{

 echo json_encode(array('message' => 'No data Found.', 'status' => false));

}    
