
<?php

    session_start();   
    include('db_connect.php');
    if (isset($_POST['user_name']) && isset($_POST['pass_word'])){
        $uid = $_POST['user_name'];
        $pwwd = $_POST['pass_word'];

        $sql = "SELECT * FROM user1_admin WHERE userid='$uid' AND pwd='$pwwd' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['aname'] = $row['aname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phoneNumber'] = $row['phoneNumber'];
            
        } 
        if (($result->num_rows) > 0) {
            $_SESSION['isAdminValid'] = true;
            $_SESSION['LAST_ACTIVITY'] = time();
            header("location:admin_home.php");
        }
        else {
            session_destroy();
            die(header("location:admin_login.php?loginFailed=true"));
        }
        

        mysqli_close($conn);
    }    
?>