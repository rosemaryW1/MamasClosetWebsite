<?php
 require("connect.php");
        $select = mysqli_query($conn, "SELECT * FROM tbl_product");

        ?>
        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>Clothe Image</th>
                        <th>clothe name</th>
                        <th>clothe price</th>
                        <th>Format</th>
                    </tr>
                </thead>
                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                    <tr>
                        <td><img src="uploaded_img/<?php echo $row['product_image']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td>$<?php echo $row['unit_price']; ?>/-</td>
                        <td>
                            <a href="admin_update.php?edit=<?php echo $row['product_id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                            <a href="admin_page.php?delete=<?php echo $row['product_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        </div>


        </body>

</html>