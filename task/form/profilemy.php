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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>

        .contain{
            display: flex;
            justify-content: center;
            border: 5px solid blueviolet;
            border-radius: 20px;

        }
        .formbox{
            border: 5px solid black;
            width: 70%;
            height: 500px;
            margin: 70px;
            background-color: skyblue;
            border-radius: 20px;

        }
        .name{
            display: inline;
            margin: 0 auto;
            width: 70%;
            border: 1px solid crimson;
            display: flex;
            background-color: darkseagreen;
            border-radius: 20px;
            
        }
        p{
            margin: 20px;
        }
        .image{
            margin: 0 auto;
            width: 350px;
        }
        img{

            height: 100px;
            width: 100px;
            
        }   
        *{
            font-family: serif;
        }
    </style>
</head>
<body>
        <div class="contain">
            <p class="text-center mb-0">Back to homepage : <a href="home.php">HOMEPAGE</a></p>
            <div class="formbox">
            <?php foreach ($userdata as $value) { ?>

                <div class="image">
                <img src="<?php echo $value->image; ?>" alt="">
                </div>
                    <div class="name">
                    <p><b>NAME  : </b><?php echo $value->name; ?></p>
                    </div>
                    <div class="name">
                    <p><b>EMAIL  : </b><?php echo $value->email; ?></p>
                    </div>
                    <div class="name">
                    <p><b>DEPARTMENT  : </b><?php echo $value->dept; ?></p>
                    </div>

                    <?php } ?>

            </div>
        </div>

    
</body>
</html>