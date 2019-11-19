<?php

include 'connect.php';

$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];



mysqli_query($db,"INSERT INTO `info_test`(name,address,mobile)VALUES('$name','$address','$mobile')");
	echo "Successfully Saved";




?>
