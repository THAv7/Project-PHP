
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Ajax 7-August-022</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Button trigger modal --> 
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                    Add New <i class="bi bi-clipboard-plus"></i> 
                </button> 
                <!-- Modal --> 
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header"> 
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> 
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                            </div> 
                            <div class="modal-body"> 
                                <label for="">First Name</label> 
                                <input id="fname" type="text" class="form-control"> <br> 
                                <label for="">Last Name</label> 
                                <input id="lname" type="text" class="form-control"> <br> 
                                <label for="">Address</label> 
                                <input id="address" type="text" class="form-control"> <br> 
                                <label for="">Phone Number</label> 
                                <input id="number" type="text" class="form-control"> <br> 
                            </div> 
                            <div class="modal-footer"> 
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                                <button id="save" type="button" class="btn btn-dark">Save</button> 
                            </div> 
                        </div>
                    </div> 
                </div> 
            </div> 
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td> 
                            <td>Chantha</td>
                            <td>EUN</td>
                            <td>Kampongcham</td>
                            <td>016 696 875</td>
                            <td>
                                <button class="btn btn-warning">Edit</button>
                                <button class="btn btn-dark">Delete</button>
                            </td>
                        </tr>                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#save').click(function(){
                var firstname = $('#fname').val();
                var lastname = $('#lname').val();
                var address = $('#address').val();
                var number = $('#number').val();
                $.ajax({
                    url:"insert.php",
                    type:"POST",
                    data: {
                        firstname : firstname,
                        lastname : lastname,
                        address : address,
                        number : number
                    },
                    cache: false,
                    success: function(){
                        alert("Data insert completed");
                    }
                })
            })
        })
    </script>
</body>
</html>