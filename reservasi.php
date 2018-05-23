<?php
    require_once("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reservasi</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/reservasi.css"/>
</head>
<body>
             <h2>Reservasi</h2>
             <div class="div">
                    <form action="prosesreservasimeja.php" method="post">
                      <label>Tanggal</label>
                      <input type="date" name="tanggal" required>
                      <label >Jam</label>
                      <input type="time" name="jam" required>
                      <label >Jumlah</label>
                      <select name = "jumlah" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                      <input type="submit"value="Cari Meja">
                    </form>
                  </div>
</body>
</html>