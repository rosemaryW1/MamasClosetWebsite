<?php

@include 'connect.php';

session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mama's Closet</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link  href="fontawesome.com">
	<style>
		* {
			box-sizing: border-box;
		}

		.column {
			float: left;
			width: 25%;
			padding: 5px;
		}

		/* Clearfix (clear floats) */
		.row::after {
			content: "";
			clear: both;
			display: table;
		}

	</style>
</head>
<body>
<section class="header">
	<nav>
		<a href="index"><img src="images/MamaC.jpg"></a>
		<div class="nav-links">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Products</a></li>
				<li><a href="register_form.php">Account</a></li>
				<?php if(isset($_SESSION['user'])){ ?>
					<li><a href="">My Account:<?php echo $_SESSION['fname']?></li>
				<?php }?>
				<li><a href="">Feedback</a></li>

			</ul>

		</div>
	</nav>
	<div class="text-box">
		<h1>YOUR NUMBER ONE ONLINE CLOTHES STORE</h1>
		<p>Checkout our unique pieces from gym wear category,tops,dresses and jeans categories.
			We believe there is something for everyone.</p>
		<a href=""class="hero-btn">Shop with us</a>
	</div>

</section>
<section class="benefits">
	<h1>This is why you should shop with us</h1>
	<p>TRUST US WITH ALL YOUR FASHION WANTS LADIES. WE GOT YOU.</p>
<div class="row">
	<div class="benefits-column">
		<h3>Quality</h3>
		<p>We guarantee you quality wear that will last you for a good amount of time. Every item is sourced from renowned brands and its quality verified by our top designers</p>
	</div>
	<div class="benefits-column">
		<h3>Affordable</h3>
		<p>Take advantage of the best prices you could get on any online clothe store. We care about your financial needs.</p>

	</div>
	<div class="benefits-column">
		<h3>Unique</h3>
		<p>Each of our clothe pieces are uniquely designed and are rare to find. Get ready to be outstandingly gorgeous.</p>

	</div>

</div>


<section class="Offers">
	<h1>Here is what we offer</h1>
	<p>Choose a variety from our gym wear,jeans tops and dresses.</p>
	<div class="row">
		<div class="Offers-col">

			<div class="layer">
				
			</div>
		</div>
	</div>

</section>
<div class="row">
	<div class="column">
		<img src="images/womensgymwear.jpg"  style="width:100%">
		<h3>GYM WEAR</h3>
	</div>
	<div class="column">
		<img src="images/womensjeans.jpg"  style="width:100%">
		<h3>JEANS</h3>
	</div>
	<div class="column">
		<img src="images/womentop.jpg"  style="width:100%">
		<h3>TOPS</h3>
	</div>
	<div class="column">
		<img src="images/womendress.jpg"  style="width:100%">
		<h3>DRESSES</h3>
	</div>
</div>
<section class="ComingSoon,">
	<h1>We are introducing Accesories</h1>
	<p>Hey ladies we are bringing your way fashionable accesories to spice up your dressing.</p>
	<div class="row">
	<div class="coming-col">
	<img src="images/hats.jpg">	
	<h3>HATS ON LADIES</h3>

	</div>	
	<div class="comingSoon-col">
	<img src="images/scarfs.jpg">	
	<h3>SCARFS ON LADIES</h3>

	</div>	
	</div>
	
</section>
<section class="testimonials">
	<h1>Here is what our customers say</h1>
	<p>This is feedback direct from our esteemed customers.</p>
	<div class="row">
		<div class="testimonial-col">
			<img src="images/user1.jpg">
			<div>
				<p>"If you're looking for quality then Mama's Closet should definitely be your first choice"</p>

				<h3>Christine B.</h3>
			</div>
			<div class="testimonial-col">
			<img src="images/user2.jpg">
			<div>
				<p>"I think everyone should discover this great online store, because it's definetely the best. It is a solid 10."</p>
				<h3>Sabrina.</h3>
			</div>
			<div class="testimonial-col">
				
			<img src="images/user3.jpg">
			<div>
				<p>"I love the tops and jeans. For some reason I always find great pairs at the same store. I'm excited honestly."</p>
				<h3>Joline Amanda.</h3>
			</div>
			
		</div>
		
	</div>
</section>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3> About Us</h3>
                <p>About Us<br> App Info<br> Media Handles<br> </p>    
            </div>

            <div class="footer-col-1">
                <h3> Contact Us</h3>
                <p>+254700197083<br> mamascloset@gmail.com<br> Woodvale Avenue<br> </p>   
            </div>

               <div class="footer-col-1">
                <h3> Useful Information</h3>
                <p>Terms&Conditions<br> Privacy Policy<br> User Guide<br> </p>   
            </div>
            
        </div>   
    </div>  
</div>



</body>
</html>