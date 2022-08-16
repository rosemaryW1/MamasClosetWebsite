<html>
    <head>
        <title>View Categories</title>
        <link rel="stylesheet" href="categoryviewstyle.css">
    </head>
    <body>
        <h1><u>Category Table</u></h1>
       <table class="table">
            <thead>
                <th>CategoryID</th>
                <th>Category Name</th>
                <th>IsDeleted</th>
                

            </thead>
            <tbody>
               
<?php
require_once("category-select.php");
foreach($test as $key=> $value){
 ?>     
<tr>
<td><?php echo $value["categoryID"]?></td>
<td><?php echo $value["categoryName"]?></td>
<td><?php echo $value["isdeleted"]?></td>






</tr>
<?php
}
?>
</tbody>
           
        </table>
    </body>
</html>