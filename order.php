<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Order Review | Pizza Time Pizza</title>
		<meta name="author" content="Zackary Zulak" />
		<meta name="description" content="Page to confirm order">
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<h1>Pizza Time Pizza</h1>
			<h2>Order Complete!</h2>
		</header>
		<!-- Page-level main content -->
		<main>
			<section>
				<h3>Thank you for odering from us.</h3>
<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$address = $_GET['address'];
$quantity = $_GET['quantity'];
$size = $_GET['size'];

	echo ('<p>Thank you, ' .$fname. ' ' .$lname. ', your order of ' .$quantity. ' ' .$size. ' pizza(s) will arrive at ' .$address. ' .</p>');
?>
			</section>
		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>© PizzaTimePizza Inc. All rights reserved</small></p>
		</footer>
	</body>
</html>
