<?php 
    require_once("conn.php");
    if (!isset($_SESSION)) {
        session_start();
    }
    require_once("header.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="viewer">
  <tr class="asw">
    <th align="left" scope="col">Kode Barang</th>
    <th align="left" scope="col">Nama Barang</th>
    <th align="right" scope="col">Harga</th>
    <th align="right" scope="col">Qty</th>
    <th align="right" scope="col">Jumlah Harga</th>
    <th align="right" scope="col">Aksi</th>
  </tr>
  <?php
  $total = 0;
  if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val){
            $query = mysql_query ("select barang.id, barang.nama, barang.harga from barang where barang.id = '$key'");
//            if($query=== FALSE) { 
  //            die(mysql_error()); 
    //          }
            $rs = mysql_fetch_array ($query);
             
            $jumlah_harga = $rs['harga'] * $val;
            $total += $jumlah_harga;
  ?>
  <tr>
    <td><?php echo $rs['id']; ?></td>
    <td><?php echo $rs['nama']; ?></td>
    <td align="right"><?php echo number_format($rs['harga']); ?></td>
    <td align="right"><?php echo number_format($val); ?></td>
    <td align="right"><?php echo number_format($jumlah_harga); ?></td>
    <td align="right"><a class="dd" href="cart.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=menu.php">+</a> | <a class="cc" href="cart.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=menu.php">-</a> | <a class="cc" href="cart.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=menu.php">Hapus</a></td>
  </tr>
  <?php
            mysql_free_result($query);
        }
  }
  ?>

  <tr>
    </br></br>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right"><?php echo number_format($total); ?></td>

    <td align="right"><a class="gg" href="cart.php?act=clear&amp;ref=menu.php">Clear</a></td>
  </tr>
</table>
</body>
</html>