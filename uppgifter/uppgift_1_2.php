<?php
	header('Content-type: text/plain');
	
	foreach($_SERVER as $key => $value) {
		print "$key: $value\n";
	}
	
?>