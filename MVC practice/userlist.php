<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdata</title>
    <style>
        *{
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        table{
            border: 1px solid black;
            margin: 0 auto;
            width: 80%; 
         }
        tr,th{
            border: 1px solid black;
            width: 25%;
        }
        
        a{
            text-decoration: none;
            background-color: black;
            color: whitesmoke;
            font-size: 25px;
            margin-left: 600px;
            
        }
    </style>
</head>
<body>
            <hr>
            <a href="index">BACK TO HOME</a>
            <hr>

                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <!-- <th>Hobbies</th> -->
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                <?php foreach ($userdata as $value) { ?>
                    <tr>
                        <form method="post" action="" enctype="multipart/form-data">

                            <th><?php echo $value->name ?></th>
                            <th><?php echo $value->email ?></th>
                            <th><?php echo $value->address ?></th>
                            <th><?php echo $value->gender ?></th>
                            <th><?php echo "<img src='$value->image' alt='' height='100px' width='100px'>" ?></th>
                            <th>
                            
                            <button name="del" style="background-color: red; color:white" type="submit" value="<?php echo $value->id ?>">Delete </button>
                            
                        </form>
                        <form action="updateuser" method="post" enctype="multipart/form-data">

                            <button type="submit"  value="<?php echo $value->id; ?>" name="upd" class="btn btn-primary">Update</button>
                            
                        </tr>
                    </form>
                    <?php } ?>
                </table>
</body>
</html>