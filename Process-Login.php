<?php 
require_once("connect.php");
session_start();

$sqli="SELECT * FROM users";
$result = mysqli_query($conn , $sqli);
//$row=mysqli_fetch_assoc($result);
// $email = $row['email'];
// $password = $row['password'];
// $em = $_POST['email'];
// $pwd = $_POST['pw'];
// $role =$row['role'];

while($row=mysqli_fetch_assoc($result)){
$em = $row['email'];
$pwd = $row['password'];
$email = $_POST['Email_Address'];
$password = $_POST['password'];
$user_type =$row['user_type'];
$_SESSION['fname']=$row['fname'];
$uid=$row['ClientID'];
$_SESSION['user']=$uid;

                	

if ($em==$email && $password==$pwd && $user_type=='admin') {
	
	header("Location: adminpage.php");
	exit();
}
elseif ($em==$email && $password==$pwd && $user_type=='user') {
	
	header("Location: userpage.php");
	exit();
}

 else {
	echo 'Invalid Credentials';
};

}
?>