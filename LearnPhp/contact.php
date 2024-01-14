<pre>
    <?php
        if(isset($_POST["fname"])
        && isset($_POST["lname"])){
           if($_POST["fname"] =="" || $_POST["lname"]==""){
             echo "Please input fname and last name";
           }else if($_POST["fname"] !="" || $_POST["lname"]!=""){
             echo "successfully!!";
           }
            if($_POST["password"] == "khm123" && $_POST["comfirm"]=="codedm"){
             echo "\nCan login media";
           }else{
             echo "cannot login";
           }
        }
    ?>
</pre>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>php</title>
<style>
    form{
        padding: 20px;
    }
    body{
        background-color: <?php
         if(isset($_GET["color"]))
            echo $_GET["color"];
        ?>
    }
</style>
</head>
<body>
    <html>
    <form method="post" action="">
            <label for="">firstname: </label>
            <input type="text" name="fname"><br><br>
            <label for="">lastname: </label>
            <input type="text" name="lname"><br><br>
            <label for="">Gender: </label>
            <input type="text"><br><br>
            <label for="">Number: </label>
            <input type="number"><br><br>
            <label for="">Age: </label>
            <input type="text"><br><br>
            <label for="">Password: </label>
            <input type="password" name="password"><br><br>
            <label for="">Comfirm: </label>
            <input type="password" name="comfirm"><br><br>
            <input type="submit" class="btn btn-primary">
        </form>
        <br><hr>
        <form method="get">
            <input type="color" name="color">
            <input type="submit" class="btn btn-sm btn-warning">
        </form>
    </html>
</body>