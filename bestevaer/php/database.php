<?php

    $servername = "localhost";
    $username = "root";
    $password = "1Quantum24C1!";
    $db = "";

    $conn = new mysqli($servername, $username, $password);

    if($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }
    echo "Connected Succesfully";

?>