<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pizzary</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<header>
    <img src="../foto/logo.png" alt="logo" class="logo">
        <a href="http://localhost:8282/pizzary/php/registration.php" class = "loggin">
            <h3 class = "log">Registration</h3> 
            <h1 class="login"><i class="fa-solid fa-user"></i></h1>
        </a>

</header>
<body>
<div class = "adres">
    <h1>Login</h1>
    <form action="" class = "forrm" method="POST">
        <input type="text" name ="username" class ="inp" placeholder="Gebruikersnaam">
        <br>
        <input type="text" name ="password" class ="inp" placeholder="Wachtwoord">
        <br>    
        <input type="submit" name ="submit" class ="subm" placeholder="Inloggen">
        <br>
        <br>
        <a href="http://localhost:8282/pizzary/php/password.php">Change your password</a>
    </form>
</div>

</body>
<footer>
    <div class="footerData">
        <p class="footerInformation"><i class="fa-solid fa-location-dot"></i>&nbsp; van Madeliebroekstraat 11, 2527 PN</p>
        <p class="footerInformation"><i class="fa-solid fa-envelope"></i>&nbsp; calzone@cc.nl</p>
        <P class="footerInformation"><i class="fa-solid fa-phone"></i>&nbsp; +31622171257</p>
    </div>
</footer>
</html>
<script src="https://kit.fontawesome.com/d3399b8b8c.js" crossorigin="anonymous"></script>