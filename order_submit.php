<?php
if(isset($_POST['order'])){
	$selected_food=$_POST['food'];
	$quantity=$_POST['quantity'];

	$counter=0;

	echo "Success!here is what you ordered";
	while ($counter < $quantity) {
		echo '<img src="images/cookie.jpg"  style="width:200px;height:200px">';
		echo "\r";
		$counter++
	}


}
$quantity=$_POST['quantity'];
echo "order successful!Here is what you ordered";
for ($q=1; $q <=$quantity ; $q++) { 
	echo "<img src='images/cookie.jpg>";
}
if (empty($quantity)||$quantity==0) {
	http_response_code(400);
}
?>