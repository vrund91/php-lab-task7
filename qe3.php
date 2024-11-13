<?php
session_start();

if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    header("Location: q3.php");
    exit();	
}
?>

<html>
<head>
    <title>Secure Page</title>
</head>
<body>
    <h2>secure page</h2>
    <p>Welcome, <?php echo $_SESSION['name']; ?>!</p>
    <p>Your email address is: <?php echo $_SESSION['email']; ?></p>

    <a href="q3.php">Logout</a>
</body>
</html>
