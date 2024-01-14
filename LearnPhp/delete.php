<?php
    include 'connect.php';
    if(isset($_POST['deleteid'])){
        $id = $_POST['deleteid'];
        $database="delete from `crud` where id = $id";
        $result=mysqli_query($database,$result);
        if($result){
            echo "Delete successfully";
        }else{
            die(mysqli_error($database));
        }
    }
?>