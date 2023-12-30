<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <img src="../Practice/images/homepic.jpg" alt="" height="400px" width="900px">

    <img src="../Practice/images/logo.jpg" alt="" height="400px" width="900px">
    <img src="../Practice/images/homepic.jpg" alt="" height="400px" width="900px">
    <img src="../Practice/images/logo.jpg" alt="" height="400px" width="900px">
    

    <script>
index= 0;
        function slider()
        {
            
     const images =  document.getElementsByTagName('img');

     console.log(images)
     console.log(images.length)

    //  images[0].style.display = "none"
    //  images[1].style.display = "none"
    //  images[2].style.display = "none"
    //  images[3].style.display = "none"

    for(i=0;i<images.length;i++)
    {
        images[i].style.display = "none"
    }

    // console.log(i);//4
    images[index].style.display = "block";
    index++;//4

    if(index >=4)
    {
        index=0;
    }

    setTimeout("slider()",1500)
        }

        slider()


    </script>

</body>
</html>