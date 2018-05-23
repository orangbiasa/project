<?php
 
require_once("headerpage.php");

include_once("koneksi.php");
$sql="SELECT * FROM pengguna";
$query=mysqli_query($conn,$sql);
?>

   <div class="col-md-10" style="padding:0px">
   <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="index.php">Home</a>
   </li>
   <li class="breadcrumb-item active">DataPengguna</li>
 </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">            

            <a href="regis.php" class="btn btn-info">Tambah Pengguna</a>

         </div>
            <table class="table table-bordered">
               <tr>
               <th class="info">Username</th>
               <th class="info">Nama Pengguna</th>
               <th class="info">Username</th>
               <th class="info">Email</th>
               <th class="info">No. Telpon</th>
               <th class="info">Aturan</th>
               <th class="info">Tanggal</th>
 
                  <th class="info" colspan="3">Action</th>
               </tr>

<?php
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['nama'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['telp'];?></td>
<td><?php echo $row['aturan'];?></td>
<td><?php echo $row['tanggal'];?></td>
 


<td>
<a href="ubahPengguna.php?username=<?php echo $row['username']; ?>">Detail</a></td>
<td>
<a href="prosesHapusPengguna.php?username=<?php echo $row['username']; ?>"
 onClick="return confirm('Apakah data ingin dihapus?')">Delete </a>
</td>


</tr>

<?php
}


require_once("footerpage.php");
?>
     </table>

</div>         