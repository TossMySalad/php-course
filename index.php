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
		$taxRate = 0.0825;

		echo "<h1>Welcome to ".$name.".</h1>";
		echo "<h2>You have $".$credit." in your wallet.</h2>";

		foreach($products as $key => $value) {
			$costWithTax = tax_calc($value, $taxRate);
			echo "<p>The ".$key." costs $".$costWithTax."</p>";
		}

		echo "<h2>Items you can afford: </h2>";

		foreach($products as $key => $value) {
			$costWithTax = tax_calc($value, $taxRate);
			if($costWithTax <= $credit) {
				echo "<p>".$key."</p>";
			}
		}

		function tax_calc($amount, $tax) {
			$calculate_tax = $amount * $tax;
			$amount = round($amount + $calculate_tax, 2);
			return $amount;
		}

		?>
	</body>
</html>
