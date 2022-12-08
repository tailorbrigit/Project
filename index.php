<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Urlap</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="action_page.php">
        <div class="container">
          <h1>Regisztráció</h1>
          <p>Töltse ki a hiányzó mezőket!</p>
          <hr>
      
          <label for="email"><b>E-mail</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>

          <label for="username"><b>Felhasználónév</b></label>
          <input type="text" placeholder="Enter Username" name="username" id="username" required>
      
          <label for="psw"><b>Jelszó</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      
          <label for="psw-repeat"><b>Jelszó újra</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
          <hr>
      
          <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
          <button type="submit" class="registerbtn">Regisztráció</button>
          <button type="submit" class="backbtn">Vissza</button>
        </div>
      
        <div class="container signin">
          <p>Van már profilja? <a href="/login.html">Kattintson ide</a>.</p>
        </div>
      </form>
    

<?php

?>



</body>


</html>

