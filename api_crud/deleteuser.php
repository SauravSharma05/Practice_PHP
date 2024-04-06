<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$user_id = $data['id'];

include "config.php";

$sql = "DELETE FROM users WHERE id = {$user_id}";

$run = $connection->query($sql);

if($run){

	echo json_encode(array('message' => 'Student Record Deleted.', 'status' => true));

}else{

 echo json_encode(array('message' => 'Student Record not Deleted.', 'status' => false));

} 

?>