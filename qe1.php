<?php
if(isset($_COOKIE['name']))
{
	echo "cookie set".$_COOKIE['name'];
}
else
{
	echo "cookie not set";
}
?>