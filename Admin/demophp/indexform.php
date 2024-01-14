<?php
    if(isset($_GET['save'])){
        echo $_GET['name'];
        echo $_GET['age'];
        echo $_GET['gender'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <h4>Name</h4>
        <input name="name" type="text">
        <h4>Age</h4>
        <input name="age" type="text">
        <select name="gender" id="">
            <option value="F">female</option>
            <option value="M">male</option>
        </select>
        <br><br>
        <button name="save" type="submit">Submit</button>
    </form>
</body>
</html>