<?php
    include 'connect.php';
    $id = $_GET['ID'];
    $delete = "DELETE FROM `db_startup` WHERE `client_id` = '$id'";
    $connect->query($delete);
    header("Location: index.php");
?>