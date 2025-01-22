<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barriecito&family=Dancing+Script:wght@700&family=Kalam:wght@400;700&family=Lexend+Deca:wght@700;800&family=Patua+One&family=Poppins:ital,wght@0,400;1,400;1,500&family=Trochut:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="sign-up.css">
    <title>sign-in</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="form-container">
                <div class="logo">
                    <img src="images\logo.png" alt="Logo">
                </div>

                <h3>SIGN-IN</h3>
                <?php
                    session_start();
                    if( isset($_SESSION['usernm']) && $_SESSION['usernm']=="Invalid")
                    {
                        echo "<div style='color:red'>Invalid User Name or Password</div>";
                    }
                    else
                    {
                        echo "<div style='color:red'>Welcome to First Time Login</div>";
                    }
                ?>
                <form action="sign-in-check.php" class="form-input" method="get">
                    <input class="form-item" type="text" name="Username" placeholder="Enter User Name">
                    <input class="form-item" type="password" name="Password" placeholder="Enter password">
                    <div class="btn">
                        <input class="form-btn" type="submit" value="SIGN-IN" name="Sign-in">
                        <input class="form-btn" type="reset" value="RESET" name="Reset">
                        <a href="sign-up.php"><input class="form-btn" type="button" value="SIGN-UP"
                                name="Sign-up"></a>
                    </div>
                    <div class="forget"><a href="forget-pass.html">forget password?</a></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

