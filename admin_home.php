<?php
    include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    margin-left: 256px;
    width: auto;
    height: auto;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
}

.flex-item {
    width: auto;
    height: auto;
    margin: 10px;
    margin-left: auto;
    margin-right: auto;
}

h1[id="customer"] {
    margin: 20px;
    line-height: normal;
    font-family: Roboto-Light;
    font-size: 40px;
    text-align: center;
    color: #212121;
    line-height: 55px;
    border-bottom: 2px solid #212121;
    padding: 30px 100px;
}

p[id="customer"] {
    max-width: 600px;
    margin: 20px;
    font-size: 30px;
    font-family: Roboto-Regular;
    color: #212121;
    line-height: 42px;
    padding: 10px 100px;
}
    </style>
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome Admin !<?php                                          
                                           echo $_SESSION['aname']; 
                                            ?></li>
            </h1>
            <p id="customer" style="max-width:800px">
                From here you can manage all of core Internet Banking settings.
                You can add/manage customers, view their transactions, edit their
                details and even delete them. You can also post news on the website.
                <br>Please keep in mind that with big power comes big responsibility.
                Therefore please do not misuse your admin control to create trouble.
            </p>
        </div>
    </div>

</body>
</html>