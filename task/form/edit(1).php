<?php
    try {
        $connection = new mysqli("localhost", "root", "", "crud_prac");   //connecting the database
    } catch (\Throwable $th) {
        echo "can't connect to database";}
        $id = $_REQUEST['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $sqlex = $connection->query($sql);
    if ($sqlex->num_rows > 0) {
        while ($data = $sqlex->fetch_object()) {
            $userdata[] = $data;}} else {}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <style>
        .formbox {
            border: 1px solid blue;
            width: 50%;
            margin: 0 auto;
            background-color: lightgreen;

        }

        .name {
            border: 1px solid red;
            margin: 25px auto;
            width: 80%;
            height: 60px;
            display: flex;
            background-color: lightblue
        }
        
        .email {
            
            background-color: lightblue;
            display: flex;
            border: 1px solid red;
            margin: 10px auto;
            width: 80%;
            height: 60px;

        }
        
        .dept {
            
            background-color: lightblue;
            border: 1px solid red;
            margin: 25px auto;
            display: flex;
            width: 80%;
            height: 60px;

        }
        .imagy{
            
            background-color: lightblue;
            border: 1px solid red;
            margin: 20px auto;
            width: 80%;
            display: flex;
            
        }
        .but{
            margin: 20px auto;
            border: 1px solid red;
            display: flex;
            height: 50px;
            width: 150px;
            border-radius: 20px;
        }
        button{
            
            border-radius: 20px;
            width: 100%;
            height: 100%;
            background-color: orange;
            font-size: 18px;
            font-weight: bolder;

        }

        .p1 {
            display: inline;
            font-size: 18px;
            margin: 20px 10px;
            font-weight: bolder;
        }

        .i1 {
            margin: 8px;
        }
        label{
            margin: 20px 15px;
        }
        img{
            height: 100px;
            width: 100px;
            margin: 20px 100px;
        }
        a{
            margin: 50px;
            color: red;
            background-color: khaki;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <hr>
    <p class="text-center mb-0">Back to homepage : <a href="home.php">CLICK HERE </a></p>
    <hr>
    <?php foreach ($userdata as $value) { ?>

<form action="" class="shadow p-4" method="post" enctype="multipart/form-data">

    <div class="formbox">
        <div class="name">
            <p class="p1">Name : </p>
            <input type="text" class="i1" value="<?php echo $value->name; ?>" name="name" id="name">
        </div>
        <div class="email">
            <p class="p1">Email : </p>
            <input type="text" class="i1" value="<?php echo $value->email; ?>" name="email" id="email">

        </div>
        <div class="dept">
            <p class="p1">Department : </p>
            <input type="text" class="i1" value="<?php echo $value->dept; ?>" name="dept" id="dept">
        </div>

        <div class="imagy">
            <label for="image"><b>Profile</b></label>
            <img src="<?php echo $value->image; ?>" alt="">
            <a href="editprofile.php?image=<?php echo $value->image; ?>">edit Image</a>
        </div>
        <div class="but">
        <button type="submit" value="<?php echo $value->id; ?>" name="edit" class="btn btn-primary">Update</button>
        </div>

    </div>
    </form>
                <?php } ?>

</body>

</html>
<?php
if (isset($_REQUEST['edit'])) {
   $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $dept = $_REQUEST['dept'];
    $id = $_REQUEST['id'];
     $sql = "UPDATE users SET name='$name',
                email='$email',
                dept='$dept'
                 WHERE id =$id;";
    $sqlex = $connection->query($sql);
    header('location:home.php');} 
    else {}
?>