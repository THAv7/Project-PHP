<?php
    $con = mysqli_connect('localhost','root','','db_employee2');
    $id = $_GET['id'];
    $delete = "DELETE FROM `tbl_employee2` WHERE `id` = '$id'";
    $con->query($delete);
    header("location: infoEmployee.php");
?>