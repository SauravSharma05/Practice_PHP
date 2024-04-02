<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API CRUD</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    

</head>
<body>
    
      <!-- save-button ::: onclick
     jsondData(#addForm) -->

     <form action="" id="form_data" method="post">
     
        <input type="text" placeholder="name" name="name" id="name">
        <input type="email" name="age" placeholder="email" id="email">
        <input type="text" name="city" id="dept" placeholder="dept">
        
        <button type="submit" id="add_data">Submit</button>
    </form>

    <script>

         function jsonData(hey)
        {
            var arr = $(hey).serializeArray();

            var obj = {};

            for (var a = 0; a < arr.length; a++) {
                if (arr[a].value ==="") {
                    return false;
                }
                obj[arr[a].name] = arr[a].value;
            }
            var json_String = JSON.stringify(obj);
            return json_String;
        }

        $("#add_data").on("click", function(e)
        {
            e.preventDefault();

            // x =  $('#form_data').serialize();

            var x = jsonData('#form_data');


            if (x == false) {
                message('field required', false);
            } else {
                $.ajax({
                    data:x,
                    url: 'http://localhost/php_practice/practice%20php%20pages/PHP_Nirav_cg/Practice_PHP/api_crud/insert_api.php',
                    type: "POST",

                    success: function(data)
                    {
                            if(data.status == true)
                            {
                                // loadTable();
                                $('#form_data').trigger("reset");
                            }
                    }

                })
            }


        });
        
    </script>
</body>
</html>