<!DOCTYPE html>
<head>
</head>
<body>
	<p>Hello, I am <?php print("Jacoby");?></p>
	<p>Here is a link:
		<?php
			// This is a comment
			print("<a href=\"https://www.jacobreinikainen.com\">jacobreinikainen.com</a>")
		?>
	</p>
	<p>
		Here is a link to another php-file:
		<?php
			// This is a multiline comment
			print("<a href=\"phpinfo.php\">php info</a>")
			
		?>
		
		<pre>
			<?php
				// Show the value of the $_SERVER variable
				print_r($_SERVER);
				
				$name = "Jacob";
				$age = 27;
				
				// There is a difference between using single or double quotation marks.
				print("<p>Hello I am $name and I am $age years old.</p>");
				print ('<p>Hello I am $name and I am $age years old.</p>');
			?>
		</pre>
	</p>
</body>