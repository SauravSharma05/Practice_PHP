<?php
header('Content-Type: application/json');



$data = json_decode(file_get_contents("php://input"),true);

$name = $data['name'];
$email = $data['email'];
$dept = $data['dept'];

include "config.php";

$sql = "insert into users(name,email,dept) values('{$name}','{$email}','{$dept}')";
$run = $connection->query($sql);



if($run){
	echo json_encode(array('message' => ' Record Inserted.', 'status' => true));

}else{

 echo json_encode(array('message' => ' Record Not Inserted.', 'status' => false));
}
?>