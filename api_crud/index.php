<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API CRUD</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        table{
            width: 70%;
            border: 1px solid black;
        }
        td,tr{
            border: 1px solid black;
            background-color: khaki;
            font-weight: bold;
            font-family: sans-serif;
        }
    </style>


</head>

<body>

    <!-- save-button ::: onclick
     jsondData(#addForm) -->

    <form action="" id="form_data" method="post">

        <input type="text" placeholder="name" name="name" id="name">
        <input type="email" name="email" placeholder="email" id="email">
        <input type="text" name="dept" id="dept" placeholder="dept">

        <button type="submit" id="add_data">Submit</button>
    </form>
    <br>
    <hr>
    <br>
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Dept</td>
        </tr>
        <tbody id="formdata"></tbody>
    </table>







    <script>

        function loadtable()
        {
            $('#formdata').html("");

            $.ajax({
                    url: 'http://localhost/php_practice/practice%20php%20pages/PHP_Nirav_cg/Practice_PHP/api_crud/fetchall.php',
                    type: "GET",

                    success: function(data) {
                        if (data.status == true) 
                        {
                            // loadTable();
                            $.each(data, function(key,value) {

                                $("#formdata").append(
                                    "<tr>"+
                                    "<td>"+value.name+"</td>"+
                                    "<td>"+value.email+"</td>"+
                                    "<td>"+value.dept+"</td>"+
                                    "</tr>"
                                );

                            })
                        }
                    }
                })
        }
        loadtable();
        
        function jsonData(hey) {
            var arr = $(hey).serializeArray();

            var obj = {};

            for (var a = 0; a < arr.length; a++) {
                if (arr[a].value == "") {
                    return false;
                }
                obj[arr[a].name] = arr[a].value;
            }
            var json_String = JSON.stringify(obj);
            return json_String;
        }

        $("#add_data").on("click", function(e) {
            e.preventDefault();

            // x =  $('#form_data').serialize();

            var x = jsonData('#form_data');


            if (x == false) {
                message('field required', false);
            } else {
                $.ajax({
                    data: x,
                    url: 'http://localhost/php_practice/practice%20php%20pages/PHP_Nirav_cg/Practice_PHP/api_crud/insert_api.php',
                    type: "POST",

                    success: function(data) {
                        if (data.status == true) {
                            loadtable();
                            $('#form_data').trigger("reset");
                        }
                    }
                }) }


        });
    </script>
</body>

</html>