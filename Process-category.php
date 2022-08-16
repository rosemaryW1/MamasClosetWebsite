<?php
require("connect.php");
print_r($_POST);
$categoryID=$_POST['Category-ID'];
$categoryName=$_POST['Category-Name'];
$isdeleted=$_POST['is-deleted'];


$sql="INSERT INTO categories(categoryID,categoryName,isdeleted)VALUES ('$categoryID','$categoryName','$isdeleted')";

if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}









?>
