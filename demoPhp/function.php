<?php
    include 'connect.php';
    include 'insert.php';
    function select(){
        global $connect;
        $select = "SELECT *FROM db_startup";
        $result = $connect->query($select);
        while($row=$result->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['client_id'] ?></td>
                    <td><?php echo $row['fullname'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <a href="edit.php?ID=<?php echo $row['client_id'] ?>"><button class="btn btn-warning">Edit <i class="bi bi-pencil"></i></button></a>
                        <a href="delete.php?ID=<?php echo $row['client_id'] ?>"><button class="btn btn-success">Remove <i class="bi bi-x-circle"></i></button></a>
                    </td>
                </tr>
            <?php
        }
    }
?>