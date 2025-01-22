<?php
session_start();
$senderid=$_SESSION['id'];
$receiverid=$_SESSION['receiverid'];
date_default_timezone_set("Asia/Kolkata");
$msg=$_REQUEST['message'];
$date=date("y-m-d h:i:s");
$conn=mysqli_connect("localhost","root","","lanmessanger");
$msql="insert into messagebox(senderid,receiverid,message,msgdate)values($senderid,$receiverid,'$msg','$date')";
mysqli_query($conn,$msql);
header("location:index.php");
?>