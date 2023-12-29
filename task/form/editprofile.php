<?php
try {    $connection = new mysqli("localhost", "root", "", "crud_prac");   //connecting the database
} catch (\Throwable $th) 
{}
$image = $_REQUEST['image'];
$sql = "SELECT * FROM users WHERE image='$image'";
$sqlex = $connection->query($sql);
if ($sqlex->num_rows > 0) {
    while ($data = $sqlex->fetch_object()) {
        $userdata[] = $data;}} 
else {}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <style>
        img {
            height: 100%;
            width: 100%;
        }

        .imagy {
            border: 2px solid red;
            width: 150px;
            height: 150px;
            margin: 0 auto;
            display: flex;

        }

        .change {
            border: 2px solid blue;
            width: 50%;
            height: 110px;
            margin: 10px auto;
            display: flex;
            background-color: khaki;
            border-radius: 30px;
        }

        .cont {

            border: 2px solid blue;
            width: 10%;
            height: 110px;
            margin: 10px auto;
            display: flex;
            border-radius: 30px;
        }

        button {
            border-radius: 30px;
            width: 100%;
            height: 100%;
            background-color: yellowgreen;
            font-size: 15px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        p {
            color: black;
            font-weight: bolder;
            margin-top: 45px;
            margin-left: 45px;
            font-size: 15px;
        }

        input {
            font-weight: bolder;
            font-size: 15px;
            margin: 45px;

        }
    </style>
</head>

<body>
        <hr>
    <p>Back to homepage : <a href="home.php">CLICK HERE </a></p>
    <hr>
    <?php foreach ($userdata as $value) { ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="imagy">
                <img src="<?php echo $value->image; ?>" alt="no image found">
            </div>
            <div class="change">
                <p>Choose new Profile pic : </p>
                <input type="file" name="image" id="image">
            </div>
            <div class="cont">
                <button name="reg" value="<?php echo $value->id; ?>">UPDATE PROFILE PIC</button>
            </div>
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