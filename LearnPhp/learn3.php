<?php
    $connectdb= mysqli_connect("localhost","root","","test");
    if(!$connectdb){
        echo "Error database";
    }
    $changetext=mysqli_set_charset($connectdb,"utf8"); //tuf8(font khmer)

    $subject_title = $_GET['subject'];
    $lesson_title = $_GET['lesson'];

    $query = "SELECT id";
    $query .= "FROM subjects";
    $query .= "WHERE title= '".$subject_title."'";
    
?>