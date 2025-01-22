<?php
$Firstname = $_REQUEST['Firstname'];
$Lastname = $_REQUEST['Lastname'];
$Dob = $_REQUEST['Dob'];
$Email = $_REQUEST['Email'];
$Moblie = $_REQUEST['Mobile'];
$Username = $_REQUEST['Username'];
$Password = $_REQUEST['Password'];
$Confirm=$_REQUEST['Confirm'];

if($Password==$Confirm)
{
  $Password=md5($Password);
   $Call = mysqli_connect("localhost","root","","lanmessanger");
   $Sql = "insert into signup(Firstname,Lastname,Dob,Email,Mobile,Username,Password)values('$Firstname','$Lastname','$Dob','$Email','$Moblie','$Username','$Password')";
  $Save=mysqli_query($Call,$Sql);
    if($Save)
    {
       header("location:index.php");
    }
    else
    {
        echo "<h1>data not saved</h1>";
        
    }
}
else
{
    echo "<h1>server not connected</h1>";
    
}

    ?>