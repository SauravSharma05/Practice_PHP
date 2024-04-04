<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');




include "config.php";




$sql = "SELECT * from users";
$run = $connection->query($sql);

if(mysqli_num_rows($run) > 0)
{
    $output = mysqli_fetch_all($run, MYSQLI_ASSOC);
    json_encode($output);
}


?>