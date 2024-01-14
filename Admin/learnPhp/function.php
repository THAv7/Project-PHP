<?php
    include 'connect.php';
    function select(){
        global $connect;
        $select = "SELECT *FROM `tbl_emloyee`";
        $result = $connect->query($select);
        while($row=$result->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><img src="images/<?php echo $row['profile'] ?>" 
                    width="120px" height="120px" style="object-fit: cover; border-radius: 5px;"></td>
                    <td><?php echo $row['fullname'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['phonenumber'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary"><i class="bi bi-pen"></i> Update</button></a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger"><i class="bi bi-person-dash-fill"></i> Delete</button></a>
                    </td>
                </tr>
            <?php
        }
    }

    function insert(){
        global $connect;
        if(isset($_POST['save'])){

            $target_dir = 'images/';
            $target_file = $target_dir.basename($_FILES["profile"]["name"]);
            $imageFileType = pathinfo($target_dir,PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['profile']['tmp_name'],$target_file);

            $insert = "INSERT INTO tbl_emloyee VALUES('','".$_POST['fullname']."','".$_POST['address']."','".$_POST['number']."','".$_POST['email']."','".$_FILES['profile']['name']."')";
            if($connect->query($insert)){
                echo "successfully";
            }
        }
    }
    insert();

    function register(){
        global $connect;
        if(isset($_POST['signup'])){
            if($_POST['pass'] == $_POST['re-password']){
                $insert = "INSERT INTO `tbl_users` VALUES('','".$_POST['name']."','".$_POST['email']."','".md5($_POST['pass'])."')";
                if($connect->query($insert)){
                    echo "Register successfully";
                }              
            }
            else{
                    echo "Password incorrect Please try again!";
            }
        }
    }
    register();


    function login(){
        global $connect;
        if(isset($_POST['signin'])){
            $name = $_POST['Your_name'];
            $pass = md5($_POST['Your_pass']);

            $select = "SELECT * FROM `tbl_users` WHERE `name` = '".$name."' AND `password` = '".$pass."' ";
            $result = $connect->query($select);
            $row = $result->fetch_assoc();
            if($row > 0){
                session_start();
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
            }
            else{
                echo "Your name or Password is incorrect !";
            }
        }
    }
    login();

?>