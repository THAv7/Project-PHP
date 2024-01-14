<?php
    include 'header.php';
    include 'function.php';
    session_start();
    if(!$_SESSION['id']){
        header("Location:login.php");
    }else{
?>
    <div class="indexpage">
        <div class="row">
            <div class="col-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-person-plus-fill"></i>  Add User
                </button>
                <a href="logout.php">
                    <button type="button" class="btn btn-secondary" style="float: right;">
                        Sign-Out    <i class="bi bi-box-arrow-right"></i>
                    </button>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for=""> Fullname</label>
                                    <input name="fullname" type="text" class="form-control"><br>
                                    <label for=""> Address</label>
                                    <input name="address" type="text" class="form-control"><br>
                                    <label for=""> Phone Number</label>
                                    <input name="number" type="number" class="form-control"><br>
                                    <label for=""> Email</label>
                                    <input name="email" type="email" class="form-control"><br>
                                    <label for=""> Profile</label>
                                    <input name="profile" type="file" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    <button name="save" type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="border-bottom" style="margin: 5px 0px;"></div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover"><br>
                    <thead>
                            <th>#ID</th>
                            <th>Profile</th>
                            <th>Fullname</th>
                            <th>Address</th>
                            <th>PhoneNumber</th>
                            <th>Email</th>
                            <th>Option</th>                 
                    </thead>
                    <tbody>
                        <?php
                            select();
                        ?>
                    </tbody>
                </table>            
            </div>
        </div>
    </div>
<?php 
    include 'footer.php';
    }
?>