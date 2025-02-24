<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
		
			ini_set ('display_errors', 1);
			// Let me learn from my mistakes!
			error_reporting (E_ALL | E_STRICT);
			
			$_name = $_POST['name'];
		
			print("<p>Hello there, $_name!</p>");
		?>
	</body>
</html>