<?php
   include 'connect.php';
   $insert = "INSERT INTO `db_employee` VALUES('id','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['address']."','".$_POST['number']."') ";
   $connect->query($insert);
?>