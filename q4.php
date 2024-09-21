<?php
session_start();
$sessionTimeout=600;
if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
}
if(isset($_SESSION['LAST_ACTIVITY']))
{
	$inactiveDuration = time()-$_SESSION['LAST_ACTIVITY'];
	if($inactiveDuration > $sessionTimeout)
	{
		session_unset();
		session_destroy();
	}
}
$_SESSION['LAST_ACTIVITY']=time();
if(isset($_POST['login']))
{
	$_SESSION['loggedin']=true;
	$_SESSION['LAST_ACTIVITY']=time();
}
$loggedIn=isset($_SESSION['loggedin']) && $_SESSION['loggedin'];

?>

<html>
<body>
	<h1>Session Management</h1>
	<form method="POST" action="">
		<button type="submit" name="login">Login</button>
	</form>

	<h2>Logout</h2>
	<form method="POST">
		<button type="submit" name="Logout">Logout</button>
	</form>

	<?php if ($loggedIn): ?>
		<p>You are currently logged in.</p>
	<?php else: ?>
		<p>You are not logged in.</p>
	<?php endif ?>

</body>
</body>
</html>
