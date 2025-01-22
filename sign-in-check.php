<?php
$User=$_REQUEST['Username'];
$Pass=$_REQUEST['Password'];
$Pass=md5($Pass);
$conn=mysqli_connect("localhost","root","","lanmessanger");
$sql="select * from signup where Username='$User' and Password='$Pass'";
$found=mysqli_query($conn,$sql);
$y=mysqli_fetch_array($found);
if(mysqli_num_rows($found)>0)
{
	echo "<script>alert('successfully loged in')</script>";
	session_start();
	$_SESSION['usernm']=$User;
	$_SESSION['id']=$y[0];
	header("Location:index.php");
}
else
{
	echo "<script>alert('invalid username or password')</script>";
	session_start();
	$_SESSION['usernm']="Invalid";
	header("Location:sign-in.php");
}

?>