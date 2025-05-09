<?php
   include "validate_user.php";

   if(isset($_SESSION['payment_success']) && $_SESSION['payment_success']) {
    // Update balance
    $_SESSION['balance'] -= $_SESSION['amount'];
    unset($_SESSION['payment_success']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Profile Page</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #0088cc;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1, h2 {
            margin-top: 0;
        }
        nav {
        
        border-bottom: 1px solid #ccc;
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 1rem;
        }

        nav ul {
        display: flex;
        }

        nav li {
        margin-right: 1rem;
        }

        nav a {
        color: #004466;
        text-decoration: none;
        padding: 0.5rem;
        border-radius: 0.5rem;
        transition: background-color 0.2s ease-in-out;
        }

        nav a:hover {
        background-color: #004466;
        color: #fff;
        }

        main {
            margin: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #0088cc;
            color: #fff;
        }

        /* Profile Section */
        .profile {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: -70px;
        }

        /* Accounts Section */
        .accounts {
            margin-bottom: 20px;
        }
        

    </style>
</head>
<body>  
    <header>
        <h1>Banking Profile Page</h1>
        <nav>
            <ul>
                <li><a href="#">Accounts</a></li>
                <li><a href="payment.php">Payments</a></li>
                <li><a href="statement.php">Statements</a></li>
                <li><a href="#">Support</a></li>
                <li><form action="logout.php" method="post" >
                        <input type="submit" value="Logout">
                    </form>
                </li>
            </ul>
        </nav>
        
        
    </header>
    <main>
        <section class="profile">
            <h2>Profile Information</h2>
            <img src="profile_picture.webp" alt="Profile Picture">
            <ul>
                <li><strong>Name:</strong> <?php 
                                            
                                            echo $_SESSION['name']; 
                                            ?></li>
                <li><strong>Email:</strong> <?php 
                                            echo $_SESSION['email']; ?></li>
                <li><strong>Phone:</strong> <?php 
                                            echo $_SESSION['phoneNumber'];?></li>
                <li><strong>Branch Address:</strong>  USA</li>
            </ul>
        </section>
        <section class="accounts">
            <h2>Accounts</h2>
            <table>
                <thead>
                    <tr>
                        <th>Account Number</th>
                        <th>Account Type</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php 
                                            echo $_SESSION['AccountNumber']; ?></td>
                        <td>Savings</td>
                        <td><?php 
                                            echo $_SESSION['balance']; ?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    
</body>
</html>

