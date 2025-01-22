<?php
session_start();
$id=$_SESSION['id'];
$filepath="profilepics//";
$conn=mysqli_connect("localhost","root","","lanmessanger");
$sql="select count(userid) from profilepic where userid=$id";
$x=mysqli_query($conn,$sql);
$y=mysqli_fetch_array($x);
$next=$y[0]+1;
if($next<=5)
{
    $extension=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
    if($next==1)
    {
        $filename=$id.'_A.'.$extension;
    }
    if($next==2)
    {
        $filename=$id.'_B.'.$extension;
    }
    if($next==3)
    {
        $filename=$id.'_C.'.$extension;
    }
    if($next==4)
    {
        $filename=$id.'_D.'.$extension;
    }
    if($next==5)
    {
        $filename=$id.'_E.'.$extension;
    }
    $sql="insert into profilepic(userid,picpath) values($id,'$filename')";
    mysqli_query($conn,$sql);
    $filename=$filepath.$filename;
    $filetmp=$_FILES['file']['tmp_name'];
    move_uploaded_file($filetmp,$filename);
}
$picname=$_REQUEST["selectprofile"];
$sql="update signup set propic='$picname' where id=$id";
$set=mysqli_query($conn,$sql);
header("location:index.php");
// storing messages into database

?>