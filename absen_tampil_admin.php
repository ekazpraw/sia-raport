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
<img src="images/mtsicon.jpg" width="50" height="50"> Data Absen Siswa
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20" ><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Data Absen
</li>
</ol>
<a href='absen_tambah_admin.php' class='btn btn-primary'>Tambah Absen</a>
<table id='lookup' class="table table-striped table-bordered table-hover">
<thead style="font-weight:bold">
<tr>
<td><center>No</center></td>
<td><center>NIS</center></td>
<td><center>Nama</center></td>
<td><center>Lihat Absen</center></td>
</tr>
</thead>
<?php
$sql = mysql_query("select * from absen abs
inner join siswa sis
on abs.nis=sis.nis");
$i=1;
while($hasil = mysql_fetch_array($sql)){
echo "<tr>
<td>".$i++."</td>
<td>".$hasil['nis']."</td>
<td>".$hasil['nama_siswa']."</td>
<td><center>
<a href='absen_detail_admin.php?id=".$hasil['nis']."' class='btn btn-info'><img src='images/detail.png' width='20' height='20'></a>
<a href='absen_hapus_admin.php?id=".$hasil['nis']."' onClick=\"return confirm('Yakin hapus data ini?');\" class='btn btn-danger'>
<img src='images/hapus.png' width='20' height='20'></a>
<a href='absen_edit_admin.php?id=".$hasil['nis']."'class='btn btn-success'><img src='images/edit.png' width='20' height='20'></a></center></td>
</tr>";
}
?>
</table>
<?php include "footer.php"; ?>