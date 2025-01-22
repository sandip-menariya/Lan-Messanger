<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Dancing+Script:wght@700&family=Kalam:wght@400;700&family=Lexend+Deca:wght@700;800&family=Mukta:wght@500&family=Patua+One&family=Poppins:ital,wght@0,400;1,400;1,500&family=Trochut:wght@700&display=swap" rel="stylesheet">
<?php
session_start();
if(isset($_SESSION['usernm']) && $_SESSION['usernm']!="")
{
    $userid=$_SESSION['id'];
}
$sql="select * from signup where id=$userid";
$connect=mysqli_connect("localhost","root","","lanmessanger");
$fetch=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($fetch);
?>
<style><?php include 'sign-in.css'; ?></style>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="head"><div class="logo"><img src="images/logo.png" alt=""></div><h2 class="brandname">Welcome to <span class="lightblue">Us Ostwal</span> Lan Messanger</h2>
     <div class="user">
        <?php
        if($row[8]!="")
        {

            echo "<img class='setuserpic' onclick='showprof()' src='profilepics/$row[8]' onclick='showprof()' alt=''>"; 
        }
        else
        {
            echo "<img class='userpic defimg' onclick='showprof()' src='images/user.png' onclick='showprof()' alt=''>"; 

        }
        ?></div></div>
    <div class="fullcontainer">
    <div class="containermain">
        <div class="friends">
            <div class="chaticon"><img src="images/chat_7.svg" alt=""> <h2>Chat</h2></div>
            <?php
            $msql="select * from signup";
            $list=mysqli_query($connect,$msql);
            
            while($y=mysqli_fetch_array($list))
            {
           $propath="profilepics/$y[8]";
           if($y[0]==$userid)
           {

           }
           else
           {

               echo  "<div class='friend'> <div class='friendprofile'><img src='$propath' alt=''></div><h3 class='usernames'><a href='index.php?id=$y[0]&usernm=$y[6]&profile=$y[8]'>$y[6]</a></h3> </div>";
           }
            }
            ?>
        </div> 
        <div class="messagebox">
            <div class="friend"> <div class="friendprofile">
                <?php
                
                if(isset($_REQUEST['id']))
                {
                $_SESSION['receiverid']=$_REQUEST['id'];
                $usernm=$_REQUEST['usernm'];
                $profile=$_REQUEST['profile'];
                  echo  "<img src='profilepics/$profile' alt=''></div> <h3 class='usernames'>$usernm</h3></div>";
                }
                else{
                    echo  "<img class='userpic defimg' src='images/user.png' alt=''></div> <h3 class='usernames'></h3></div>";

                }
                ?>
                <div class="messages">
                    
                    <?php
                    if(isset($_REQUEST['id']))
                    {
                         $rid=$_REQUEST['id'];
                        $sql="select * from messagebox where (senderid=$userid and receiverid=$rid) or (receiverid=$userid and senderid=$rid)";
                        $x=$query=mysqli_query($connect,$sql);
                        while($y=mysqli_fetch_array($x))
                        {
                         if($y[1]==$userid)
                         {

                          echo   "<div class='sendmsg'><h2 class='message'>$y[3]</h2></div>";
                         }
                         else
                         {

                          echo   "<div class='receivemsg'><h2 class='message'>$y[3]</h2></div>";
                         }
                        }
                    }
                    ?>
            </div>
        <form action="messagesave.php" class="files">
            <input type="text" placeholder="Type here" name="message">
           <button class="btn-bg" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </form>
    </div>
</div>
<div id="allsettings">
    <div id="settings">
        <div class="close"><i class="fa fa-times" aria-hidden="true" onclick="hidesettings()"></i></div>
        <div class="user"><?php 
        if($row!="")
        {

            echo "<img class='setuserpic' src='profilepics/$row[8]' alt=''>"; 
        }
        else{
            
            echo "<img class='userpic defimg' src='images/user.png' alt=''>"; 
        }
        ?> </div>
     
        <form class="setprofile" action="uploadpic.php" method="post" enctype="multipart/form-data">
            <?php
            
            $sql="select * from signup where id=$userid";
            $query=mysqli_query($connect,$sql);
            $y=mysqli_fetch_array($query);
            echo "<h2 class='username'>$y[6]</h2>"
            ?>
            <input type="file" class="selectfile" value="Choose Image" name="file" >
            <input type="submit" value="set profile" class="uploadpro">
            <input type="button" value="Saved Profiles" onclick="show()">
        </form>
    </div>
    </div>
        <div id="savedprof">
        <div class="close"><i class="fa fa-times" aria-hidden="true" onclick="hideprof()"></i></div>
            <form class="mypics" action="uploadpic.php">
                <?php
                $msql="select * from profilepic where userid=$userid";
                $query=mysqli_query($connect,$msql);
                $imgid=97;
                while($pic=mysqli_fetch_array($query))
                {    
                    $idchar=chr($imgid);
                    $picpath="profilepics/$pic[1]";        
               echo "<label for='$pic[1]' ><div class='savepics'><img class='selectpic' id='$idchar' src='$picpath' alt=''></div><input type='radio' name='selectprofile' value='$pic[1]' id='$pic[1]' onclick=border('$idchar')></label>";
               $imgid++;
                }
                ?>
                <input type="submit" value="Update profile">
            </form>
        </div>
        </div>
</body>
</html>
<script>
//    let event=document.querySelectorAll("user");
//    event.forEach(classadd => {
//     classadd.a
//    });
   function border(sh)
   {
     let border=document.getElementsByClassName("selectpic");
     for (let i = 0; i < border.length; i++)
     {
     border[i].classList.remove("border");
     }
     remove=document.getElementById(sh);
     remove.classList.add("border");

   }
   function show()
   {
//    let shhide=document.getElementById("allsettings");
//    shhide.classList.toggle("shhide");   
    hide=document.getElementById("savedprof");
   hide.classList.remove("shhide");
   }
   function showprof()
   {
    hide=document.getElementById("allsettings");
   hide.classList.remove("shhide");
   hide=document.getElementById("savedprof");
   hide.classList.add("shhide");
   }
   hideprof();
   function hideprof()
   {   
    hide=document.getElementById("savedprof");
    hide.classList.add("shhide");
   }
   hidesettings();
   function hidesettings()
   {
    hide=document.getElementById("allsettings");
    hide.classList.add("shhide");
   }
   
</script>