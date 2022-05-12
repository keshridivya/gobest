<?php
session_start();
include("include.php");
$msg='';
ini_set('display_errors',1);
if(isset($_POST['login']) && !empty($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
  $query=mysqli_query($conn,"select * from login where email='$username' ");
  
  $num=mysqli_fetch_array($query);

  if($num>0){
    $uname=$num['name'];
    $hasspassword=$num['password'];
    if(password_verify($password ,$hasspassword)){
      header("location:pages/forms/dashboard.php");
      $_SESSION['username']=$uname;
    }
    else{
      $msg="username and password is not correct";
    }
  }
  else{
    $msg="username doesn't match";
  }
}
	
	?>











<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mokashi Dental Clinic</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="../assets/img/smile.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">  
          
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="blogs.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Blogs
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>-->