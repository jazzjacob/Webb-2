<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			$_price = $_POST['price'];
			$_quantity = $_POST['quantity'];
			$_discount = $_POST['discount'];
			$_tax = $_POST['tax'];
			$_shipping = $_POST['shipping'];
			$_number_of_payments = $_POST['payments'];
			
			
			$_total_cost = ($_price * $_quantity) - $_discount + $_shipping;
	
			
			$_taxrate = ($_tax / 100) + 1;
		
			
			$_total_cost = round($_total_cost * $_taxrate, 2);
			
			
			$_monthly_payment = $_total_cost / $_number_of_payments;
			$_monthly_payment = round($_monthly_payment, 2);
		
			
			print("
				<p>
					Price: $_price<br />
					Quantity: $_quantity<br />
					Discount: $_discount<br />
					Tax: $_tax<br />
					Shipping: $_shipping<br />
					Number of payments: $_number_of_payments<br />
					Total cost: $_total_cost<br />
					Tax rate: $_taxrate<br />
					Monthly payment: $_monthly_payment<br />
					
				</p>
			");
			
			/*
			print("
				<p>
					You have selected to purchase:<br/>
					$_quantity widget(s) at<br/>
					$_price price each plus a<br/>
					$_tax percent tax rate.<br/>
					After your \$$_discount, the total cost is $_total_cost.<br />
					Divided over $_number_of_payments, that would be $_montly_payment each.
				</p>
			");*/
		?>
	</body>
</html>