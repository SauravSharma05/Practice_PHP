<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdata</title>
    <style>
        table{
            border: 1px solid black;
            margin: 0 auto;
            width: 50%;
            
        }
        td,tr,th{
            border: 1px solid black;
            width: 33%;

        }
        a{
            text-decoration: none;
            background-color: red;
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
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                <?php foreach ($userdata as $value) { ?>
                    <tr>
                        <form method="post" action="">

                            <td><?php echo $value->name ?></td>
                            <td><?php echo "<img src='$value->image' alt='' height='100px' width='100px'>" ?></td>
                            <td><button name="del" type="submit" value="<?php echo $value->id ?>">Delete</button><button>Update</button></td>
                        </tr>
                    </form>
                    <?php } ?>
                </table>
</body>
</html>