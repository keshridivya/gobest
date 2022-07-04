<?php 
session_start();
if(!isset($_SESSION['username'])){
    
  }
include("checklogin.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Go Best Dental Clinic</title>

  <!-- Google Font: Source Sans Pro -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="../../dist/css/style.css">

  <style>
    input[type=password] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }

    </style>
</head>
<body class="hold-transition login-page">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../../dist/img/logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form id="loginForm" method="post" autocomplete="off">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="email id">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">

      <div class="row">
	    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<?php if($msg){ ?>
			<div class="alert alert-danger">
				<?php echo $msg;?>
			</div>
			<?php } ?>
		</div>
	  </div>

      <input type="submit" class="fadeIn fourth" value="Log In" name="login">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgetpassword.php">Forgot Password?</a>
    </div>

  </div>
</div>



<!-- jQuery -->
<script>
 
</script>
</body>
</html>
