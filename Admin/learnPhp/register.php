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
    <link rel="stylesheet" href="stylecss/style1.css">
    <title>Register Account</title>
    <style>
        body{
            margin: 0 auto;
            padding: 0px;
        }
        .container{
            width: 60%;
            height: 650px;
            background-color: lavender;
            border-radius: 20px;
        }
        input{
            width: 100%;
            border: none;
            border-bottom: 1px solid black;
            background-color: lavender;
        }
        input:focus{
            border: none solid white;
        }
        .register-form{
            margin-left: 40px;
            padding: 20px 0px;
        }
        .field-name{
            padding: 10px;
        }
        .clickme{
            margin: 50px 10px;
        }
        .form-signin{
            float: right;
            padding: 0px 20px;
            color: blue;
            cursor: pointer;
        }
        .form-signin a:link{
            color: purple;
        }
        .image,img{
           padding-left: 30px;
        }
        img{
            object-fit: cover;
        }
    </style>
</head>
<body>
    <br><br><br>
    <div class="container">
        <h1 style="padding: 50px 0px 0px 50px; font-weight:700">Sign Up</h1>
        <div class="row">
            <div class="col-6">
                <form method="POST" class="register-form">
                    <div class="field-name">
                        <label for="name"></label>
                        <input name="name" class="Your-name" id="your-name" type="text" placeholder=" Your name">
                    </div>               
                    <div class="field-name">
                        <label for="email"></label>
                        <input class="Your-email" id="your-email" name="email" type="text" placeholder=" Your email">
                    </div>      
                    <div class="field-name">
                        <label for="pass"></label>
                        <input class="Your-pass" id="your-pass" name="pass" type="password" placeholder=" Password">
                    </div>          
                    <div class="field-name">
                        <label for="re-pass"></label>
                        <input class="Re-pass" id="re-pass" name="re-password" type="password" placeholder=" Repeat your password">
                    </div>                  
                    <div class="clickme">
                        <button name="signup" type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
                <div class="form-signin">
                    <a href="login.php"><p><u>Sign In form</u></a></p>
                </div>
            </div>
            <div class="col-6">
                <div class="image">
                    <img src="images/sign-in.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>