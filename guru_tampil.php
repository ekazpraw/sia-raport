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
 <img src="images/mtsicon.jpg" width="50" height="50"> Data Guru
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20" ><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Data Guru
</li>
</ol>
<a href='guru_tambah.php' class='btn btn-primary'>Tambah Guru</a>
<table id='lookup' class="table table-striped table-bordered table-hover">
<thead style="font-weight:bold">
<tr>
<td><center>No</center></td>
<td><center>Nama Guru</center></td>
<td><center>Alamat Guru</center></td>
<td><center>Jabatan</center></td>
<td><center>Pendidikan</center></td>
<td><center>Wali Kelas</center></td>
<td><center>Aksi</center></td>
</tr>
</thead>
<?php
$sql = mysql_query("select * from guru gur
inner join jabatan jbt
on gur.id_jabatan=jbt.id_jabatan
left outer join kelas kls on gur.id_kelas=kls.id_kelas");
$i=1;
while($hasil = mysql_fetch_array($sql)){
echo "<tr>
<td>".$i++."</td>
<td>".$hasil['nama_guru']."</td>
<td>".$hasil['alamat_guru']."</td>
<td>".$hasil['nama_jabatan']."</td>
<td>".$hasil['pendidikan']."</td>
<td>".$hasil['nama_kelas']."</td>
<td><center>
<a href='guru_detail.php?id=".$hasil['id_guru']."' class='btn btn-info'><img src='images/detail.png' width='20' height='20'></a>
<a href='guru_hapus.php?id=".$hasil['id_guru']."' onClick=\'return confirm('Yakin hapus data ini?');\' class='btn btn-danger'>
<img src='images/hapus.png' width='20' height='20'></a>
<a href='guru_edit.php?id=".$hasil['id_guru']."' class='btn btn-success'><img src='images/edit.png' width='20' height='20'></a></center></td>
</tr>";
}
?>
</table>
<?php include "footer.php"; ?>