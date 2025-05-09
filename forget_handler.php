<?php
        session_start();
        include('db_connect.php');
        if (isset($_POST['phno']) && isset($_POST['cid']) && isset($_POST['newpwd'])) {
            $phno = $_POST['phno'];
            $cid = $_POST['cid'];
            $pwd = $_POST['newpwd'];

            $sql = "UPDATE users SET password='$pwd' WHERE phno='$phno',cid='$cid'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header('Location: login.php?message=password_reset_success');
            } else {
                header('Location: reset_password.php?error=password_reset_failed');
            }

            mysqli_close($conn);
        }    
    ?>