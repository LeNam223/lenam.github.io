<?php 
    $conn = mysqli_connect("localhost", "root", "", "SignUp");

    if($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully<br>";
?>