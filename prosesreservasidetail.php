<?php
include_once("koneksi.php");
$nama = $_POST["nama"];
$no_telp = $_POST["no_telp"];
$email = $_POST["email"];
$pilihan_acara = $_POST["pilihan_acara"];
$lainnya = $_POST["lainnya"];
$metode_pembayaran = $_POST["metode_pembayaran"];

$sql = "INSERT INTO reservasi_detail (nama, no_telp , email, pilihan_acara, lainnya, metode_pembayaran)
VALUES ('$nama', '$no_telp', '$email','$pilihan_acara','$lainnya','$metode_pembayaran')";

if ($conn->query($sql) === TRUE) {
    echo "Pesanan anda sedang di proses, email detail pesanan akan di kirim silahkan cek email anda";
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>