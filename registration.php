<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pizzary</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<header>
    <img src="foto/logo.png" alt="logo" class="logo">
        <a href="http://localhost:8282/pizzary/php/login.php" class = "loggin">
            <h3 class ="log">Logout</h3> 
            <h1 class="login"><i class="fa-solid fa-user"></i></h1>
        </a>
</header>
<body>
<div class = "adres">
    <h1>Registration</h1>
    <form action="" class = "forrm" method="POST">
        <input type="text" name = "name" class = "inp" placeholder="naam">
        <br>
        <input type="text" name = "post" class = "inp" placeholder="postcode">
        <br>
        <input type="text" name = "home" class = "inp" placeholder="huis nummer">
        <br>    
        <input type="text" name = "telefoon" class = "inp" placeholder="telefoon nummer">
        <br>    
        <input type="text" name = "username" class = "inp" placeholder="username">
        <br>    
        <input type="text" name = "email" class = "inp" placeholder="e-mail">
        <br>    
        <input type="text" name = "password" class = "inp" placeholder="password">
        <br>    
        <input type="submit" name = "submit" class = "subm" placeholder="update">
        <br>
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