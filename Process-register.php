<?php
require("connect.php");
print_r($_POST);
$firstname=$_POST['first_name'];
$secondname=$_POST['Second_name'];
$EmailAddress=$_POST['Email_Address'];
$DateofBirth=$_POST['Date_of_Birth'];
$password=$_POST['password'];
$gender=$_POST['sex'];
$user_type = $_POST['user_type'];

$sql="INSERT INTO users(fname,sname,gender,email,dob,password,user_type)VALUES ('$firstname','$secondname','$gender','$EmailAddress','$DateofBirth','$password','$user_type' )";

if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}





?>