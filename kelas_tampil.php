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
<div class="col-md-12">
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Data Kelas
</h1>
<ol class="breadcrumb">
<li>
 <i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Kelas
</li>
</ol>
<a href='kelas_tambah.php' class='btn btn-primary'>Tambah Kelas</a>
<table id='lookup' class="table table-striped table-bordered table-hover">
<thead style="font-weight:bold">
<tr>
<td>No</td>
<td>Kode Kelas</td>
<td>Nama Kelas</td>
<td><center>Aksi</center></td>
</tr>
</thead>
<?php
$sql = mysql_query("select * from kelas");
$i=1;
while($hasil = mysql_fetch_array($sql)){
echo "<tr>
<td>".$i++."</td>
<td>".$hasil['id_kelas']."</td>
<td>".$hasil['nama_kelas']."</td>
<td><center>
<a href='kelas_detail.php?id=".$hasil['id_kelas']."&nama_kelas=".$hasil['nama_kelas']."' class='btn btn-info'><img src='images/detail.png' width='20' height='20'></a>
<a href='kelas_hapus.php?id=".$hasil['id_kelas']."' onClick=\"return confirm('Yakin hapus data ini?');\" class='btn btn-danger'>
<img src='images/hapus.png' width='20' height='20'></a>
<a href='kelas_edit.php?id=".$hasil['id_kelas']."' class='btn btn-success'><img src='images/edit.png' width='20' height='20'></a></center></td>
</tr>";
}
?>
</table>
</div>
</div>
<?php include "footer.php"; ?>