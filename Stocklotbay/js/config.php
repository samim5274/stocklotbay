<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "stocklotbaybd";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        die("Connection failed: ".$conn->connection_error);
    }