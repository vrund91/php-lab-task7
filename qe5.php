<html>
<body>
    <form action="q5.php" method="POST">
        Username:
        <input type="text" name="username" value="<?php if (isset($_COOKIE['username'])) { echo ($_COOKIE['username']); } ?>" />
        <br>
        Password:
        <input type="password" name="password" value="<?php if (isset($_COOKIE['password'])) { echo ($_COOKIE['password']); } ?>" />
        <br>
        <input type="checkbox" name="remember" /> Remember me
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
