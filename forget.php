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
            top: 40%;
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
        input[type="tel"] {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 15px;
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
            margin-left: 50px;
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

        #change:hover {
            background-color: #e4e7ee;
        }
        #login:hover {
            background-color: #0040ff;
        }

    </style>
</head>
<body>
	<div class="background"></div>
	<div class="login-container">
		<h1>Retail Login</h1>
		<form method="post" action="forget.php" name="resetForm" onsubmit="return validateResetForm()">
            <label for="cid">Customer ID:</label><br>
			<input type="text" name="cid" id="cid" required><br>
            <label for="phno">Phone number:</label><br>
			<input type="tel" name="phno" id="phno" required><button type="submit">Send OTP</button><br><br>
            <label for="otp">OTP:</label><br>
			<input type="text" name="otp" id="otp" maxlength="6" required><br>
			<label for="oldpwd">Old Password:</label><br>
			<input type="password" name="oldpwd" id="oldpwd" required><br>
            <label for="newpwd">New Password:</label><br>
			<input type="password" name="newpwd" id="newpwd" required><br>			
            <input type="submit" value="Reset Password" id="change" >
            <input type="button" value="Login" id="login" onclick="window.location.href = 'login.php';">
		</form>
	</div>
    <script>
    function validateResetForm() {
        let cid = document.forms["resetForm"]["cid"].value;
        let oldpwd = document.forms["resetForm"]["oldpwd"].value;
        let newpwd = document.forms["resetForm"]["newpwd"].value;
        let phno = document.forms["resetForm"]["phno"].value;
        let otp = document.forms["resetForm"]["otp"].value;

        let cidRegex = /^[a-zA-Z0-9]{5,20}$/; // regular expression for username validation
        let phnoRegex = /^[0-9]{10}$/; // regular expression for phone number validation
        let otpRegex = /^[0-9]{6}$/; // regular expression for OTP validation]
        let pwdRegex =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; // regular expression for password validation
        let RepwdRegex =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; // regular expression for password validation
        if (!cidRegex.test(cid)) {
				alert("Please enter a valid username. Username must be between 5 and 20 characters and can only contain alphanumeric characters.");
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
