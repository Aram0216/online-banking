<?php
        
        include('db_connect.php');
        if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['aadhar']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['branch']) && isset($_POST['o_balance']) && isset($_POST['pin']) &&  isset($_POST['cus_pwd'])&& isset($_POST['acno']) && isset($_POST['cus_uname']) && isset($_POST['phno'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $aadhar = $_POST['aadhar'];
            $address = $_POST['address'];            
            $branch = $_POST['branch'];
            $o_balance = $_POST['o_balance'];
            $pin = $_POST['pin'];
            $cus_pwd = $_POST['cus_pwd'];
            $cus_uname = $_POST['cus_uname'];
            $acno = $_POST['acno'];
            $phno = $_POST['phno'];
            
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
            echo" email alredy exists";
            } else {
            // email does not exist, insert the record
            
            }

            
            $sql1="INSERT INTO customer(fname, lname, gender,dob,aadhar,email,phno,address,branch,AccountNumber,pin,cus_uname,cus_pwd) VALUES(
                '$fname',
                '$lname',
                '$gender',
                '$dob',
                '$aadhar',
                '$email',
                '$phno',
                '$address',
                '$branch',
                '$acno',
                '$pin',
                '$cus_uname',
                '$cus_pwd'
            )";
            $result=mysqli_query($conn, $sql1);
            if ($result) {
                header('Location: admin_home.php?message=registration_success');
            } else {
                header('Location: customer_add.php?error=registration_failed');
            }
            $sql = "INSERT INTO users (name, email, password,customerId,phoneNumber,AccountNumber, balance) VALUES ('$fname $lname', '$email', '$cus_pwd','$cus_uname', '$phno','$acno', '$o_balance')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }    
?>