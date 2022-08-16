<?php
// print_r($_POST);
$total =$_POST['totalamount'];
$ProductName=$_POST['ProductName'];
$ClientID=$_POST['ClientID'];
$quantity=$_POST['quantity'];
require("connect.php");

$sql="INSERT INTO oders(totalamount,ProductName,ClientID,quantity) VALUES('$total','$ProductName','$ClientID','$quantity')";

if(mysqli_query($conn,$sql)){
	echo "New Record inserted successfully";
	// header("location:  v.php");
}else{
	echo "Error:Record not added".mysqli_error($conn);
}
?>