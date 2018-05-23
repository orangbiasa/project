<?php

include_once("koneksi.php");


$id_produk=$_GET['id_produk'];
$sql="DELETE FROM produk WHERE id_produk='$id_produk'";
$query=mysqli_query($conn,$sql);

if($query){

header ('location: dataProduk.php');

}else{
echo "Data gagal di hapus";
}

?>