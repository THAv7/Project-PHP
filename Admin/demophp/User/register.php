<?php 
    include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Sign Up Form</title>
</head>
<body><br><br>
    <section>
        <div class="container w-50 bg-info p-4">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 align="center">Sign UP</h2>
                    <form method="POST" class="register-form">
                        <div class="form-group">
                            <br>
                            <input name="name" class="form-control" type="text" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <br>
                            <input name="email" class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <br>
                            <input name="pass" class="form-control" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <br>
                            <input name="repass" class="form-control" type="password" placeholder="Re-Password">
                        </div><br>
                        <div class="form-group btn-submit">
                            <button name="register" type="submit" class="btn btn-success">Register</button>
                            <a href="login.php"><b style="float: right;">Forward to Login page</b></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>