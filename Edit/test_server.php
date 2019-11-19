<?php

include 'connect.php';




//insert
if(isset($_POST['save'])){ 
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	mysqli_query($db,"INSERT INTO `info_test`(name,address,mobile)VALUES('$name','$address','$mobile')");
	echo "Successfully Saved";

}

//delete
$name = "";
$address = "";
$mobile = "";
$id=0;
if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	mysqli_query($db,"DELETE FROM `info_test` WHERE id=$id");
	echo "Successfully Deleted";
	
}

//Edit
/*if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$result=mysqli_query($db,"SELECT * FROM 'info_test' WHERE id=$id");
	$row=mysqli_fetch_array($result);
	
}*/

?>
