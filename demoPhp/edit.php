<?php
    include 'connect.php';
    $id = $_GET['ID'];
    $select ="SELECT *FROM `db_startup` WHERE `client_id`='$id' ";
    $result = $connect->query($select);
    $row = $result->fetch_assoc();
    if(isset($_POST['save'])){
        $update="UPDATE db_startup SET `fullname` = '".$_POST['fullname']."', `address` = '".$_POST['address']."', `mobile` = '".$_POST['number']."', `email` = '".$_POST['email']."' WHERE `client_id` = '$id' ";
        $result = $connect->query($update);
        if($result){
            header("Location: index.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Update</title>
    <style>
        body{
            margin: 0 auto;
            padding: 0px;
        }
        section{
            background-color: lavender;
            height: 750px;
        }
        .container{
            background-color: white;
            width: 40%;
            height: 520px;
            border-radius: 15px;
        }
        .container ,label{
            font-weight: 500;
        }
        .title{
            text-align: center;
            background-color: pink;
            padding: 20px 0px;
            border-radius: 15px 15px 0px 0px;
        }
        .title span{
            font-weight: 800;
            font-size: 35px;
        }
        span{
            text-shadow: 4px 2px 1px #fff;
        }
        .submit{
            float: right;
        }
    </style>
</head>
<body>
    <section><br><br>
        <div class="container">
            <div class="row">
                <div class="title">
                    <span>UPDATE</span>
                </div>
                <div class="border-bottom"></div>
                <div class="col-12"><br>
                    <form method="POST">
                        <label for=""> Fullname</label>
                        <input value="<?php echo $row['fullname'] ?>" name="fullname" type="text" class="form-control"><br>
                        <label for=""> Address</label>
                        <input value="<?php echo $row['address'] ?>" name="address" type="text" class="form-control"><br>
                        <label for=""> Phone Number</label>
                        <input value="<?php echo $row['mobile'] ?>" name="number" type="text" class="form-control"><br>
                        <label for=""> Email</label>
                        <input value="<?php echo $row['email'] ?>" name="email" type="text" class="form-control"><br>
                        <button name="save" type="submit" class="btn btn-primary submit">Update  <i class="bi bi-pencil"></i></button>
                    </form>     
                    <a href="index.php"><button class="btn btn-danger">Cancel <i class="bi bi-x-circle-fill"></i></button></a>  
                </div>
            </div>
        </div>
    </section>   
</body>
</html>