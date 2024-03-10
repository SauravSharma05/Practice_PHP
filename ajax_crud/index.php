<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="ajax/ajax.js"></script>

</head>

<body>
    <div class="main">
        <div class="container  bg-secondary p-3">
            <div class="row">
                <div class="col-6">AJAX CRUD</div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        Add New User
                    </button>
                </div>
            </div>
        </div>

    </div>


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            <form id="user_form">

                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Registration Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   

                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">Phone:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="phone">
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">City:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="city">
                        </div>

                     
                  
                </div>
                <div class="modal-footer">

                <input type="hidden"  value="1" name="type">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn_add">Add</button>
                </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>