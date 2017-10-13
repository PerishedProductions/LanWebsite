<?php

    session_start();

    include 'dbh.php';

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE uid='$uid'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) < 1)
    {
        mysqli_close($conn);
        header("Location: index.php?page=login&alert=error");
        die();
    }
    else
    {
        if($row = mysqli_fetch_assoc($result))
        {
            $pwdCheck = password_verify($pwd, $row['pwd']);
            if($pwdCheck == false)
            {
                mysqli_close($conn);
                header("Location: index.php?page=login&alert=error");
                die();
            }
            else if($pwdCheck == true)
            {
                $_SESSION['id'] = $row['id'];
                $_SESSION['first'] = $row['first'];
                $_SESSION['last'] = $row['last'];
                $_SESSION['uid'] = $row['uid'];

                mysqli_close($conn);
                header("Location: index.php");
            }
        }
    }    
?>