<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username']!="")
{
    $userid=$_SESSION['userid'];
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign-in.css">
    <style>
        .shhide{display: none;}
    </style>
</head>
<body>
    <div class="head"><div class="logo"><img src="images/back-sign-up.jpg" alt=""></div><h2 class="brandname">Welcome to <span class="lightblue">Us Ostwal</span> Lan Messanger</h2> <div class="user"><img class="userpic" onclick="hide()" src="images/user.png" alt=""></div></div>
    <div class="containermain">
        <div class="users">
            <?php
            $connect=mysqli_connect("localhost","root","","lanmessanger");
            $sql="select * from signup where user"
            ?>
            <div class="username"> <div class="userprofile"><img src="images/user.png" alt=""></div> <h3 class="usernames">sandip menariya</h3></div>
        </div> 
        <div class="message">
            <div class="username"> <div class="userprofile"><img src="images/user.png" alt=""></div> <h3 class="usernames">sandip menariya</h3></div>
        <form action="" class="files">
            <input type="text" placeholder="Type here" name="message">
            <input class="btn-bg" type="submit" name="message" value="Send">
        </form>
    </div>
</div>
    <div class="settings">
        <div class="user"><img class="userpic" src="images/user.png" alt=""></div>
        <form class="setprofile" action="uploadpic.php" method="post" enctype="multipart/form-data">
            <input type="file" class="selectfile" value="Choose Image" name='file'>
            <input type="submit" value="set profile" class="uploadpro">
        </form>
    </div>
    
</body>
</html>
<script>
//    let event=document.querySelectorAll("user");
//    event.forEach(classadd => {
//     classadd.a
//    });

   function hide()
   {
   let shhide=document.getElementsByClassName("settings");
   shhide[0].classList.toggle("shhide");
   }
 
</script>