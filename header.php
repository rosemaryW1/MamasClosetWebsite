<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>
<header class="header">

<div class="flex">

   

   <?php
   
   $select_rows = mysqli_query($conn, "SELECT * FROM `cart`  WHERE 'user_id' = '$user_id'") or die('query failed');
   $row_count = mysqli_num_rows($select_rows);

   ?>

   <a href="cart.php" class="cart">Cart </a>
   <a href="history_user.php" class="cart">Shopping history  </a>

   <div id="menu-btn" class="fas fa-bars"></div>

</div>

</header>
    
</body>
</html>