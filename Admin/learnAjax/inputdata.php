<?php
    include 'connect.php';
    $insert = "INSERT INTO `tbl_manager` VALUES('','".$_POST['fullname']."','".$_POST['address']."','".$_POST['salary']."')";
    $con_db->query($insert);
?>