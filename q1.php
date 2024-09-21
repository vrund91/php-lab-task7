<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	setcookie("name",$name,time() -3600, "/");
	echo "cookie 'name is set to:".$name;
}
?>
<html>
<body>
	<form method="POST" action="qe1.php">
		Name:<input type="text" name="name" required/>
		<input type="submit" name="submit"/>
	</form>
</body>
</html>