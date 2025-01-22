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
    <title>sign-up</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="logo">
                <img src="images\logo.png" alt="Logo">
            </div>

            <h3>SIGN-UP</h3>
            <form action="datasave.php" class="form-input" method="post">
                <div class="form-in-item">
                    <input class="form-item" type="text" name="Firstname" placeholder="Enter your First name">
                    <input class="form-item" type="text" name="Lastname" placeholder="Enter your Last name">
                </div>
                <div class="form-in-item">
                    <input class="form-item" type="date" name="Dob" placeholder="Enter Date Of Birth">
                    <input class="form-item" type="email" name="Email" placeholder="Enter Your E-Mail">
                </div>
                <div class="form-in-item">
                    <input class="form-item" type="number" name="Mobile" placeholder="Enter Your Mobile Number">
                    <input class="form-item" type="text" name="Username" placeholder="Enter User Name">
                </div>
                <div class="form-in-item">
                    <input class="form-item" type="password" name="Password" placeholder="Enter password">
                    <input class="form-item" type="password" name="Confirm" placeholder="confirm password">
                </div>
                <div class="btn">
                    <input class="form-btn" name="submit" type="submit">
                    <input class="form-btn" type="reset" value="RESET" name="reset">
                </div>
                <div class="sign-in"><p>if you have already an account? <a href="sign-in.php">sign-in</a></p></div>
            </form>
        </div>
    </div>
</body>

</html>