<?php
    $con = mysqli_connect('localhost','root','','db_employee2');

    function register(){
        global $con;
        if(isset($_POST['register'])){
            if($_POST['name'] || $_POST['email'] || $_POST['pass'] || $_POST['repass'] == ""){
                echo "Please input information.";
            }else{
                if($_POST['pass'] == $_POST['repass']){
                    $insert = "INSERT INTO `tbl_users` VALUES('','".$_POST['name']."','".$_POST['email']."','".md5($_POST['pass'])."')";
                    if($con->query($insert)){
                        echo "input success.";
                    }
                }
                else
                {
                    echo "Password incorrect";
                }
            }
            
        }
    }
    register();

    function login(){
        global $con;
        if(isset($_POST['signin'])){
            $name = $_POST['your_name'];
            $pass = md5($_POST['your_pass']);

            $select = "SELECT * FROM `tbl_users` WHERE `name`='".$name."' AND `password`='".$pass."'";
            $result = $con->query($select);
            $row = $result->fetch_assoc();
            if($row > 0){
                session_start();
                $_SESSION['sid'] = $row['id'];
                header("Location: ../infoEmployee.php");
            }else{
                echo "Incorrect password";
            }
        }
    }
    login();
?>