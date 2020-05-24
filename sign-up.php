<?php
 include_once './congfi.php';
/*if (!$conn){
	 echo" does not connect";
}
else{
		 echo "connect";
}*/
	
	 
	 //$fullname = $_POST["fullname"];
     //$email = $_POST["email"];
     //$phonenumber = $_POST["phonenumber"];
	 //$password = md5($_POST["password"]);
	 //$country = $_POST["country"];
	 //$gender = $_POST["gender"];
	// echo $fullname . $email . $phonenumber. $country .$gender;
	 
	 if(isset($_POST["submit"])){
	 $fullname = $_POST["fullname"];
     $email = $_POST["email"];
     $phonenumber = $_POST["phonenumber"];
	 $password = md5($_POST["password"]);
	 $country = $_POST["country"];
	 $gender = $_POST["gender"];
	 
	
	$sql = "INSERT INTO `employee`(`Fullname`,`Email`,`Phone number`,`Password`,`Country`,`Gender`) VALUES ('$fullname','$email','$phonenumber','$password','$country','$gender')";
	 $result = $conn->query($sql);
if ($result){
    $idd = $conn->insert_id;
    echo "<script>alert('You have sign up successfully: Your Id is $id Press ok and login providing your registered Email and Password')</script>";
}
	//header('location:index.php');
else {
    echo "error message" . $conn->error;
}
	$idd = $conn->insert_id;
	if(!$idd == ""){
		header('location:index.php'); 
	}else{
		echo "ghgjkkjkjhhkhk";
	}
	
	 } 
	 





?>

<!DOCtype html>
	<html>
		<head>
			<title>my form</title>
			<link rel="stylesheet" type="text/css" href="sign-up.css" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="sign-up.js"></script>
		</head>
		<body onload="myload()" style="margin: 0px">
			<img src="images/load5.gif" style="width: 100%; margin:0px; height:650px;" id="imgg" />
			<div id="header1">
				<div id="header1a">
					<div id="header2a">
						<img src="images/beautiful-girl.jpg" />
					</div>
					<div id="header2b">
						<span>Sign-in here</span><br/><br/>
						<form action="sign-up.php" method="post" name="form" onsubmit="return passw()" />
							<input type="text" placeholder="Fullname" id="fullname" name="fullname" required /><br/><br/>
							<input type="text" placeholder="Email" id="email"  name="email" required /><br/><br/>
							
							<input type="number" placeholder="Phone No." id="phone" name="phonenumber" required /><br/><br/>
							
							<input type="password" placeholder="Password" id="password" name="password" required /><br/><br/>
							<input type="password" placeholder="Confirm password" id="cpassword" name="cpassword" required /><br/><br/>
							<select  required id="select" style="border:1px solid gray; height:38px; width: 65%; border-radius: 10px; border:1px solid green; color: #1b1cff;" name="country"><option value="" selected>Select country</option>  <option value="Ghana">Ghana</option><option value="Nigeria">Nigeria</option><option value="Togo">Togo</option><option value="USA">USA</option><option value="South Africa">South Africa</option><option value="Canada">Canada</option><option value="Chad">Chad</option><option value="Russia">Russia</option><option value="India">India</option></select><br><br>
							<input  required id="gender" type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female<br><br>
							<input type="reset" value="Reset" id="reset" name="reset" onclick="rest()" />
							<input type="submit" value="Go" id="submit" name="submit" />
						</form>
					</div>
				</div>
			</div>
		</body>
	</html>
	<script>
		var x;
		function rest(){
			var x = document.form.surname.value;
			if(x){
				//document.getElementById("surname").value="";
				alert("welcome brother");
                    return (false);
			}
		}
	</script>
	<script>
	function passw(){
	 var pass = document.form.password.value;
	 var cpass = document.form.cpassword.value;
	 if(pass !== cpass){
		 alert("fill in correct password");
		//var x = document.getElementById("cpassword").values="Password does not match";
		document.form.cpassword.focus();
		return false;
	 }
	}	 
	</script>
