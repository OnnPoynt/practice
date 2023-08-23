<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "login_credentials";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
// echo "connection Successful";
?>




<!-- vardump for all details -->

<!-- echo for just display -->


<!-- flowchart vvv -->
<!-- connection -->
<!-- fetching data from tables for tables and if code is fetching properly -->
<!-- check if desired data is called -->
<!-- check program condition/action -->
