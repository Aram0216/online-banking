<?php
	
$conn = mysqli_connect("localhost", "root", "");


$sql = "CREATE DATABASE IF NOT EXISTS onlinebanking";
mysqli_query($conn, $sql);


mysqli_select_db($conn, "onlinebanking");


$sql = "CREATE TABLE IF NOT EXISTS users (
        serialnumber INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        customerId INT(10) NOT NULL,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        phoneNumber VARCHAR(12) NOT NULL,
        AccountNumber INT(10) NOT NULL,
        balance INT(11) UNSIGNED DEFAULT 0
)";
mysqli_query($conn, $sql);
$sql = "CREATE TABLE IF NOT EXISTS user1_admin (
        userid INT(10) NOT NULL PRIMARY KEY,
        aname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL ,
        phoneNumber VARCHAR(12) NOT NULL,
        pwd VARCHAR(255) NOT NULL
        
)";

mysqli_query($conn, $sql);


$sql = "INSERT  INTO user1_admin (userid, aname, email, phoneNumber, pwd) VALUES
        (123, 'keasv', 'kesav@gmail.com', '745896321', 'password123'),
        (456, 'cheran', 'cheran@gmail.com', '325698741', 'password456'),
        (789, 'Ram', 'Ram@gmail.com', '125478963', 'password789')
        ON DUPLICATE KEY UPDATE userid = userid";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error inserting values: " . mysqli_error($conn) . "<br>";
}    
if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS transaction (
        id INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        sendid INT(10) NOT NULL,
        reciverid INT(10) NOT NULL,
        amount DECIMAL(10,4) NOT NULL,
        Tdate DATETIME NOT NULL
        
)";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS customer (
        serialnumber INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(255) NOT NULL,
        lname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL ,
        gender VARCHAR(25) NOT NULL,
        dob VARCHAR(15) NOT NULL,
        aadhar INT(10) NOT NULL,
        address VARCHAR(100) NOT NULL,
        branch VARCHAR(15) NOT NULL,
        o_balance INT(10) NOT NULL,
        pin INT(4) NOT NULL,
        cus_pwd VARCHAR(255) NOT NULL,
        cus_uname INT(10) NOT NULL,
        AccountNumber INT(10) NOT NULL,
        phno INT(12) NOT NULL
)";
mysqli_query($conn, $sql);
?>
