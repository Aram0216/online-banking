<?php
    session_start();   
    include('db_connect.php');
    if (isset($_POST['cid']) && isset($_POST['pwd'])){
        $cid = $_POST['cid'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT * FROM users WHERE customerId='$cid' AND password='$pwd' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['balance'] = $row['balance'];
            $_SESSION['AccountNumber'] = $row['AccountNumber'];
            $_SESSION['phoneNumber'] = $row['phoneNumber'];
            
        } 
        if (($result->num_rows) > 0) {
            $_SESSION['isuserValid'] = true;
            $_SESSION['LAST_ACTIVITY'] = time();
            header("location:profile.php");
        }
        else {
            session_destroy();
            die(header("location:login.php?loginFailed=true"));
        }

        mysqli_close($conn);
    }    
?>