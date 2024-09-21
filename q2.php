<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	setcookie("name",$name,time()+3600);
}
?>
<html>
<body>
	<form method="POST" action="qe2.php">
		Name:<input type="text" name="name"/>
		<input type="submit" name="submit">
	</form>
</body>
</html>