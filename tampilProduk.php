<?php

include_once("headerpage.php");


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

</style>
</head>
<body>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Produk</li>
</ol>

<br><br><br>
<?php
    include("koneksi.php");
    $sql="SELECT * FROM produk";
    $result=$conn->query($sql);
   if($result->num_rows>0){?>
<div class="container">
<div class="row">
<?php
   while($row=$result->fetch_assoc()){ ?>
  <div class="column">
    <div class="card">
      <img src='./foto_produk/<?php echo $row['foto_produk'];?>' style="width:100%">
      <div class="container">
        <h2> <?php echo $row['nama_produk']; ?></h2> 
        <p class="title"> <?php echo $row['deskripsi']; ?></p>
        <p> <?php echo $row['hargaJual']; ?></p>
    
   
      </div>
  
    </div>
  </div>
  <?php }?>
 
 
<?php
} else{
    echo "Tidak dapat menampilkan record";
}
    ?>
   </div> 
</div><br><br>


</body>
</html>
<?php


include_once("footerpage.php");

?>

