<?php
	header('Content-type: text/plain');
	$_file_path = './uppgift_1_1.txt';
	$_data = file_get_contents($_file_path);
	$_data++;
	print("This site has been visited $_data times");
	file_put_contents($_file_path, $_data, LOCK_EX);
?>