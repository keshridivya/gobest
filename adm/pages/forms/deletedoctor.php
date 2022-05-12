<?php
	/*$id = $_POST['id'];
    //$conn = new mysqli("localhost","mokashi","mokashi@123","mokashi");
    $conn = new mysqli("localhost","root","","GoBestDentist");
    $sql = "UPDATE doctors SET is_delete = '1' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
	  echo json_encode(array('status' => 200,'message' => 'Blog has been deleted Successfully'));
	} else {
		echo json_encode(array('status' => 200,'message' => "Error deleting record: " . $conn->error));
	}*/

	if(isset($_GET['action']) && $_GET['action']!=''){
		$action=mysqli_real_escape_string($conn,$_GET['action']);
		if($action=='delete'){
		  $id=mysqli_real_escape_string($conn,$_GET['action']);
		  $sql = "UPDATE addcategories SET is_delete = '0' WHERE id='$id'";
		  mysqli_query($conn,$sql);
		}
	  }
    
?>