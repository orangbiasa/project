<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/form.css" />
</head>
<body>
    <divclass="navbc">
        <div class="navbc"><!--navigasi-->
        <a href="index.php"><img src="img/mfnd.png" alt="" class="logo"></a> 
            <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="reservasi.php">Reservasi</a></li>
            <li class="dropdown">
                <a class="dropbtn">Menu</a>
                    <div class="dropdown-content">
                        <a href="makanan.php">Makanan</a>
                        <a href="minuman.php">Minuman</a>
                    </div>
                </li>
                <li><a href="aboutus.php">Tentang Kami</a></li>
                <li><a href="login.php">Akun</a></li>
            </ul><section></section>
        </div>
        <h2>Reservasi</h2>
    <div class="div">
        <form action="prosesreservasidetail.php" method="post" >
          <label>Nama</label>
          <input type="text"placeholder="Nama anda.." name ="nama" id="nama" required>
      
          <label >Nomor Telfon</label>
          <input type="text" placeholder="Nomor handphone.." name="no_telp" id="no_telp" required>
          
          <label >Email</label>
          <input type="text"placeholder="Email.." name= "email" id="email" required>
          
          <label >Pilihan Acara</label>
          <select name= "pilihan_acara"  id= "pilih_acara" required>
            <option >Makan siang</option>
            <option >Makan Malam</option>
            <option>Lainnya</option>
          </select>
          <label>Tuliskan disini jika pilih lainnya</label>
          <input type="text"placeholder="Tulis disini.." name= "lainnya"  id= "lainnya" >
          <label>Pilihan Metode Pembayaran</label required>
          <select name= "metode_pembayaran" id = "metode_pembayaran" >
            <option >Tunai</option>
            <option >Bank Transfer</option>
          </select>
          <input type="submit" value="Pesan Sekarang">
        </form>
      </div>
</body>
</html>