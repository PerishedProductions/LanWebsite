<?php

    $conn = mysqli_connect("localhost", "root", "", "landb");

    if(!$conn)
    {
        die("connection failed: ".mysqli_connect_error());
    }

?>