<?php
require("connect.php");
print_r($_POST);
$SubcategoryName=$_POST['Subcategory-Name'];
$categoryID=$_POST['Category-ID'];

$sql="INSERT INTO subcategories(SubcategoryName,categoryID)VALUES ('$SubcategoryName','$categoryID')";

if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}








?>