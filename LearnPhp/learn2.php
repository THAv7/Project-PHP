<?php
    $connect = mysqli_connect("localhost","root","","test");
    if(!$connect){
        die("database error");
    }

    $result = mysqli_query($connect, "SELECT surname,username FROM editor LIMIT 1");
    echo mysqli_error($connect);
    echo $result;
?>