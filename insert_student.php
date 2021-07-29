<?php
    include('connection.php');

    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    $query = 'INSERT INTO students (name, lastname, email) VALUES (" '.$name.' ", " ' .$lastName.' ", " ' .$email.' ")';


    $result = mysqli_query($conn, $query);
    if(!$result){
      die("error");
    };

    $_SESSION['message'] = 'Admitted student';
    $_SESSION['success'] = 'success';


      header("Location: index.php");

      $conn->close();