<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API CRUD</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- save-button ::: onclick
     jsondData(#addForm) -->

    <div class="box">
        <form action="" id="form_data" method="post">

            <input type="text" placeholder="NAME" name="name" id="name">
            <input type="email" name="email" placeholder="EMAIL" id="email">
            <input type="text" name="dept" id="dept" placeholder="DEPARTMENT">

            <button type="submit" class="submit-button" id="add_data">Submit</button>
        </form>
        <br><hr><br>
        <table>
            <tr>
                <th><b>Name</b></th>
                <th><b>Email</b></th>
                <th><b>Department</b></th>
                <th>Action</th>
            </tr>
            <tbody id="formdata"></tbody>
        </table>
    </div>

    <!-- ------------------ -->

    <div id="modal">
    <div id="modal-form">
      <h2>Edit Form</h2>
      <form action="" id="edit-form">
      <table cellpadding="10px" width="100%">
        <tr>
          <td width="90px">Name</td>
          <td><input type="text" name="name" id="edit-name">
              <input type="text" name="id" id="edit-id" hidden="">
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" id="edit-email"></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><input type="text" name="dept" id="edit-dept"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="button" id="edit-submit" value="Update"></td>
        </tr>
      </table>
      </form>
      <div id="close-btn">x</div>
    </div>
  </div>

    <script>
        function loadtable() {
            $('#formdata').html("");
            
            $.ajax({
                url: 'http://localhost/php_practice/practice%20php%20pages/PHP_Nirav_cg/Practice_PHP/api_crud/fetchall.php',
                type: "GET",

                success: function(data) {
                    $.each(data, function(key, value) {

                        $("#formdata").append(
                            "<tr>" +
                            "<td>" + value.name + "</td>" +
                            "<td>" + value.email + "</td>" +
                            "<td>" + value.dept + "</td>" +
                            "<td> <button class='edit-btn' data-eid='"+ value.id + "'>Edit</button> " + 
                            "<button class='delete-btn' data-id='"+ value.id + "'>Delete</button></td>" + 
                                   
                            "</tr>"
                        );

                    })
                }
            })
        }
        loadtable();

        function jsonData(hey) {
            var arr = $(hey).serializeArray();

            var obj = {};

            for (var a = 0; a < arr.length; a++) 
            {
                if (arr[a].value == "")   
                {
                    return false;
                }
                obj[arr[a].name] = arr[a].value;
            }
            var json_String = JSON.stringify(obj);
            return json_String;
        }

        $("#add_data").on("click", function(e) {
            e.preventDefault();

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
                })
            }
        });



            $(document).on("click",".delete-btn",function(){
            if(confirm("delete this record ? ")){
                
            var userId = $(this).data("id");
            var obj = {id : userId};
            var myJSON = JSON.stringify(obj);

            var row = this;

            $.ajax({
            url : 'http://localhost/php_practice/practice%20php%20pages/PHP_Nirav_cg/Practice_PHP/api_crud/deleteuser.php',
            type : "POST",
            data : myJSON,
            success : function(data){

                if(data.status == true){
                $(row).closest("tr").fadeOut();
                }
            }
            });
            }
        });   

        $(document).on("click",".edit-btn",function(){
    $("#modal").show();
    var userId = $(this).data("eid");
    var obj = {eid : userId};
    var myJSON = JSON.stringify(obj);

    $.ajax({
      url : 'http://localhost/php_practice/practice%20php%20pages/PHP_Nirav_cg/Practice_PHP/api_crud/fetchsingle.php',
      type : "POST",
      data : myJSON,
      success : function(data){
        $("#edit-id").val(data[0].id);
        $("#edit-name").val(data[0].name);
        $("#edit-email").val(data[0].email);
        $("#edit-dept").val(data[0].dept);
      }
    });
  });

  $("#edit-submit").on("click",function(e){
    e.preventDefault(); 

    var jsonObj = jsonData("#edit-form");
    // console.log(jsonObj);
    if( jsonObj == false){
      message("All Fields are required.",false);
    }else{
      $.ajax({ 
      url : 'http://localhost/php_practice/practice%20php%20pages/PHP_Nirav_cg/Practice_PHP/api_crud/updateuser.php',
      type : "POST",
      data : jsonObj,
      success : function(data){

        if(data.status == true)
        {
          $("#modal").hide();
          loadtable();
        }
      }
    });
  }
  });

    </script>
</body>

</html>