<?php

    include 'dbh.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $epwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$epwd')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    header("Location: index.php?page=login");
?>