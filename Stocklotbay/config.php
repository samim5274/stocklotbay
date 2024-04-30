<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "stocklotbaydb";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        die("Connection failed: ".$conn->connection_error);
    }