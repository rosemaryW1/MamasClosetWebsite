<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="adminpagestyle.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome To Mama's Closet <span><?php echo $_SESSION['user'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="index2.php" class="btn">Homepage</a>
      <a href="addingtocart.php" class="btn">Make Order</a>
      <a href="history_user.php" class="btn">View History</a>
   </div>

</div>

</body>
</html>