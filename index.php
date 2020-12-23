<!DOCTYPE html>
<html>
	<head>
		<title>PHP Store</title>
	</head>
	<body>
		<?php
		// a comment
		$name = "PHP Store";
		$credit = 1000;
		$products['computer'] = 750;
		$products['car'] = 15000;
		$products['phone'] = 500;
		$products['toaster'] = 25;

		echo "<h1>Welcome to ".$name.".</h1>";
		echo "<h2>You have $".$credit." in your wallet.</h2>";
		echo "<p>A car costs $".$products['car']."</p>";
		
		?>
	</body>
</html>
