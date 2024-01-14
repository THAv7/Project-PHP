<?php
    include 'connect.php';
    function insert(){
        global $connect;
        if(isset($_POST['save'])){
            $insert = "INSERT INTO `db_startup` VALUES('','".$_POST['fullname']."','".$_POST['address']."','".$_POST['number']."','".$_POST['email']."')";
            if($connect->query($insert)==true){
                print_r("<script>alert('successfully')</script>");
            }
        }
    }
    insert();
?>