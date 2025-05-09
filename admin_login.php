<?php
    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    background: url(https://t4.ftcdn.net/jpg/04/60/71/01/360_F_460710131_YkD6NsivdyYsHupNvO3Y8MPEwxTAhORh.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.container {
    width: 400px;
    margin: 100px auto;
    padding: 40px;
    background: rgba(0, 0, 0, 0.7);
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.5);
    color: #fff;
    text-align: center;
}

h1 {
    margin-top: 0;
}

label {
    display: block;
    margin-bottom: 10px;
    font-size: 20px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    font-size: 20px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background: #4CAF50;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #3e8e41;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Login</h1>
        <form action="admin_login_action.php" method="post">
            <label for="user_name">Username</label>
            <input type="text" id="user_name" name="user_name" required>

            <label for="pass_word">Password</label>
            <input type="password" id="pass_word" name="pass_word" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
