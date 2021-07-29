<?php

    include ('connection.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM students WHERE id = $id";

        $res = mysqli_query($conn, $query);

        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_array($res);
            $name = $row['name'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            }
        }

        if(isset($_POST['update'])){
            $id = $_GET['id'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $query = "UPDATE students SET name = '$name', lastname= '$lastname', email='$email' WHERE id=$id ";
            mysqli_query($conn, $query);


            $_SESSION['message'] = "Student updated";
            $_SESSION['success'] ="primary";
            header("Location: index.php");
        }

    ?>

<?php include('includes/header.php') ?>
    <div class="container p-4">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id= <?php echo $_GET['id']; ?>" method="POST" >
                    <div class="form-group">
                        <input 
                            type="text"
                            name="name"
                            value= "<?php echo $name; ?>"
                            class= "form-control"
                            placeholder= "Update your name"
                        />
                        <input 
                            type="text"
                            name="last_name"
                            value= "<?php echo $lastname; ?>"
                            class= "form-control"
                            placeholder= "Update your last name"
                        />
                        <input 
                            type="text"
                            name="email"
                            value= "<?php echo $email; ?>"
                            class= "form-control"
                            placeholder= "Update your email"
                        />
                        <button class="btn btn-success" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>   
    </div>   

<?php include('includes/footer.php') ?>