<?php session_start(); ?>
<html>
<head>
</head>
<body>
	<p>Reset password </p>
	<form method="post" >
		Enter New Password:<input type="text" name="pass"><br>
		Enter Conf-password:<input type="text" name="cpass"><br>
		<input type="submit" name="sub" value="Update">
	</form>
	
	<?php
		if(isset($_POST['sub'])){
			
			$con=mysqli_connect("localhost","root","","ci_test1");
			$newpass=$_POST['pass'];
			$cpass=$_POST['cpass'];
			$email=$_SESSION['email'];
			if($newpass==$cpass){
				
				$q=mysqli_query($con,"update password set password='$newpass',code='0' where email='$email'");
				if($q){
					
					echo"<script>alert('password reset successfully..');window.location='login.php'</script>";
					
				}
			}
			else{
				
				echo"pass and cpass doent match";
			}
		}
	?>
</body>
</html>