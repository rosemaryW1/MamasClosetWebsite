<?php

require_once("connect.php");

$sqli="SELECT * FROM categories";
$result = mysqli_query($conn, $sqli);
$test=mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_GET["edit"])){
 $id=$_GET["edit"];
 $sqli="SELECT * FROM categories WHERE Category-ID=$CID";

}
?>