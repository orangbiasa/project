
<?php

require_once("koneksi.php");
$id_produk =$_POST["id_produk"];
$nama_produk = $_POST["nama_produk"];
$deskripsi = $_POST["deskripsi"];
$qty = $_POST["qty"];
$hargaBeli= $_POST["hargaBeli"];
$hargaJual = $_POST["hargaJual"];




$target_dir = "./foto_Produk/";
$nama_file = uniqid().basename($_FILES["fileToUpload"]["name"]);
 $target_file = $target_dir . $nama_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $stmt = $conn->prepare("INSERT INTO produk(id_produk,nama_produk,deskripsi,qty,hargaBeli,hargaJual,foto_produk) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssiiis", $id_produk,$nama_produk,$deskripsi,$qty,$hargaBeli,$hargaJual,$nama_file);
    try{
        $stmt->execute();
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $pesan = "Produk $namaProduk berhasil ditambahkan";
        header("Location:/Tugas_Progweb/tampilProduk.php?pesan=$pesan");
    }
    catch(Exception $e){
        $pesan = "Proses tambah produk Gagal, kesalahan".$e->getMessage();
        header("Location:/Tugas_Progweb/tambahProduk.php?pesan=$pesan");
    }
finally{
    $stmt->close();
    $conn->close();
}
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
