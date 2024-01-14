<?php
    include 'connect.php';
    $id = $_GET['id'];
    $delete = "DELETE FROM `tbl_emloyee` WHERE `id` = '$id'";
    $connect->query($delete);
    header("Location: index.php");
?>