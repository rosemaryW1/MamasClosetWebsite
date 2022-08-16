<?php

require("connect.php");


$cust_id;
$first_name;
$last_name;
$user_mail;


if (isset($_POST['edit'])) {
    $c_id = $_POST['cust_id'];

    $sql1 = "SELECT * FROM users WHERE ClientID=$c_id";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) == 1) {
        $row1 = mysqli_fetch_assoc($result1);

        $cust_id = $row1["ClientID"];
        $first_name = $row1["fname"];
        $last_name = $row1["sname"];
        $user_mail = $row1["email"];
        
    }
}

if (isset($_POST['update'])) {
    $cust_id = $_POST['user_id'];
    $fname = $_POST["new_prodName"];
    $sname = $_POST["new_prodDescription"];
    $email = $_POST["unit_price"];
  

    $update_qr = "UPDATE users SET fname='$fname',sname='$sname',email='$email' WHERE ClientID=$cust_id";
    mysqli_query($conn, $update_qr);
    mysqli_error($conn);

    header("location: usersview.php");
}

 if (isset($_POST['delete'])) {
     $user_id = $_POST['user_id'];

     $del_sql = "DELETE FROM users WHERE ClientID='$cust_id'";
     mysqli_query($conn, $del_sql);
     header("location: usersview.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Edit Products</title>
    <link rel="stylesheet" href="../Css_files/add_product.css">

</head>

<body>

    <section class="outline">
        <div class="title">
           
            <h1>EDIT USERS</h1>
        </div>
        <hr>

        <form action="edit_users.php" method="post" enctype="multipart/form-data">
            
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $cust_id; ?>">

            <p>
                <label for="prod_name">First Name<span class="required">*</span></label><br>
                <input type="text" name="new_prodName" id="prod_name" value="<?php echo $first_name ?>" required>
                <br>
            </p>

            <p>
                <label for="prod_desc">Second Name<span class="required">*</span></label><br>
                <textarea name="new_prodDescription" id="prod_desc" required><?php echo $last_name ?></textarea>
                <br>
            </p>


            <div class="details1">
                <p>
                    <label for="price">Email<span class="required">*</span></label><br>
                    <input type="text" name="unit_price" id="price" value="<?php echo $user_mail ?>" required>
                    <br>
                </p>

            </div>


            <input type="submit" value="UPDATE PRODUCT" name="update" class="button">
 
        </form>
    </section>

</body>

</html>