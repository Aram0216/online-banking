<?php
        
        include('db_connect.php');
        if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['pwd'])&& isset($_POST['acno']) && isset($_POST['cid']) && isset($_POST['phno'])) {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $pwd = $_POST['pwd'];
            $cid = $_POST['cid'];
            $acno = $_POST['acno'];
            $phno = $_POST['phno'];
            

            $sql = "INSERT INTO users (name, email, password,customerId,phoneNumber,AccountNumber, balance) VALUES ('$name', '$mail', '$pwd','$cid', '$phno','$acno', 0)";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header('Location: login.php?message=registration_success');
            } else {
                header('Location: register.php?error=registration_failed');
            }

            mysqli_close($conn);
        }    
?>