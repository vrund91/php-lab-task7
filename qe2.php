<?php
if(isset($_COOKIE['name']))
{
	echo "welcome".$_COOKIE['name'];
}
else
{
	echo "login Again";
}