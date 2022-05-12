<?php
include_once ('include.php');

$selectquery="select * from addcategories where is_delete='0'";
$doctors = mysqli_query($conn,$selectquery);

  
$link="select * from review where is_delete='0'";
$reviews = mysqli_query($conn,$link);
?>