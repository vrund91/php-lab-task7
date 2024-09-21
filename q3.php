<?php
session_start();
var_dump($_SESSION); // For debugging

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
 
}
?>
<html>
<body>
    <form method="POST" action="qe3.php">
        Name:
        <input type="text" name="name" required/><br>
        Email:
        <input type="email" name="email" required/><br>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>
