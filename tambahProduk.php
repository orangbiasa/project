<?php 
    /*if(!isset($_SESSION["username"])){
        header("Location: /ukdwstore/loginform.php");
    }*/
    require_once("headerpage.php");
?>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Tambah Produk</li>
</ol>
<div class="row">
    <div class="col-6">
        <h1>Tambah Produk</h1>
        <?php
        if(isset($_GET["pesan"]) && $_GET["pesan"]!=""){
                    echo "<span class='alert alert-success'>".$_GET["pesan"]."</span>";
                }
            ?><br><br>
        <form action="prosesUpload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
                <label for="id_produk">ID Produk:</label>
                <input type="text" class="form-control" name="id_produk">
            </div>
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" class="form-control" name="nama_produk">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="qty">Jumlah:</label>
                <input type="number" class="form-control" name="qty">
            </div>
            <div class="form-group">
                <label for="hargaBeli">Harga Beli:</label>
                <input type="number" class="form-control" name="hargaBeli">
            </div>
            <div class="form-group">
                <label for="hargaJual">Harga Jual:</label>
                <input type="number" class="form-control" name="hargaJual">
            </div>
            <div class="form-group">
                <label for="fileToUpload">Gambar:</label>
                <input type="file" name="fileToUpload">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

<?php 
    require_once("footerpage.php");
?>