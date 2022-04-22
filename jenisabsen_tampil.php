<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
?>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Jenis Absen
</h1>
<ol class="breadcrumb">
<li>
 <i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Jenis Absen
</li>
</ol>
<a href='jenisabsen_tambah.php' class='btn btn-primary'>Tambah Jenis Absen</a>
<table class="table table-striped table-bordered table-hover">
<tr style="font-weight:bold">
<td><center>No</center></td>
<td><center>Jenis Absen</center></td>
<td><center>Aksi</center></td>
</tr>
<?php
$sql = mysql_query("select * from jenis_absen");
$i=1;
while($hasil = mysql_fetch_array($sql)){
echo "<tr>
<td>".$i++."</td>
<td>".$hasil['nama_jenisabsen']."</td>
<td><center><a href='jenisabsen_hapus.php?id=".$hasil['id_jenisabsen']."' onClick=\"return confirm('Yakin hapus data ini?');\" class='btn btn-danger'>
<img src='images/hapus.png' width='20' height='20'></a>
<a href='jenisabsen_edit.php?id=".$hasil['id_jenisabsen']."' class='btn btn-success'><img src='images/edit.png' width='20' height='20'></a></center></td>
</tr>";
}
?>
</table>
<?php include "footer.php"; ?>