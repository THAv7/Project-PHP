<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Jquery with ajax</title>
</head>
<body><br>
    <div class="container">
        <div class="row">
            <h1 align="center">Employee</h1>
            <div class="border-bottom"></div>
            <div class="col-12"><br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add User <i class="bi bi-person-plus-fill"></i>
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
                                <label for="">Fullname</label>
                                <input id="fullname" type="text" class="form-control"><br>
                                <label for="">Address</label>
                                <input id="address" type="text" class="form-control"><br>
                                <label for="">Salary</label>
                                <input id="salary" type="text" class="form-control">
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button id="save" type="submit" class="btn btn-primary">Save</button>
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
                        <th>#ID</th>
                        <th>Fullname</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Option</th>
                    </thead>
                    <tbody>
                        <?php 
                            select(); 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#save').click(function(){
                var fullname = $('#fullname').val();
                var address = $('#address').val();
                var salary = $('#salary').val();
                if(fullname!="" && address!="" && salary!=""){
                    $.ajax({
                        url:"inputdata.php",
                        type:"POST",
                        data:{
                            fullname: fullname,
                            address: address,
                            salary: salary
                        },
                        cache: false,
                        success: function()
                        {
                            alert("Data insert success");
                        }
                    })
                }
                
            })              
        })
    </script>
</body>
</html>