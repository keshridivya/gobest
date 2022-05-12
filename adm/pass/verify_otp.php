<?php session_start(); ?>
<html>
<head>
</head>
<body>
	<p>Enter your OTP </p>
	<form method="post" >
		Enter OTP:<input type="text" name="otp"><br>
		<input type="submit" name="sub" value="Send">
	</form>
	
	<?php
		if(isset($_POST['sub'])){
			
			$con=mysqli_connect("localhost","root","","ci_test1");
			$user_otp=$_POST['otp'];
			
			$otp=$_SESSION['otp'];
			echo $user_otp;
			echo $_SESSION['otp'];
			if($otp==$user_otp){
				
				header("Location:reset.php");
			}
		}
	?>
</body>
</html>