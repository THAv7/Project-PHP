<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $firstname= $_POST['firstname'];
        $lastname=$_POST['lastname'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $password=$_POST['passwords'];

        $insert = "INSERT INTO `crud` VALUES('','".$firstname."','".$lastname."','".$phonenumber."','".$email."','".$password."')";
        if($database->query($insert)==true){
            //echo "<script>alert('Insert successfully')</script>";
            header('localhost: display.php');
        }
        else{
            die(mysqli_query($database));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Crud operator</title>
    <style>
        body{
            margin: 20px;
            background-color: gray;
        }
        label{
            margin-left: 10px;
            font-weight: 500;
            padding-top: 5px;
        }
        .container{
            width: 35%;
            height: 460px;
            background-color: white;
            padding: 15px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <a href="display.php"><button class="btn btn-danger">Back</button></a>
        <form method="post">
            <div class="form-group">
                <label for="">Firstname</label>
                <input type="text" name="firstname" class="form-control" placeholder="Enter firstname">
            </div>
            <div class="form-group">
                <label for="">lastname</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter firstname">
            </div>
            <div class="form-group">
                <label for="">PhoneNumber</label>
                <input type="number" name="phonenumber" class="form-control" placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="passwords" class="form-control" placeholder="Enter Password">
            </div><br>
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
            <button type="reset" class="btn btn-dark" name="reset">Reset</button>
        </form>
    </div>
</body>
</html>