<?php session_start();
	//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
 ?>
<html>
<head>
</head>
<body>
	<p>Enter your Mail Id for recive OTP on mail</p>
	<form method="post" enctype="multipart/form-data">
		Enter mail:<input type="email" name="email"><br>
		File:<input type="file" name="f"><br>
		<input type="submit" name="sub" value="Send">
	</form>
	


	<?php
		
		if(isset($_POST['sub'])){
			
			$con=mysqli_connect("localhost","root","","ci_test1");
			$email=$_POST['email'];
			$q=mysqli_query($con,"select * from password where email='$email'");
			if(mysqli_num_rows($q)>0){
				
				
				$to=$email;
				$name=$_FILES['f']['name'];
				$temp=$_FILES['f']['tmp_name'];
				$loc='image/';
				move_uploaded_file($temp,$loc.$name);				
				$sub="Recover Password";
				$otp=rand(10000,99999);
			
			//Create an instance; passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
				//Server settings
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = $email;                     //SMTP username
				$mail->Password   = 'enter ypur password';                               //SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('sanjayp.navale@gmail.com', 'Mailer');
				$mail->addAddress('sanjayp.navale@gmail.com', 'Joe User');     //Add a recipient
				//$mail->addAddress('ellen@example.com');               //Name is optional
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');

				//Attachments
				//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
				$path=$loc.$name;
				$mail->addAttachment($path, $name);    //Optional name

				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = 'Reset Password';
				$mail->Body    = 'This is the HTML message body <b>in bold!</b>'.$otp;
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if($mail->send()){
					$q1=mysqli_query($con,"update password set code='$otp' where email='$email'");
						if($q1){
							$_SESSION['otp']=$otp;
							$_SESSION['email']=$email;
							
							echo '<script>alert("OTP send on mail");window.location="verify_otp.php";</script>';
						}
						else{
							echo"Error";
						}
				
				
				}
				
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			
					
					
				
				
				
			}
		}
	?>
</body>
</html>