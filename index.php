<?php include('connection.php') ?>


<?php include('includes/header.php') ?>
    <div class="container-md">

        <?php if(isset($_SESSION['message'])){  ?>
            <div class="alert alert-<?= $_SESSION['success'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset(); } ?>

        <div class="col">
            <form class="form-control" method="POST" action="insert_student.php">
                <div class="input-group-sm mb-3">
                    <label class="form-label">Your name:</label>
                    <input class="form-control" name="name" />
                </div>

                <div class="mb-3">
                    <label class="form-label">Your last:</label>
                    <input class="form-control" name="lastName" />
                </div>

                <div class="mb-3">
                    <label class="form-label">Your email:</label>
                    <input class="form-control" name="email" />
                </div>

                <button class="form-control mb-3 btn btn-primary">Insert</button>
            </form>
        </div>
        <div>
            <table class="table">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Last name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Actions</th>
                </tr>
                    <tbody>
                    <?php 
                            $query = "SELECT * from students";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result)){
                                ?> 
                                    <tr>
                                        <td> <?php echo $row['id']; ?> </td>
                                        <td> <?php echo $row['name']; ?> </td>
                                        <td> <?php echo $row['lastname']; ?> </td>
                                        <td> <?php echo $row['email']; ?> </td>
                                        <td>
                                            <a href="edit.php?id= <?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="delete.php?id= <?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php }   ?>
                    </tbody>
                </table>

        </div>
    </div>

<?php include('includes/footer.php') ?>

                                