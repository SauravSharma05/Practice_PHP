<?php
header('Content-Type: application/json');



$data = json_decode(file_get_contents("php://input"),true);

$name = $data['name'];
$email = $data['email'];
$dept = $data['dept'];

include "config.php";

$sql = "insert into users(name,email,dept) values('{$name}','{$email}','{$dept}')";
$run = $connection->query($sql);




?>