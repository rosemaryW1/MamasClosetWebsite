<!DOCTYPE html>
    <html>
    <head>
        <title>View users</title>
        <link rel="stylesheet" href="viewerss.css">
    </head>
    <body>
        <table class="table">
            <thead>
                <th>First Name</th>
                <th>Second Name</th>
                <th>password</th>
                <th>Date_of_Birth</th>
                <th>Email Address</th>
                <th>Gender</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                require_once("users_select.php");
                foreach($test as $key=> $value){
             ?>     
              <tr>
                  <td><?php echo $value["fname"]?></td>
                  <td><?php echo $value["sname"]?></td>
                  <td><?php echo $value["password"]?></td>
                  <td><?php echo $value["dob"]?></td>
                  <td><?php echo $value["email"]?></td>
                  <td><?php echo $value["gender"]?></td>     
                  <td><a href=view_cart.php?edit="<?php echo $value["fname"]?>">View</a></td>
                  <td>
                  <form action="edit_users.php" method="post">
                                <input type="hidden" name="cust_id" value="<?php echo $value['ClientID']; ?>">
                                <input type="submit" value="Edit" name="edit">
                                <input type="submit" value="Delete" name="delete">
                            </form>
                  </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
        </table>
    </body>
</html>
