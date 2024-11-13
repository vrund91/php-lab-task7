<?php
if(isset($_COOKIE['user'])) {

    echo "Cookie 'user' is set:" . $_COOKIE['user'];
}      
else
{
    echo "Cookie 'username' is not set.";
}
?>
