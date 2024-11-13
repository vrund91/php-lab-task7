<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form method="POST">
        Name:
        <input type="text" name="name"/>
        <input type="submit" name="submit" value="submit"/>
        <?php
        if(isset($_POST['submit']))
        {
            $cookie_name="user";
            $cookie_value=$_POST['name'];

            setcookie($cookie_name,$cookie_value,time()+3600,"/");
            header("Location: qe1.php");
            exit();
        }
        ?>
    </form>
</body>
</html>
