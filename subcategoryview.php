<html>
    <head>
        <title>View Subcategories</title>
        <link rel="stylesheet" href="subcategoryviewstyle.css">
    </head>
    <body>
        <h1><u>SubCategory Table</u></h1>
       <table class="table">
            <thead>
                <th>SubcategoryID</th>
                <th>Subcategory Name</th>
                <th>CategoryID</th>
                <th>IsDeleted</th>
                

            </thead>
            <tbody>
               
<?php
require_once("subcategory-select.php");
foreach($test as $key=> $value){
 ?>     
<tr>
<td><?php echo $value["SubcategoryID"]?></td>
<td><?php echo $value["SubcategoryName"]?></td>
<td><?php echo $value["categoryID"]?></td>
<td><?php echo $value["isdeleted"]?></td>




<td><a href=subcategory-select.php?edit="<?php echo $value["SubcategoryID"]?>">View</a></td>
<td><p class="button"><a href="\MamasClosetWebsite\Login.php"><input type="submit"value="EDIT"></a></p></button>
</td>

</tr>
<?php
}
?>
</tbody>
           
        </table>
    </body>
</html>