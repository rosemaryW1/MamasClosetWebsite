<?php
require("connect.php");
$sql="SELECT fname,sname,gender,email,dob,password FROM users";
$result=mysqli_query($conn,$sql);
print_r($result	);
if (mysqli_num_rows($result)>0) {
	$row=mysqli_fetch_assoc($result);
	echo "<pre>";	
	print_r	($row);
	echo"</pre>";
}
?>	