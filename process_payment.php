<?php
include "validate_user.php";
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payee = $_POST["payee"];
    $description = $_POST["description"];
    $amount = $_POST["amount"];
    $fromAccount = $_POST["account"];
    $toAccount = $_POST["Taccount"];

    // Check if the user has enough balance in their account
    $sql = "SELECT balance FROM users WHERE Accountnumber = '$fromAccount'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $balance = $row["balance"];

    if ($balance < $amount) {
        echo "Insufficient balance";
        exit();
    }

    // Check if the recipient account exists
    $sql = "SELECT customerId FROM users WHERE Accountnumber = '$toAccount'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "Recipient account not found";
        exit();
    }

    // Deduct the amount from the sender's account
    $newBalance = $balance - $amount;
    $sql = "UPDATE users SET balance = $newBalance WHERE Accountnumber = '$fromAccount'";
    mysqli_query($conn, $sql);

    // Add the amount to the recipient's account
    $sql = "UPDATE users SET balance = balance + $amount WHERE Accountnumber = '$toAccount'";
    mysqli_query($conn, $sql);

    // Add the transaction details to the transaction table
    $sql = "INSERT INTO transaction (sendid, reciverid, amount, Tdate) 
            VALUES ('$fromAccount', '$toAccount', $amount, NOW())";
    mysqli_query($conn, $sql);

    // Redirect to profile page with success message
    $_SESSION['success'] = "Payment of $amount made successfully to $payee";
    header("Location: profile.php");
    exit();
} else {
    header("Location: payment.php");
    exit();
}
?>
