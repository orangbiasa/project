<?php 
include("koneksi.php");



$sql = "SELECT * FROM pengguna order by username asc";
$result = $conn->query($sql);

if($result->num_rows>0){
echo "<table border='1'>";
echo "<tr><th>Username</th><th>Nama Pengguna</th><th>Email</th><th>No. Telpon</th><th>Aturan</th></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["username"]."</td>".
        "<td>".$row["nama"]."</td>"
        ."<td>".$row["email"]."</td>"
        ."<td>".$row["telp"]."</td>"
        ."<td>".$row["aturan"]."</td></tr>";
        
    }
echo "</table>";
} else {
    echo "Tidak dapat menampilkan record";
}

$conn->close();
?>