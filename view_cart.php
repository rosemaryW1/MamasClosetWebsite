<html>
    <head>
        <title>View Order</title>
        <link rel="stylesheet" href="viewerss.css">
    </head>
    <body>
        <table class="table">
            <thead>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
               
                
            </thead>
            <tbody>
                <?php
                require_once("cart_select.php");
                foreach($test as $key=> $value){
             ?>     
              <tr>
                  <td><?php echo $value["order_id"]?></td>
                  <td><?php echo $value["ClientID"]?></td>
                  <td><?php echo $value["ProductName"]?></td>
                  <td><?php echo $value["quantity"]?></td>
                  
                  
              </tr>
              <?php
              }
              ?>
            </tbody>
        </table>
    </body>
</html>