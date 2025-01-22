<?php
$Firstname = $_REQUEST['Firstname'];
$Lastname = $_REQUEST['Lastname'];
$Dob = $_REQUEST['DOB'];
$Email = $_REQUEST['Email'];
$Moblie = $_REQUEST['Mobile'];
$Username = $_REQUEST['Username'];
$Password = $_REQUEST['Password'];
$Call = mysqli_connect("localhost","root","","lanmessanger");
$Sql = "insert into signup(Firstname,Lastname,DOB,Email,Mobile,Username,Password)values('$Firstname','$Lastname','$Dob','$Email','$Moblie','$Username','$Password')";
$Save=mysqli_query($Call,$Sql);
if($Call)
{
    echo "<h1>server connected</h1>";
    if($Save)
    {
        echo "<h1>data saved</h1>";
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