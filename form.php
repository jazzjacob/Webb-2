<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<p>Hello this is the form page</p>
		<form action="handle_form.php" method="post">
		  <label for="name">Enter your name: </label>
			<input type="text" name="name" />
			<input type="submit" value="Send my feedback!" />
		</form>
		<a href="handle_get.php?name=Hassan">Hassan</a>
	</body>
</html>