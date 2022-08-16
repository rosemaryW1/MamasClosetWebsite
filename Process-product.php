<?php

// print_r(Product_Image);
// if (isset($_POST['submit'])) {
$ProductName=$_POST['Product-Name'];
// $ProductImageName=$_FILES['ProductImage']['name'];
// $fileTmpName = $_FILES['ProductImage']['tmp_name'];
$UnitPrice=$_POST['Unit-Price'];
$Availablequantity=$_POST['Available-quantity'];
$SubcategoryID=$_POST['Subcategory-ID'];
$ProductImageName=$_FILES['img']['name'];
$fileTmpName = $_FILES['img']['tmp_name'];

$fileDestination ='upload2/'.$ProductImageName;
move_uploaded_file($fileTmpName,$fileDestination);

require("connect.php");
$sql="INSERT INTO product(ProductName,ProductImage,UnitPrice,Availablequantity,SubcategoryID)
VALUES ('$ProductName','$ProductImageName','$UnitPrice','$Availablequantity','$SubcategoryID')";

mysqli_query($conn, $sql);

// } 
  
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

?>