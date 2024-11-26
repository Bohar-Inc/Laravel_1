<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>SinglePageApplication</title>
    <script>
        $(document).ready(function(){

            $('#SubmitForm').on('submit',function(e){
                e.preventDefault();
                var data=$('#SubmitForm').serialize();


                $.ajax({
                    url: "savedata",
                    type:"POST",
                    data:{
                        "_token":"{{csrf_token()}}",
                            data:data,
                    },
                    success:function(response){
                        $('#respanel').html(response);
                        $('#SubmitForm')[0].reset();
                        $('#myModal').modal('hide');
                    }
                });
            });
        });
    </script>
</head>
<body>
<div class="container mt-3">
    <h3>Modal Example</h3>
    <p id="respanel">Click on the button to open the modal.</p>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        Open modal
    </button>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Employee Record</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form id="SubmitForm">
                        <div class="mb-3 mt-3">
                            <label for="email">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="mb-3">
                            <label for="pwd">Mobile:</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center mt-10">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <th>SL No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Password</th>
                    </thead>
                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>
