<?php

$db=mysqli_connect('localhost','root','','curd4');

$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];

$id = isset($_GET['id']) ? $_GET['id'] : '';

mysqli_query($db,"INSERT INTO `info_test`(name,address,mobile)VALUES('$name','$address','$mobile')");
	echo "Successfully Saved";




?>
