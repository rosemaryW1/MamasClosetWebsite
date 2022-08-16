<?php

require('connect.php');
$id = $_GET['ID'];



$sql = "select * from users where ClientID='$ID'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


$product_name = $row['fname'];
$unit_price = $row['email'];
;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mama's Closet product page</title>
    <link rel="stylesheet" href="adminpagestyle.css">
</head>

<body>
    <div class="header">
        <h1> MAMA'S CLOSET<sup><small>TM</small></sup></h1>
        <p>
        <h1>EDIT User FORM</h1>
        </p>

    </div>
    <br />
    <br />
    <form action="processedituser.php" method="post" enctype="multipart/form-data">

        <input value=<?php echo "$ID"; ?> type='hidden' name='id'>
        <div class="userName">
            <label for="productID"> Username</label>
            <br>
            <input type="text" name="productID" id="productID" placeholder="Product ID" value=<?php echo "$product_name"; ?> required>
        </div>

        <div class="product_name">
            <label for="productName">Email</label>
            <br>
            <input type="text" name="product_Name" id="productName" placeholder="Product name" value=<?php echo "$product_desc"; ?> required>


        </div>









        <div class="buttons">
            <Button type="submit">UPDATE</Button>


        </div>

    </form>



</body>

</html>