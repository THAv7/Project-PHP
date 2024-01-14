<pre><?php
    /*foreach($_POST as $k => $v){
        echo $k." ".$v."\n";
    }*/
    if(array_key_exists("lname", $_POST)
        && array_key_exists("fname", $_POST)
        && array_key_exists("number", $_POST)
        && array_key_exists("password", $_POST)
        && array_key_exists("comfirmpass", $_POST)
    )
    if($_PSOT["password"] == $_POST["comfirmpass"]){
        echo "Name: {$_POST["lname"]} {$_POST["fname"]} {$_POST["number"]}";
    }
    else{
        echo "password not corrected";
    }
?></pre> 

<body>
    <form method="post" action="">
        <label for="">Last Name: </label>
        <input type="text" name="lname"><br><br>
        <label for="">First Name: </label>
        <input type="text" name="fname"><br><br>
        <label for="">Phone Number: </label>
        <input type="number" name="number"><br><br>
        <input type="checkbox" name="boolean" value="true">
        <label for="">Password</label>
        <input type="password" name="password"><br><br>
        <label for="">Comfirm pass</label>
        <input type="password" name="comfirmpass"><br><br>
        <input type="submit">
    </form>
</body>