<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIGNUP</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
</head>
<body>
    <?php
    require_once("header.php");
    ?>
   <div class="login-page">
        <div class="form">
          <form class="login-form" action="prosessignup.php" method= "post" >
            <input type="text" placeholder="username" name= "username" required/>
            <input type="password" placeholder="password" name = "password" required/>
            <input type="password" placeholder="ulangi password" name = "ulangi_password" required/>
            <input type="text" placeholder="email" name= "email" required/>
            <input type="text" placeholder="no.telp" name="no_telp" required/>
            <button>Daftar</button>
            <p class="message">Sudah punya akun? <a href="login.php">Masuk</a></p>
          </form>
        </div>
      </div>
      
</body>
</html>