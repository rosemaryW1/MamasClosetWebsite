?php
print_r($_POST);
$total =$_POST['totalamount'];
$productname=$_POST['productname'];
//$customerid=$_POST['customerid'];
$quantity=$_POST['quantity'];
require("connect.php");

$sql="INSERT INTO tbl_order(quantity,totalamount,productname) VALUES('$total','$productname','$customerid')";

if(mysqli_query($conn,$sql)){
	echo "New Record inserted successfully";
}else{
	echo "Error:Record not added".mysqli_error($conn);
}
?>