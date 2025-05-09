<?php
include "validate_user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  
  <style>
    /* Reset styles */
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #0088cc;
            color: #fff;
            padding: 10px;
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
        margin: 1rem;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .ptm form {
        display: flex;
        flex-direction: column;
        }

        .ptm label {
        margin-bottom: 0.5rem;
        }

        .ptm input, select {
        padding: 0.5rem;
        border-radius: 0.5rem;
        border: 1px solid #ccc;
        margin-bottom: 1rem;
        }

        .ptm button[type="submit"] {
        background-color: #0088cc;
        color: #fff;
        padding: 0.5rem;
        border-radius: 0.5rem;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
        }

        .ptm button[type="submit"]:hover {
        background-color: #003356;
        }

        footer {
        background-color: #ccc;
        text-align: center;
        padding: 1rem;
        }
  </style>
</head>
<body>
<header>
        <h1>Make a payment</h1>
        <nav>
            <ul>
                <li><a href="profile.php">Accounts</a></li>
                <li><a href="#">Payments</a></li>
                <li><a href="statement.php">Statements</a></li>
                <li><a href="#">Support</a></li>
                <li><form action="logout.php" method="post" >
                        <input type="submit" value="Logout">
                    </form>
                </li>
            </ul>
        </nav>
        
        
    </header>
  <main class="ptm">
    <form action="process_payment.php" method="post">
      <label for="payee">Payee:</label>
      <input type="text" id="payee" name="payee" required>
      <br>
      <label for="description">Description:</label>
      <input type="text" name="description" id="description" required><br>
      <label for="amount">Amount:</label>
      <input type="number" id="amount" name="amount" min="1" max="100000" required>
      <br>
      <label for="account">From Account:</label>
      <select id="account" name="account" required>
        <option value=<?php 
                            
                            echo $_SESSION['AccountNumber']; 
                        ?>
                        >
                        <?php 
                            echo $_SESSION['AccountNumber']; 
                        ?> - Savings</option>
      </select>
      <br>
      <label for="Taccount">To Account:</label>
      <input type="number" id="Taccount" name="Taccount" required>
      <button type="submit">Make Payment</button>
    </form>
  </main>
  <footer>
    <p>&copy; 2023 My Bank</p>
  </footer>
  <script >
    // Get the current URL to determine which link to highlight in the navigation
    const currentUrl = window.location.href;
    const links = document.querySelectorAll('nav a');
    links.forEach(link => {
    if (link.href === currentUrl) {
        link.classList.add('active');
    }
    });

  </script>
</body>
</html>
