<!DOCTYPE html>
<html>
    <head>
        <title>View Products</title>
        <link rel="stylesheet" href="styleproductview.css">
    </head>
    <body>
        <h1><u>Products Table</u></h1>
       <table class="table">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Unit Price</th>
                    <th>Available Quantity </th>
                    <th>Created at</th>
                    
                </tr>
            </thead
            <?php
            require("connect.php");
            $select = mysqli_query($conn, "SELECT * FROM product");

            ?>
                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                    <tr>
                    <td><?php echo $row['ProductID']; ?></td>
                        <td><?php echo $row['ProductName']; ?></td>
                        <td><img src="upload2/<?php echo $row['ProductImage']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['UnitPrice']; ?>/-</td>
                        <td><?php echo $row['Availablequantity']; ?></td>
                        <td><?php echo $row['Createdat']; ?></td>
                        <td>
                            <form action="edit_products.php" method="post">
                                <input type="hidden" name="prod_id" value="<?php echo $row['ProductID']; ?>">
                                <input type="submit" value="Edit" name="edit">
                                <input type="submit" value="Delete" name="delete">
                            </form>

                           </td>
                    </tr>
                <?php } ?>
    </body>
</html>