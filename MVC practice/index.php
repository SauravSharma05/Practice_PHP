<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input page</title>
    <style>
        .formy{
            width: 60%;
            margin: 50px auto;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            }
            a{
            text-decoration: none;
            font-size: 25px;
        }

    </style>
</head>

<body>
    <div class="formy">

         
        <fieldset>
            <legend>
        User Registration form
    </legend>
        <form  method="post" enctype="multipart/form-data">
            <br>
            <input type="text" name="name" id=""> <br><hr>
            <input type="file" name="image" id=""><br><hr>
            <input type="submit" value="Register" name="submit">
        </form>
    </fieldset>

            <hr>
            <a href="userdata">click to get USER LIST</a>
            <hr>

</div>
    
</body>

</html>