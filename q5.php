<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['remember'])) {
        setcookie("username", $_POST['username'], time() + 3600, "/");
        setcookie("password", $_POST['password'], time() + 3600, "/");
        echo "Cookies set successfully.";
    } else {
        setcookie("username", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
        echo "Cookies not set.";
    }
}
?>
<p><a href="qe5.php">Go to Login page</a></p>
