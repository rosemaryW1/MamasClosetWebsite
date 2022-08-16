<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "mamascloset");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "product_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'ProductID'               =>     $_GET["id"],  
                     'ProductName'               =>     $_POST["ProductName"],  
                     'UnitPrice'          =>     $_POST["UnitPrice"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="addingtocart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                     'ProductID'               =>     $_GET["id"],  
                     'ProductName'               =>     $_POST["ProductName"],  
                     'UnitPrice'          =>     $_POST["UnitPrice"],  
                     'item_quantity'          =>     $_POST["quantity"]      
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["ProductID"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="addingtocart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Shopping Cart</title>  
           <link rel="stylesheet" href="stylecart.css" />  
           <form action="process_cart.php" method="POST">
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Shopping Cart</h3><br />  
                <?php 
                 require_once("connect.php"); 
                $sql = "SELECT * FROM product";  
                $result = mysqli_query($conn,$sql);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="special">  
                     <form method="post" action="addingtocart.php?action=add&id=<?php echo $row["ProductID"]; ?>">  
                          <div style="border:1px solid #333; background-image:url(img/img27.jpg); border-radius:5px; padding:16px;" align="center">  
                                
                              <img class="image" src='upload2/<?php echo$row["ProductImage"];?>' alt=''>
                               <h4 class="info"><?php echo $row["ProductName"]; ?></h4>  
                               <h4 class="danger">$ <?php echo $row["UnitPrice"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="ProductName" value="<?php echo $row["ProductName"]; ?>" />  
                               <input type="hidden" name="UnitPrice" value="<?php echo $row["UnitPrice"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table">  
                     <table class=" table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td name="productName"><?php echo $values["ProductName"]; ?></td>  
                               <td name="item_quantity"><?php echo $values["item_quantity"]; ?></td>  
                               <td name="price">$ <?php echo $values["UnitPrice"]; ?></td>  
                               <td name="totalamount">$ <?php echo number_format($values["item_quantity"] * $values["UnitPrice"], 2); ?></td>  
                               <td><a href="addingtocart.php?action=delete&id=<?php echo $values["ProductID"]; ?>"><span class="text-danger">Remove</span></a></td> 
                               </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["UnitPrice"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          
                          <?php  
                          }  
                          ?>  
                     </table> 
                     <form action="process_cart.php" method="post">
                     <input type="hidden" name="totalamount" value="<?php echo number_format($values["item_quantity"] * $values["UnitPrice"], 2); ?>">
                     <input type="hidden" name="ProductName" value="<?php echo $values['ProductName']; ?>">
                     <input type="hidden" name="ClientID" value="<?php echo $_SESSION['user']; ?>">
                     <input type="hidden" name="quantity" value="<?php echo $values['Availablequantity']; ?>">
                         <input type="submit" value="order" class="button">
                    <!-- <a href="checkout.php">Checkout</a> -->
                     </form> 
                     
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
 