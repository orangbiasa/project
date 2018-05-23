<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
</head>
<body>
   <?php
    require_once("header.php");

     session_start();

    if (isset($_SESSION['username'])) {
    header( "Location: akun.php" );
    }
   ?>

    <div class="login-page">
        <div class="form">
          <form class="login-form" action = "proseslogin.php" method = "post" >
            <input type="text" placeholder="username" name = "username" required/>
            <input type="password" placeholder="password" name = "password" required/>
            <button>login</button>
            <p class="message">Belum punya akun? <a href="signup.php">Daftar</a></p>
          </form>
        </div>
      </div>   
</body>
</html>