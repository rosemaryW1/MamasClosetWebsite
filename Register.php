<html>
  <head>
  <title>REGISTER</title>
<link rel="stylesheet" href="Styling.css">
  </head>
   <body>
   <form action="Process-register.php"method="post">
      <fieldset>
      <legend>MAMA'S CLOSET</legend>
      <p>CREATE AN ACCOUNT</P>
      <label for="fname">Firstname:</label>
      <Input type="text" id="fname" name="first_name">
      <br><br>
      <label for="Sname">Secondname:</label>
      <Input type="text" id="Sname" name="Second_name">
      <br><br>
      <label for="Password">password:</label>
      <Input type="password" id="pwd" name="password">
      <br><br>
      <label for="DOB">Date_of_Birth:</label>
      <Input type="Date" id="DOB" name="Date_of_Birth">
      <br><br>
      <label for="email">Email Address:</label>
      <Input type="email" id="email" name="Email_Address">
      <br><br>
      <label for="gender">Male:</label>
      <Input type="radio" id="gender" name="sex" value="Male">
      <br><br>
      <label for="gender">Female:</label>
      <Input type="radio" id="gender" name="sex" value="Female">
      <br><br><br>
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <button type="Submit">SUBMIT</button>

    </fieldset>
  </body>
  </html>