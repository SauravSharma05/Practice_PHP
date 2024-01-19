<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }
        fieldset{
            width: 50%;
            margin: 20px auto;
        }
        img{
            width: 100px;
            height: 100px;
        }
        input{
            width: 50%;
            border: 1px solid lightcoral;
            border-radius: 20px;
            height: 50px;
        }
        .boxa{
            display: flex;
            align-items: center;
            justify-content: center;
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
        <fieldset>
            <legend>update user form</legend>
            <form action="" enctype="multipart/form-data" method="post">

                <?php 
                if(isset($data))
                {

                    foreach ($data as $value) 
                    {?>
                    
                    <div class="boxa">
                        
                        <input type="text" value="<?php echo $value->name ?>" name="name" id="">
                        <img src="<?php echo $value->image ?>" alt="">
                        <input type="file" name="image" id="image">
                        <button name="updatedata" value="<?php echo $value->id  ?>">Update data</button>
                                            
                    </div>
                    <?php }}?>
            </form>
        </fieldset>


</body>
</html>