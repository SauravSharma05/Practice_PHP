<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>


<form onsubmit=" return Validate()">
    Firstname: <input type="text" id="fnm" value="sdf123"> 
    <b id="err"></b>
    
    <br>

  <button>Validate</button>
</form>


<script>

    inp_tag = document.getElementById('fnm');
    b_tag = document.getElementById('err');
    

// document.write(inp_tag.value)

document.write($('#fnm').val(" "))

function Validate()
{
    if(inp_tag.value == "")
    {
        alert("Required..!");
        b_tag.innerHTML = "Required..!";
        b_tag.style.color ="* red"
        inp_tag.style.border ="2px solid red"
        return false;
    }

    else 
    {
        b_tag.innerHTML = "";
    }

}



</script>
    
</body>
</html>