<?php

@include 'connect.php';

session_start();

if(!isset($_SESSION['user'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="adminpagestyle.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="usersview.php" class="btn">View Users</a>
      <a href="Productview.php" class="btn">View Products</a>
      <a href="view_cart.php" class="btn">View Cart</a>
      <a href="subcategoryview.php" class="btn">View subcategories</a>
      <a href="categoryview.php" class="btn">View categories</a>
      <a href="view_cart.php" class="btn">View categories</a>
   </div>

</div>

</body>
</html>