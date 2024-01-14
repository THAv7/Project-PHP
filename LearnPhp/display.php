<?php
    include 'connect.php';
    $select = "SELECT *FROM `crud`";
    $result =mysqli_query($database,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootsrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Test crud operator</title>
</head>
<body>
    <h1 align="center" style="margin-top:30px">Add User List</h1>
    <div class="container">
        <a href="test4.php"><button class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Add User</button></a>
        <br><br>
        <div class="border-bottom"></div>
        <br>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phonenumber</th>
                <th>Email</th>
                <th>Password</th>
                <th>Option</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['firstname']?></td>
                        <td><?php echo $row['lastname']?></td>
                        <td><?php echo $row['phonenumber']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td>
                            <button class="btn btn-dark"><i class="bi bi-pen-fill"></i> Edit</button>
                            <button name="deleteid" class="btn btn-warning"><i class="bi bi-person-dash-fill"></i> Delete</a></button>
                        </td>
                    </tr>
                <?php
                }
            ?>
        </table>
    </div>
</body>
</html>