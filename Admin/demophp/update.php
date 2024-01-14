<?php
    $con = mysqli_connect('localhost','root','','db_employee2');
    $id = $_GET['id'];
    $select = "SELECT *FROM `tbl_employee2` WHERE `id` = '$id'";
    $result = $con->query($select);
    $row = $result->fetch_assoc(); 
    
    if(isset($_POST['update'])){
        if($_FILES['profile']['name'] == ""){
            $target_dir = 'Image/';
            $target_file = $target_dir.basename($_FILES["profile"]["name"]);
            $imageFileType = pathinfo($target_dir,PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['profile']['tmp_name'],$target_file);

            $update = "UPDATE tbl_employee2 SET `name`='".$_POST['nam']."', `address`='".$_POST['add']."', `email`='".$_POST['ema']."', `position`='".$_POST['pos']."', `number`='".$_POST['num']."',`profile`='".$row['profile']."' WHERE `id` = '$id' ";
            if($con->query($update) == true){
                header("location: infoEmployee.php");
            }else{
                echo "not success";
            }
        }else{
            $target_dir = 'Image/';
            $target_file = $target_dir.basename($_FILES["profile"]["name"]);
            $imageFileType = pathinfo($target_dir,PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['profile']['tmp_name'],$target_file);

            $update = "UPDATE tbl_employee2 SET `name`='".$_POST['nam']."', `address`='".$_POST['add']."', `email`='".$_POST['ema']."', `position`='".$_POST['pos']."', `number`='".$_POST['num']."',`profile`='".$_FILES['profile']['name']."' WHERE `id` = '$id' ";
            if($con->query($update) == true){
                header("location: infoEmployee.php");
            }else{
                echo "not success";
            }
        }
    }
    include 'header.php';
?>
    <br><h2 align="center" style="color: skyblue;">Update Data</h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="infoEmployee.php"><div class="back btn btn-secondary">Back Page</div></a><br><br>
                <b>Profile picture</b><br>
                <img src="image/<?php echo $row['profile'] ?>" width="150px" height="150px" style="object-fit: cover;" alt=""><br><br>
                <form method="POST" enctype="multipart/form-data">
                    <label for="">Name</label>
                    <input name="nam" value="<?php echo $row['name']?>" type="text" class="form-control"><br>
                    <label for="">Address</label>
                    <input name="add" value="<?php echo $row['address']?>" type="text" class="form-control"><br>
                    <label for="">E-mail</label>
                    <input name="ema" value="<?php echo $row['email']?>" type="text" class="form-control"><br>
                    <label for="">Position</label>
                    <input name="pos" value="<?php echo $row['position']?>" type="text" class="form-control"><br>
                    <label for="">Number</label>
                    <input name="num" value="<?php echo $row['number']?>" type="text" class="form-control"><br>
                    <label for="">New Profile</label>
                    <input name="profile" value="<?php  ?>" type="file" class="form-control"><br>
                    <button style="float:right;" name="update" type="submit" class="btn btn-warning">Update <i class="bi bi-pen-fill"></i></button>
                </form>
            </div>
        </div>
    </div><br><br>
<?php include 'footer.php'; ?>