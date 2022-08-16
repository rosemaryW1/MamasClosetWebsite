<div class="section-body">

                <?php
                require_once("connect.php");
                $sql = "SELECT *FROM product INNER JOIN subcategories ON product.SubcategoryID=subcategories.SubcategoryID";

                $result = mysqli_query($conn, $sql);
                echo mysqli_error($conn);
                while ($row = mysqli_fetch_assoc($result)) {
                    $ProductImageName = $row['ProductImage'];
                    $product_name = $row['ProductName'];
                    $product_id = $row['ProductID'];
                    $product_price = $row['UnitPrice'];
                    $subcategory_name = $row['SubcategoryName'];
                    echo "
                        <div class='product-card'>
                        <img src='upload2/$ProductImageName' alt=''>

                        <div class='product-card-details'>
                        <p class='product-gender'>
                            $subcategory_name
                         </p>
                        <p class='product_name'>$product_name</p>
                        <p class='product_price'>$product_price<small>sh</small></p>
                        <div class='icon'>
                        <i class='fa fa-cart-plus' ></i>
                        </div>
                        </div>
                        </div>
                        ";
                }
                ?>
