<?php

    session_start();    

    $serverName = "localhost";
    $username = "root"; //Yor phpmyadmin username
    $password = ""; //Your phpmyadmin password
    $dbName ="simplecrud";//Your database name

    $conn = new mysqli($serverName, $username, $password, $dbName);

    if($conn->connect_error){
        die("Connection failed:" . $conn->connect_error);
    }
