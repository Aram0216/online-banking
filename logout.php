<!DOCTYPE html>
<html>
<head>
	<title>Logout | Online Banking</title>
	
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}

		.container {
			width: 80%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

		h1 {
			margin-top: 0;
		}

		p {
			margin-top: 20px;
			font-size: 18px;
		}

		.alert {
			padding: 10px;
			background-color: #28a745;
			color: #fff;
			border-radius: 5px;
			margin-top: 20px;
			display: inline-block;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Logging out...</h1>
		<p>You will be redirected to the login page in a few seconds.</p>
		<div class="alert">You have been logged out successfully.</div>
	</div>
    <?php
        session_start();
        session_unset();
        session_destroy();
    ?>

    <meta http-equiv="refresh" content="3;url=login.php" />
</body>
</html>


