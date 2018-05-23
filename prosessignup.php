<?php
include_once("koneksi.php");
$username = $_POST["username"];
$password = md5($_POST["password"]);
$ulangi_password = md5($_POST["ulangi_password"]);
$email = $_POST["email"];
$no_telp = $_POST["no_telp"];

$sql = "INSERT INTO user (username, no_telp , email, password, ulangi_password)
VALUES ('$username', '$no_telp', '$email','$password','$ulangi_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil";
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>