<?php
session_start();
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    header("Location: qe3.php");
    exit();
}
?>
<html>
<body>
    <h2>FORM LOGIN</h2>
    <form method="POST">
        Name:
        <input type="text" name="name" /><br>
        Email:
        <input type="email" name="email" /><br>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>
