<?php
    include 'function.php';
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
    <title>Index.php</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row">
        <h2 align="center"><u style="font-weight: 700; text-shadow: 3px 2px 1px #bbb;">MEDIA STARTUP</u></h2><br>
            <div class="col-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-person-plus-fill"></i>
                Add User
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form method="POST">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="">Fullname</label>
                            <input name="fullname" type="text" class="form-control"><br>
                            <label for="">Address</label>
                            <input name="address" type="text" class="form-control"><br>
                            <label for="">Phone Number</label>
                            <input name="number" type="text" class="form-control"><br>
                            <label for="">Email</label>
                            <input name="email" type="text" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            <button name="save" type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div><br>
        <div class="border-bottom"></div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover"><br>
                    <thead>
                            <th>#Client_ID</th>
                            <th>Fullname</th>
                            <th>Address</th>
                            <th>PhoneNumber</th>
                            <th>Email</th>
                            <th>Option</th>                 
                    </thead>
                    <tbody>
                        <?php select(); ?>
                    </tbody>
                </table>            
            </div>
        </div>
    </div>
</body>
</html>