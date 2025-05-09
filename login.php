
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-family: sans-serif;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-image: url("https://img.freepik.com/free-vector/rupee-symbol-digital-technology-background_1017-36810.jpg");
            background-size: cover;
            z-index: -1;
        }

        .login-container {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-in-out;
            margin-left: 500px;
            
                        
        }

        .login-container:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            transform: translate(-50%, -50%) scale(1.05);
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        

        label {
            font-size: 18px;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 15px;
        }

        #login {
            background-color: #0080ff;
            color: #fff;
            font-size: 18px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-left: 80px;
        }
        #register {
            background-color: #0080ff;
            color: #fff;
            font-size: 18px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-left: 10px;
        }
        #change{
            background-color: rgba(255, 255, 255, 0.8);
            color: #0b0b0b;
            font-size: 15px;
            font-weight: bolder;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 140px;
        }

        #login:hover {
            background-color: #0040ff;
        }
        #register:hover {
            background-color: #0040ff;
        }
        #change:hover {
            background-color: #e4e7ee;
        }

    </style>
</head>
<body>
    
	<div class="background"></div>
	<div class="login-container">
		<h1>Retail Login</h1>
		<form method="post" action="login_handler.php" name="loginForm" onsubmit="return validateLoginForm()">
			<label for="cid">Customer ID:</label><br>
			<input type="text" name="cid" id="cid" required><br>
			<label for="pwd">Password:</label><br>
			<input type="password" name="pwd" id="pwd" required><br>
			<input type="submit" value="Login" id="login"  >
            <input type="button" value="Register" id="register" onclick="window.location.href = 'register.php';"><br><br><br>
            <input type="button" value="Forgot / Change Password" id="change" onclick="window.location.href = 'forget.php';">
		</form>
	</div>
    <script>
		function validateLoginForm() {
			let cid = document.forms["loginForm"]["cid"].value;
			let pwd = document.forms["loginForm"]["pwd"].value;
			let cidRegex = /^[a-zA-Z0-9]{5,20}$/; // regular expression for username validation
			let pwdRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; // regular expression for password validation

			if (!cidRegex.test(cid)) {
				alert("Please enter a valid username. Username must be between 5 and 20 characters and can only contain alphanumeric characters.");
				return false;
			}
			if (!pwdRegex.test(pwd)) {
				alert("Please enter a valid password. Password must be between 8 and 20 characters and can only contain alphanumeric characters and special characters @,#,*,%,$,!");
				return false;
			}
		}
	</script>
    
    
   

</body>
</html>
