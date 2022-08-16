<?php
session_start();
require connect.php;
if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION)["shopping_cart"])
    {
        $item_array_id=array_column($_SESSION["shopping cart"],"item_id");
        if(!in_array($_GET["ID"],$item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array=array(
                'Product-ID' =>$_GET['ID'],
                'product_name' => $_POST["PName"],
                'unit_price' => $_POST["id"],
                'Available_quantity' => $_POST["Available-quantity"],
            );
        }

    }
    else
    {
        $item_array=array(
            'Product-ID' =>$_GET['ID'],
            'product_name' => $_POST["PName"],
            'unit_price' => $_POST["id"],
            'Available_quantity' => $_POST["id"],
        );
        $_SESSION["shopping cart"]
    }
    
}
?>