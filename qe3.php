<?php
session_start();
var_dump($_SESSION); 

if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    echo "You are not logged in.";
    exit;	
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];
?>

<html>
<head>
    <title>Secure Page</title>
</head>
<body>
    <h2>Welcome</h2>
    <p>Welcome <?php echo ($name); ?>!</p>
    <p>Your email address is: <?php echo ($email); ?></p>
</body>
</html>
