<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .mainbox{
            width: 40%;
            border: 2px solid blue;
            padding: 20px;
            margin: 50px auto;
        }
    </style>
</head>

<body>



        <div class="mainbox">

            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1"><br>
            <label class="form-check-label" for="exampleCheck1">Forgot password</label>
            <a href="forgotpass">click here</a>
        </div><br>
        <!-- <button type="submit" name="submit" class="btn btn-primary">Login</button> -->
        <button type="submit" name="submit">Login</button>
    </form>
</div>
</body>

</html>