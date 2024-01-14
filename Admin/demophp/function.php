<?php
    $con = mysqli_connect('localhost','root','','db_employee2');
    function select(){
        global $con;
        $select = "SELECT *FROM tbl_employee2";
        $result = $con -> query($select);
        while($row = $result->fetch_assoc()){
            ?>
               <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><img src="Image/<?php echo $row['profile'] ?>" 
                    alt="" height="120px" width="120px" style="object-fit: cover; border-radius: 5px;"></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['position'] ?></td>
                    <td><?php echo $row['number'] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']?>"><button class="btn btn-success">Update <i class="bi bi-pen-fill"></i></button></a>
                        <a href="delete.php?id=<?php echo $row['id']?>"><button class="btn btn-warning">Delete <i class="bi bi-x-circle"></i></button></a>
                    </td>
                </tr>     
            <?php
        }
    }
    function insert(){
        global $con;
        if(isset($_POST['save'])){
            $target_dir = 'Image/';
            $target_file = $target_dir.basename($_FILES["profile"]["name"]);
            $imageFileType = pathinfo($target_dir,PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['profile']['tmp_name'],$target_file);

            $insert = "INSERT INTO `tbl_employee2` VALUES('','".$_POST['name']."','".$_POST['address']."','".$_POST['email']."','".$_POST['position']."','".$_POST['number']."','".$_FILES['profile']['name']."')";
            if($con->query($insert)){
                echo "<script> alert('Insert successfully!!!') </script>";
            }
        }
    }
    insert();

?>