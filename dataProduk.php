<?php
 
require_once("headerpage.php");

include_once("koneksi.php");
$sql="SELECT * FROM produk";
$query=mysqli_query($conn,$sql);
?>

   <div class="col-md-10" style="padding:0px">
   <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="index.php">Home</a>
   </li>
   <li class="breadcrumb-item active">Data Produk</li>
 </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">            

            <a href="tambahProduk.php" class="btn btn-info">Tambah Produk</a>

         </div>
            <table class="table table-bordered">
               <tr>
               <th class="info">ID Franchise</th>
               <th class="info">Nama Franchise</th>
               <th class="info">Username</th>
               <th class="info">Password Franchise</th>
               <th class="info">Email Franchise</th>
               <th class="info">Alamat Franchise</th>
                  <th class="info">No. Telp</th>
                  <th class="info">Wilayah Franchise</th>


                  <th class="info" colspan="3">Action</th>
               </tr>

<?php
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id_produk'];?></td>
<td><?php echo $row['nama_produk'];?></td>
<td><?php echo $row['deskripsi'];?></td>
<td><?php echo $row['qty'];?></td>
<td><?php echo $row['hargaBeli'];?></td>
<td><?php echo $row['hargaJual'];?></td>
<td><?php echo $row['foto_produk'];?></td>
<td><?php echo $row['tanggal'];?></td>



<td>
<a href="prosesHapusProduk.php?id_produk=<?php echo $row['id_produk']; ?>" onClick="return confirm('Apakah data ingin dihapus?')">Delete </a>
</td>


</tr>

<?php
}


require_once("footerpage.php");
?>
     </table>

</div>         