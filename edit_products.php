<?php

require("connect.php");


$product_id;
$prod_name;
$prod_price;
$prod_qty;

if (isset($_POST['edit'])) {
    $p_id = $_POST['prod_id'];

    $sql1 = "SELECT * FROM product WHERE ProductID=$p_id";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) == 1) {
        $row1 = mysqli_fetch_assoc($result1);

        $product_id = $row1['ProductID'];
        $prod_name = $row1['ProductName'];
        $prod_price = $row1['UnitPrice'];
        $prod_qty = $row1['Availablequantity'];
    }
}

if (isset($_POST['update'])) {
    $prod_ID = $_POST['prod_id'];
    $product_name = $_POST["new_prodName"];
    $product_desc = $_POST["new_prodDescription"];
    $product_price = $_POST["unit_price"];
    $product_qty = $_POST["add_qty"];

    $update_qr = "UPDATE product SET ProductName='$product_name',UnitPrice=$product_price,Availablequantity=$product_qty WHERE ProductID=$prod_ID";
    mysqli_query($conn, $update_qr);
    mysqli_error($conn);

    header("location: Productview.php");
}

if (isset($_POST['delete'])) {
    $prod_id = $_POST['prod_id'];

    $del_sql = "DELETE FROM product WHERE ProductID=$prod_id";
    mysqli_query($conn, $del_sql);
    header("location: Productview.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Edit Products</title>
    <!-- <link rel="stylesheet" href="../Css_files/add_product.css"> -->
    <link rel="stylesheet" href="style008.css">

</head>

<body>

    <section class="outline">
        <div class="title">
           
            <h1>EDIT PRODUCTS</h1>
        </div>
        <hr>

        <form action="edit_products.php" method="post" enctype="multipart/form-data">
           
            <input type="hidden" name="prod_id" id="prod_id" value="<?php echo $product_id; ?>">

            <p>
                <label for="prod_name">Product Name<span class="required">*</span></label><br>
                <input type="text" name="new_prodName" id="prod_name" value="<?php echo $prod_name ?>" required>
                <br>
            </p>

        
            <div class="details1">
                <p>
                    <label for="price">Unit Price<span class="required">*</span></label><br>
                    <input type="number" name="unit_price" id="price" value="<?php echo $prod_price ?>" required>
                    <br>
                </p>

                <p>
                    <label for="qty">Quantity<span class="required">*</span></label><br>
                    <input type="number" name="add_qty" id="qty" value="<?php echo $prod_qty ?>" required>
                    <br>
                </p>

            </div>


            <input type="submit" value="UPDATE PRODUCT" name="update" class="button">
         
        </form>
    </section>

</body>

</html>