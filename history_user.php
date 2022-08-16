<?php if(!isset($_SESSION)){session_start();}?>
<html>
    <head>
        <title>Order History</title>
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

                require_once("connect.php");
                
                $sqli="SELECT * FROM oders where ClientID=".$_SESSION['user'];
                $result = mysqli_query($conn, $sqli);
                $test=mysqli_fetch_all($result, MYSQLI_ASSOC);
                
                if(isset($_GET["edit"])){
                 $id=$_GET["edit"];
                 $sqli="SELECT ClientID FROM users" ;
                
                }
                
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