<?php 
    require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    }

    require_once("header.php");
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daftar Menu</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/keranjang.css" />
<style>
    h1, h2, h3, p {
        margin-top:0px;
        margin-bottom:10px;
    }
    .aa{
      text-align:right;
    }
</style>
</head>
 
<body>
  </br></br></br>
 
<h1>Daftar Menu :</h1>
<p>
  <a class="aa" href="keranjang.php"> Lihat keranjang belanja anda</span></a>
</p>
<hr />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr valign="top">
    <td width="55%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php
    mysql_select_db($database_conn, $conn);
    $query = mysql_query ("select * from barang");
    while ($rs = mysql_fetch_array ($query)) {
          
    ?>
      <tr>
        <td width="160" valign="top"><img src="<?php echo $rs['gambar']; ?>" alt="" style="width:170px; margin-right:20px; margin-bottom:20px;" /></td>
        <td valign="top"><h3><?php echo $rs['nama']; ?></h3>
          <p><?php echo $rs['deskripsi']; ?></p>
          <p style="font-size: 20px; font-weight: bold;">Harga : <?php echo number_format($rs['harga']); ?> - 
          <a onclick="pesan()" id="beli" href="cart.php?act=add&amp;barang_id=<?php echo $rs['id']; ?>&amp;ref=menu.php">Beli</a>
          <hr />
          </p>
          </td>
        </tr>
      <?php
    }
    ?>
    </table></td>
</table>
<p>&nbsp;</p>
</body>
<script type="text/javascript">
  
    function pesan() {
      var x = document.getElementById('beli');
      alert("Berhasil di tambahkan");
    }

</script>
</html>