<?php
    $con_db = mysqli_connect('localhost','root','','db_crud');

    function select(){
        global $con_db;
        $select = "SELECT *FROM `tbl_manager`";
        $result = $con_db->query($select);
        while($row = $result->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?= $row['fullname'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td>$<?php echo $row['salary'] ?></td>
                    <td>
                        <a href=""><button class="btn btn-dark"><i class="bi bi-pen"></i>  Edit</button></a>
                        <a href=""><button class="btn btn-success"><i class="bi bi-person-dash-fill"></i>  Delete</button></a>
                    </td>
                </tr>
            <?php
        }
    }
?>