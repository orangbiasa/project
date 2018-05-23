<?php
include_once("koneksi.php");
$tanggal = $_POST["tanggal"];
$jam = $_POST["jam"];
$jumlah = $_POST["jumlah"];

$sql = "INSERT INTO reservasi_meja (tanggal, jam , jumlah)
VALUES ('$tanggal', '$jam', '$jumlah')";

if ($conn->query($sql) === TRUE) {
    echo "Meja Berhasil di pesan";
    header("location:formreservasi.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>