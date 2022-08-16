<html>
<head>
	<title>ORDER FORM</title>
    <link rel="stylesheet" type="text/css" href="order.css">
</head>
<body>
	<form action="order_submit.php" method="post">
<fieldset>
	<legend><h1>My Order</h1></legend>
	<p class= "quantity"><label for="quantity:">Quantity</label>
		<input type="number" id="quantity" name="quantity" min="1" max="5"></p>
		<p class="food"><label for="fooditems">Food Item:</label>
         <select id="simple" name="fooditems">
         	<option>Cookies</option>
         	<option>Hotdogs</option>
         	<option>Banana</option>
         	<option>Muffin</option>
         </select>
    </p>
    <p class="button">
    	<button type="submit">ORDER</button>
    </p>
	
</fieldset>
</form>\
</body>
</html>