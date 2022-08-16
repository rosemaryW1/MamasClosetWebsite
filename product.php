<html>

<head>
  <title>PRODUCTS</title>
  <link rel="stylesheet" href="Adminstyle.css">
</head>

<body>
  <form action="Process-product.php" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>MAMA'S CLOSET</legend>
      <p>WELCOME ADMINISTRATOR</P>
      <p>EDIT PRODUCTS</P>
      
      <br><br>
      <label for="PName">Product Name:</label>
      <Input type="text" id="PName" name="Product-Name">
      <br><br>
      <!-- <label for="PImage">Product Image:</label>
      <Input type="file" id="PImage" name="ProductImage"> -->
      <label for="img">Product image:</label>
      <input type="file" id="img" name="img">
      <br><br>
      <label for="UnitPrice">Unit-Price:</label>
      <Input type="number" id="UnitPrice" name="Unit-Price">
      <br><br>
      <label for="AvQ">Available-quantity:</label>
      <Input type="number" id="AvQ" name="Available-quantity">
      <br><br>
      <label for="SCID">Subcategory-ID:</label>
      <Input type="number" id="SCID" name="Subcategory-ID">
  
      
      <br><br>
      <li><label for="category">Category</label>
        <select id="category" name="category">
        <?php
          require_once("connect.php");
          $sql = "SELECT categoryName FROM categories";
          $result = mysqli_query($conn,$sql);

          if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
              $categoryName = $row['categoryName'];
              $categoryID = $row['categoryName'];
              echo "<option value='categoryID'>$categoryName</option>";
            }
          }
   
      
        ?>
        </select>
      </li>

      <button type="Submit" name="submit">ADD</button>

      <br><br><br>

    </fieldset>
</body>

</html>