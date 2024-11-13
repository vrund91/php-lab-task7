<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		Name:
		<input type="name" name="cookie_value" /><br>
		<input type="submit" name="submit"/>
	</form>
	<?php
	if(isset($_POST['submit'])){
	$cookie_name = "username";
	$cookie_value = $_POST['cookie_value']; 
	setcookie($cookie_name, $cookie_value, time() + 3600, "/"); 

	header("Location: qe2.php"); 
	exit();
	}
	?>
</body>
</html>


