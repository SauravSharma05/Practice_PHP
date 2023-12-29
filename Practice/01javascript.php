<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- x=10

    var x =10 //global scope
    let x=10  //scope
    const  x=10 //scope

    function Test()
    {
        x=10
    }

    Test()

-->

    <h1 id="op" ></h1>

    <div id="inp"></div>

    <input type="text" class="inp1">

    <p onclick=" Test()" class="inp2">para</p>

    <a href="" class="inp3" id="anc"></a>

    <img src="" alt="No Image" class="i1">

    <button onclick="ValidateInp()">Validate</button>

    <script>

       

       d=  document.getElementById('op');
       div=  document.getElementById('inp');
       input1=  document.querySelector('.inp1');
       ancTag=  document.querySelector('#anc');
       img1=  document.querySelector('.i1');
       console.log(img1)

       


      

    
       const x= function test1()
       {
        // document.write("fun1")
        // console.log("fun1")

        d.innerHTML = "hello123"
        d.style.color = "green"
        div.innerText ="Hello123<u>Underline</u>"
        input1.value = ""
       // x=23
        ancTag.innerHTML ="HyperLink"
        img1.alt ="IMAGE TAG"

       
       };

       function ValidateInp()
       {
        if(input1.value=="")
        {
            alert("Hello")
        }
       }

       

       

       function Test()
            {
               
               x()
               
               
                
            }
            // Test()
         

        //   document.write(x)
          


    </script>
    
</body>
</html>