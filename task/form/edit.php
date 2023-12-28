<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        img {
            height: 70px;
            width: 70px;
        }
    </style>
</head>

<body style="background-color: khaki">
    <?php
    try {
        $connection = new mysqli("localhost", "root", "", "crud_prac");   //connecting the database
        // echo "connection done";
    } catch (\Throwable $th) {
        echo "can't connect to database";
    }
    //specific userdata
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
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

    <hr>
    <p class="text-center mb-0">Back to homepage : <a href="home.php">CLICK HERE </a></p>

    <hr>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-6 offset-md-3"> -->
            <!-- <div class="mb-3"> -->
            <h3>Update here </h3>
            <!-- </div> -->
            <?php foreach ($userdata as $value) { ?>

                <form action="" class="shadow p-4" method="post" enctype="multipart/form-data">
                    <!-- <div class="mb-3"> -->
                    <input type="text" class="form-control" value="<?php echo $value->name; ?>" name="name" id="name" placeholder="enter your name">
                    <!-- </div> -->
                    <!-- <div class="mb-3"> -->
                    <input type="email" class="form-control" value="<?php echo $value->email; ?>" name="email" id="email" placeholder="enter email here">
                    <!-- </div> -->

                    <!-- <div class="mb-3"> -->
                    <input type="dept" class="form-control" value="<?php echo $value->dept; ?>" name="dept" id="dept" placeholder="department name">
                    <!-- </div> -->
                    <div class="form-group">
                        <label for="image">Profile pic</label>
                        <img src="<?php echo $value->image; ?>" alt="">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <button type="submit" value="<?php echo $value->dept; ?>" name="edit" class="btn btn-primary">Update</button>
                    </div>

                    <hr>

                </form>
            <?php } ?>
            <!-- </div> -->
        </div>
    </div>
</body>

</html>
<?php




//user update 

if (isset($_REQUEST['edit'])) {
    // echo "<pre>";
    // print_r($_REQUEST);
    // print_r($_FILES);

    // $from = $_FILES["image"]["tmp_name"];
    // echo $from;
    // $to = "../images/".time().$_FILES['image']['name'];
    // move_uploaded_file($from,$to);


    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $dept = $_REQUEST['dept'];
    // $image = $_REQUEST['image'];
    $id = $_REQUEST['id'];


    // echo $name;
    // $arraykey = array_keys($data);
    // $arraykey = implode(",",$arraykey);

    // $values = array_values($data);
    // $values = implode("','",$values);

    // echo "<br>values : ".$values;
    // echo "arraykeys : ".$arraykey;

    $sql = "UPDATE users SET name='$name',
                email='$email',
                dept='$dept'
                 WHERE id =$id;";
    //  echo $sql;
    $sqlex = $connection->query($sql);

    // $sql = "INSERT INTO users ($arraykey) VALUES ('$values')";
    // echo $sql;



    header('location:home.php');
} else {
    //
}




?>