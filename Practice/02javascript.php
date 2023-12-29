<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <input type="radio" name="gen" value="m">Male <br>
    <input type="radio" name="gen">Female <br>


    <h1 id="i1" onclick="Test()" class="i1" name="n">Hello123</h1>
    <h1 id="i1" class="i1" name="n">h2</h1>
    <h1 id="i1" class="i1" name="n">h3</h1>

    <h1 id="i1" class="i1" name="n">Hello123</h1>
    <h1 id="i1" class="i1" name="n">h2</h1>
    <h1 id="i1" class="i1" name="n">h3</h1>

    <h1 id="i1" class="i1" name="n">Hello123</h1>
    <h1 id="i1" class="i1" name="n">h2</h1>
    <h1 id="i1" class="i1" name="n">h3</h1>

    

    <script>

        gender = document.getElementsByTagName('input')
       console.log( gender[0].checked);//false

       function Test()
       {
        if( gender[0].checked == false)
        {
            alert("sdf")
        }
       }
     
     

        console.log(gender)
// ==> to get single element
    //   ankit=   document.getElementById('i1');
    // ankit = document.querySelector('#i1')
   // an = document.querySelector('.i1')


   // ==> to get multiple element
//    an =document.querySelectorAll('.i1')
// an =document.querySelectorAll('#i1')
// an =document.getElementsByClassName('i1')

// an =document.getElementsByName('n')

an = document.getElementsByTagName('h1')
      console.log(an.length)

    //   an[2].style.color = "red";

    for(x=0;x<an.length;x++)
    {
        an[x].style.color = "red";
    }

    </script>
    
</body>
</html>