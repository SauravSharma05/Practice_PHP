<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .adduser {
            border: 1px solid black;
            width: 300px;
            margin: 40px auto;
            color: red;
            background-color: khaki;
        }

        .box {
            width: 60%;
            margin: 0 auto;
        }

        img {
            height: 70px;
            width: 70px;
        }

        .del {
            background-color: crimson;
            color: white;
        }

        .edit {
            background-color: yellowgreen;
        }

        .view {
            background-color: orange;
        }
        body{
            background-color: lightpink;
        }
    </style>
</head>

<body>

    <?php
    try {
        $connection = new mysqli("localhost", "root", "", "crud_prac");   //connecting the database
        // echo "connection done";
    } catch (\Throwable $th) {
        echo "can't connect to database";
    }


    //getting users data
    $sql = "SELECT * FROM users";
    $sqlex = $connection->query($sql);
    // echo "<pre>";
    // print_r($sqlex);

    if ($sqlex->num_rows > 0) {
        while ($data = $sqlex->fetch_object()) {
            $userdata[] = $data;
        }
    } else {
        //
    }

    //  print_r($userdata);   
    //data is here now

    //user data delete

    if (isset($_REQUEST['del'])) {
        // print_r($_REQUEST);
        $id = $_REQUEST['del'];
        $sql = "DELETE FROM users WHERE id= $id";
        $sqlex = $connection->query($sql);
        header('location:home.php');
    }


    ?>
    <div class="adduser">
        <p class="text-center mb-0"><b>ADD NEW USER : </b><a href="register.php">CLICK HERE </a></p>
    </div>
    <hr>

    <div class="box">
        <table class="table table-sm table">
            <thead>
                <tr>
                    <th scope="col">S.no</th>

                    <th scope="col">Profile Pic</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <?php foreach ($userdata as $key => $value) { ?>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><img src="<?php echo $value->image; ?>" alt=""></td>
                    <td><?php echo $value->name; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td><?php echo $value->dept; ?></td>

                    <form action="" method="post">
                        <td><button class="del" name="del" type="submit" value="<?php echo $value->id; ?>">delete</button>
                    </form>
                    <a href="edit(1).php?id=<?php echo $value->id; ?>"><button href="" class="edit">edit</button>
                    </a>
                    <a href="profilemy.php?id=<?php echo $value->id; ?>"><button href="" class="view">View Profile</button></td>
                    </a>
                </tr>
            <?php } ?>
        </table>
    </div>


</body>

</html>

<?php
if (isset($_REQUEST['edit'])) {
    print_r($_REQUEST);
}

?>