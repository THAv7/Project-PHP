
<?php
    include 'header.php';
    session_start();
    if(!$_SESSION['sid']){
        header("Location: User/login.php");
    }else{
?>
    <div class="container">
        <div class="row">
            <div class="col-12"><br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-person-plus-fill"></i> Add New Staff
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header link-light" style="background: linear-gradient(to right, purple, yellow)">
                            <h5 class="modal-title" id="exampleModalLabel">Form add Employee</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">                       
                            <label for="">Name</label>
                            <input name="name" type="text" class="form-control"><br>
                            <label for="">Address</label>
                            <input name="address" type="text" class="form-control"><br>
                            <label for="">E-mail</label>
                            <input name="email" type="text" class="form-control"><br>
                            <label for="">Position</label>
                            <input name="position" type="text" class="form-control"><br>
                            <label for="">Number</label>
                            <input name="number" type="text" class="form-control"><br> 
                            <label for="">Pro-picture</label> 
                            <input name="profile" type="file" class="form-control">                     
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="save" type="submit" class="btn btn-warning">Submit</button>
                        </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="User/logout.php"><button type="submit" style="float:right; margin-top: -36px;" class="btn btn-danger">Logout</button></a> 
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>E-mail</th>
                        <th>Position</th>
                        <th>Number</th>
                        <th>Options</th>
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
    }
    include 'footer.php';
?>