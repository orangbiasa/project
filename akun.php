<?php

    session_start();

?>
<!DOCTYPE>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="cobacss.css">
        <link rel="stylesheet" type="text/css" href="aboutus.css">
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/keranjang.css">
        <title>Akun</title>
    </head>

    <body>

            <?php
			include "koneksi.php";
//			$query = mysql_query($conn,"SELECT * FROM pt8");
//			while ($row = mysql_fetch_array($query)){
//				$username  = $row['username'];
//            }
                require_once("header.php");
            ?>
            </br></br></br>
        <p>
            <img class="pictlogin" src="login.jpg"><span class="halo"> <?php echo "Halo, selamat datang ". $_SESSION['username']; ?></span>
        </p>
        </br>
        <p>
            <a class="qq" href="keranjang.php">Lihat Keranjang Belanjaan Anda </a>
        </p>
        </br>
        <p>
            <button class="haha" ><a class="hehe" href="logout.php">Logout</button></a>
        </p>

    </body>

</html>