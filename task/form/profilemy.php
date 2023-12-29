<?php
try {    $connection = new mysqli("localhost", "root", "", "crud_prac");   //connecting the database
} catch (\Throwable $th) {}
$id = $_REQUEST['id'];
$sql = "SELECT * FROM users WHERE id=$id";
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
    <title>Profile</title>
    <style>

        .contain{
            display: flex;
            justify-content: center;
            border: 1px solid lightcoral;

        }
        .formbox{
            border: 1px solid lightcoral;
            width: 70%;
            height: 500px;
            margin: 70px;
            background-color: khaki;
            border-radius: 20px;
            display: flex;
            flex-direction: column;

        }
        .name{
            display: inline;
            margin: 0 auto;
            margin-top: 50px;
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
            margin-top: 25px;
            margin-left: 450px;
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