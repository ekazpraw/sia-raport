<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
?>
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Data Jabatan
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Jabatan
</li>
</ol>
<a href='jabatan_tambah.php' class='btn btn-primary'>Tambah Jabatan</a>
<table class="table table-striped table-bordered table-hover">
<tr style="font-weight:bold">
<td><center>No</center></td>
<td><center>Jabatan</center></td>
<td><center>Aksi</center></td>
</tr>
<?php
$sql = mysql_query("select * from jabatan");
$i=1;
while($hasil = mysql_fetch_array($sql)){
echo "<tr>
<td>".$i++."</td>
<td>".$hasil['nama_jabatan']."</td>
<td><center><a href='jabatan_hapus.php?id=".$hasil['id_jabatan']."' onClick=\"return confirm('Yakin hapus data ini?');\" class='btn btn-danger'>
<img src='images/hapus.png' width='20' height='20'></a>
<a href='jabatan_edit.php?id=".$hasil['id_jabatan']."' class='btn btn-success'><img src='images/edit.png' width='20' height='20'></a></center></td>
</tr>";
}
?>
</table>
</div>
</div>
<?php include "footer.php"; ?>