<!DOCTYPE html>
<html>
<head>
	
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
            top: 50%;
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
        input[type="password"],
        input[type="email"],
        input[type="tel"],
        input[type="cid"]
        {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 15px;
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
            margin-left: 70px;
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
            margin-left: 10px;
        }
        #login:hover {
            background-color: #0040ff;
        }
        #register:hover {
            background-color: #0040ff;
        }
    </style>
</head>
<body>
	<div class="background"></div>
	<div class="login-container">
		<h1>Register</h1>
		<form method="post" action="register_handler.php" name="registerForm" onsubmit="return validateRegisterForm()">
			<label for="name">Name:</label><br>
			<input type="text" name="name" id="name" required><br>
            <label for="mail">Email:</label><br>
			<input type="email" name="mail" id="mail" required><br>
            <label for="cid">  Customer ID:</label><br>
			<input type="text" name="cid" id="cid" required><br>
            <label for="acno">  Account No:</label><br>
			<input type="text" name="acno" id="acno" required><br>
            <label for="phno">Phone number:</label><br>
			<input type="tel" name="phno" id="phno" required><button type="submit">Send OTP</button><br>
            <label for="otp">OTP:</label><br>
			<input type="text" name="otp" id="otp" maxlength="6" required><br>
            <label for="pwd">Password:</label><br>
			<input type="password" name="pwd" id="pwd" required><br>
            <label for="Repwd">Retype Password:</label><br>
			<input type="password" name="Repwd" id="Repwd" required><br>
            
			<input type="submit" value="Register" id="register">
            <input type="button" value="Login" id="login" onclick="window.location.href = 'login.php';">
		</form>
	</div>
    <script>
		function validateRegisterForm() {
			let name = document.forms["registerForm"]["name"].value;
			let mail = document.forms["registerForm"]["mail"].value;
			let phno = document.forms["registerForm"]["phno"].value;
			let otp = document.forms["registerForm"]["otp"].value;
			let cid = document.forms["registerForm"]["cid"].value;
            let acno = document.forms["registerForm"]["acno"].value;
			let pwd = document.forms["registerForm"]["pwd"].value;
            let Repwd = document.forms["registerForm"]["Repwd"].value;

			let nameRegex = /^[a-zA-Z ]{2,50}$/; // regular expression for name validation
			let mailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; // regular expression for email validation
			let phnoRegex = /^[0-9]{10}$/; // regular expression for phone number validation
			let otpRegex = /^[0-9]{6}$/; // regular expression for OTP validation
			let cidRegex = /^[a-zA-Z0-9]{5,20}$/; // regular expression for customer ID validation
            let acnoRegex = /^[a-zA-Z0-9]{5,20}$/; // regular expression for Account number validation
			let pwdRegex =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; // regular expression for password validation
            let RepwdRegex =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; // regular expression for password validation

			if (!nameRegex.test(name)) {
				alert("Please enter a valid name. Name must be between 2 and 50 characters and can only contain letters and spaces.");
				return false;
			}
			if (!mailRegex.test(mail)) {
				alert("Please enter a valid email address.");
				return false;
			}
			if (!phnoRegex.test(phno)) {
				alert("Please enter a valid phone number.");
				return false;
			 }
			 if (!otpRegex.test(otp)) {
			 	alert("Please enter a valid OTP. OTP must be 6 digits.");
			 	return false;
			}
			 if (!cidRegex.test(cid)) {
			 	alert("Please enter a valid customer ID. Customer ID must be between 6 and 20 characters and can only contain alphanumeric characters and underscores.");
			 	return false;
			}
             if (!acnoRegex.test(acno)) {
			 	alert("Please enter a valid customer ID. Customer ID must be between 6 and 20 characters and can only contain alphanumeric characters and underscores.");
			 	return false;
			}
			if (!pwdRegex.test(pwd)) {
				alert("Please enter a valid password. Password must be between 8 and 20 characters and can only contain alphanumeric characters and special characters @,#,*,%,$,!");
				return false;
			}
            if (!RepwdRegex.test(Repwd)) {
				alert("Please enter a valid password. Password must be between 8 and 20 characters and can only contain alphanumeric characters and special characters @,#,*,%,$,!");
				return false;
			}
            if(Repwd!=pwd){
                alert("Password and retype password must be same")
                return false;
            }
			return true;
		}
	</script>
    

</body>
</html>
