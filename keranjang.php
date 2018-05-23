<?php 
    require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    }

    mysql_select_db($database_conn, $conn);
    $query = mysql_query ("select * from barang");

    require_once("header.php");
          
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Keranjang Belanjaan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/keranjang.css" />
        <script src="main.js"></script>
    </head>
    <body>
        
</br></br>
</br>
<td>&nbsp;</td>
    <td width="80%"><p class="ats">Daftar Belanja Anda : </p>
      <hr />
      <?php require("cart_view.php"); ?></td>
  </tr>
  </body>
    </html>