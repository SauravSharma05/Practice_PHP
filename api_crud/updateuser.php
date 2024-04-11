<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$name = $data['name'];
$email = $data['email'];
$dept = $data['dept'];

include "config.php";

$sql = "UPDATE users SET name = '{$name}', email = {$email}, dept = '{$dept}' WHERE id = {$id}";

$run = $connection->query($sql);

if($run){
	echo json_encode(array('message' => 'users data Updated.', 'status' => true));
}else{
  echo json_encode(array('message' => 'users data not Updated.', 'status' => false));
}


?>