

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="adminpagestyle.css">

</head>
<body>
   
<div class="form-container">

<form action="Process-register.php"method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="first_name" required placeholder="enter your first name">
      <input type="text" name="Second_name" required placeholder="enter your second name">
      <input type="email" name="Email_Address" required placeholder="enter your email">
      <Input type="Date" id="DOB" name="Date_of_Birth"required placeholder="enter your date of birth">
      <label for="gender">Male:</label>
      <Input type="radio" id="gender" name="sex" value="Male">
      <br><br>
      <label for="gender">Female:</label>
      <Input type="radio" id="gender" name="sex" value="Female">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>