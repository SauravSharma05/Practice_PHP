<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .mainbox {
            width: 40%;
            border: 2px solid blue;
            padding: 20px;
            margin: 50px auto;
        }        
    </style>
</head>

<body>
    <h1>OTP Verify PAGE</h1>
        
    <a href="index">back to homepage</a>

    <div class="mainbox">

        <form method="post" action="">
            <div class="form-group">
                <label for="otp">Verify OTP</label>
                <input type="number" name="otp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter OTP">
            </div>
            <br>
            <button type="submit" name="verifyotp" class="btn btn-primary">Verify</button>
        </form>
    </div>
</body>
</html>