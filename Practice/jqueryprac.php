<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery intro</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head> 
<body>
    <!-- bootstrap : html,css,js 
    JQuery : JS library/Framework ==> TO provide less code and more functionalities -->

<h2 onclick="hideShowPara()" id="para"  class="para">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, perspiciatis. Inventore at consequatur quae sint, qui tenetur totam voluptates? Dolore a aut modi, accusamus autem rem laborum incidunt earum magni.
</h2>



    <button id="btn1">Hide</button>
    <button onclick="  showPara()">Show</button>

    <button >Hide-show</button>
    <script>

    //     p_tag = document.getElementById('para');
//    p_tag = $('#para')
// p_tag = $('p')

p_tag = $('.para')
                    // $ = document.getem.... {javascript} 
b1_tag = $('#btn1')

// b1_tag.click( function hidePara()
//        {
//         p_tag.hide();
//        })

// b1_tag.click( function ()
//        {
//         p_tag.hide();
//        })

// b1_tag.click(  () =>
//        {
//         p_tag.hide(800);
//        })

      

//        function showPara()
//        {    
//         p_tag.show(500);
//        }

    //    function hideShowPara()
    //    {
    //     p_tag.toggle(500);
    //    }
   


    //     console.log(p_tag)
    //    function hidePara()
    //    {
    //     p_tag.style.display = "none"
    //    }

    //    function showPara()
    //    {
    //     p_tag.style.display = "block"
    //     x=12;
    //    }

       function hideShowPara()
       {
        if(p_tag.style.display=="none")
        {
            p_tag.style.color = "red"
        }

        else 
        {
            p_tag.style.display = "none"
        }
       }

     


        
    </script>
</body>
</html>