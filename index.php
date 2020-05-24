


<!DOCtype html>
	<html>
		<head>
			<title>my form</title>
			<link rel="stylesheet" type="text/css" href="form.css" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>
			<div id="header1">
				<div id="header1a">
					<div id="header2a">
						<img src="images/beautiful-girl.jpg" />
					</div>
					<div id="header2b">
						<span>Log in to continue</span>
						<form name="form" action="submitform.php" method="post" onsubmit="return refresh()" />
							<input type="text" placeholder="Email" id="email" name="email" required /><br/>
							<input type="password" placeholder="Password" id="password" name="password" required />
							<input type="checkbox" id="box" />
								<span id="box1">Remember me</span>
								<span id="box2"><a href="#">Forgot password</a></span>
							<input type="submit" value="LOGIN" id="submit" onclick="login()" name="submit" />
						</form>
						<span id="sign">or sign up using</span>
						<a href="sign-up.php"><i class="fa fa-facebook" id="i1"></i></a>
						<a href="sign-up.php"><i class="fa fa-twitter" id="i2"></i></a>
					</div>
				</div>
			</div>
		</body>
	</html>
	<script>
		function login(){
			var email = document.form.email.value;
			if (email == ""){
			var color = document.getElementById("email").style.color="green";
			//alert("fill in the input please");
			var value = document.getElementById("email").placeholder="Fill-in your email";
			document.form.email.value.focus();
		}
			var password = document.form.password.value;
			if (password == ""){
				var color = document.getElementById("password").style.color="green";
			//alert("Please fill in your password");
			var value = document.getElementById("password").placeholder="Fill-in your password";
			document.form.email.value.focus();
		}
	}
	</script>