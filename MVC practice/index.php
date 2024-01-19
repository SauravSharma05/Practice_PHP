<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input page</title>
    <style>
        *{
            font-family: sans-serif;
        }
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
            <input type="text" name="name" id="" placeholder="Enter Your Name"> <br><hr>
            <input type="email" name="email" id="" placeholder="Enter Your Email"> <br><hr>
            <label for="male">Male : </label>
            <input type="radio" name="gender" id="" value="male">
            <label for="male">Female : </label>
            <input type="radio" name="gender" id="female" value="female"> <br> <hr>
            <label for="football">Football : </label><input type="checkbox" name="hobby[]" value="football" id="football">
            <label for="chess">Chess : </label><input type="checkbox" name="hobby[]" value="chess" id="chess">
            <label for="cricket">Cricket : </label><input type="checkbox" name="hobby[]" value="cricket" id="cricket">
            <br><hr>
            <textarea name="address" id="address" cols="30" rows="10" placeholder="ADDRESS goes here"></textarea><br><hr>
            <input type="password" name="password" id="" placeholder="Enter Password Here"> <br><hr>
            <!-- <input type="password" name="password" id="" placeholder="Enter Password Here"> <br><hr> -->
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