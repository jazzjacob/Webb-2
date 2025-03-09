<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$_text_file = './text-file-test.txt';
			
			if (is_writable($_text_file)) {
				file_put_contents($_text_file, "Oh hello there". PHP_EOL, FILE_APPEND);
				print('<p>Text has been added to file.</p>');
			} else {
				print('<p style="color: red;">Your quotation could not be stored due to a system error.</p>');
			}
		?>
	</body>
</html>