<?php
try {
    $connection = new mysqli("localhost", "root", "", "crud_prac");   //connecting the database
    // echo "connection done";
} catch (\Throwable $th) {
    echo "can't connect to database";
}
//specific userdata
$image = $_REQUEST['image'];

$sql = "SELECT * FROM users WHERE image='$image'";
$sqlex = $connection->query($sql);
echo "<pre>";
// print_r($sqlex);

if ($sqlex->num_rows > 0) {
    while ($data = $sqlex->fetch_object()) {
        $userdata[] = $data;
    }
} else {
    //
}

//  print_r($userdata);     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <style>
        img {
            height: 70px;
            width: 70px;
        }
    </style>
</head>
<body>

<?php foreach ($userdata as $value) { ?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="image">
        <img src="<?php echo $value->image; ?>" alt="">
    </div>
    
    <input type="file" name="image" id="image">
    <button name="reg" value="<?php echo $value->id; ?>">update profile pic </button>
    
    <?php } ?>
</form>
    
</body>
</html>

<?php 

if (isset($_REQUEST['reg'])) {
        // echo "<pre>";
        // print_r($_REQUEST);
        // print_r($_FILES);
        $id = $_REQUEST['reg'];
        $from = $_FILES["image"]["tmp_name"];
        // echo $from;
        $to = "../images/" . time() . $_FILES['image']['name'];
        move_uploaded_file($from, $to);

        // $to = $_REQUEST['image'];

        $sql = "UPDATE users SET image='$to'
         WHERE id =$id;";
//  echo $sql;
$sqlex = $connection->query($sql);
header('location:home.php');




    }
        ?>