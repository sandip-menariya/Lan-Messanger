<?php
session_start();
if(isset($_SESSION['usernm']))
{
	echo "The Current user : ".$_SESSION['usernm'];
}
else
{
	echo "Please Login <a href='sign-in.php'>Login</a>";
}
?>