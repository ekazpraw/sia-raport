<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
echo "<h1 class='page-header'>
<img src='images/mtsicon.jpg' width='50' height='50'> Detail Siswa
</h1>
<ol class='breadcrumb'>
<li>
<i class='fa fa-dashboard'></i><img src='images/mtsicon.png' width='20' height='20'><a href='beranda.php'> Home</a>
</li>
<li class='active'>
<i class='fa fa-table'></i> Detail Siswa
</li>
</ol>";
$nis = $_GET['id'];
$s = mysql_query("select * from siswa sis
inner join kelas kls
on sis.id_kelas=kls.id_kelas
where sis.nis='".$nis."'");
$h=mysql_fetch_array($s);
echo "<table class='table table-striped table-bordered table-hover'>
<tr>
<td>NIS</td>
<td>".$h['nis']."</td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td>".$h['nama_siswa']."</td>
</tr>
<tr>
<td>Alamat</td>
<td>".$h['alamat']."</td>
</tr>
<tr>
<td>Tempat/Tanggal Lahir</td>
<td>".$h['tempat_lahir']." ".$h['tanggal_lahir']."</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>".$h['jenis_kelamin']."</td>
</tr>
<tr>
<td>Agama</td>
<td>".$h['agama']."</td>
</tr>
<tr>
<td>Nama Ayah</td>
<td>".$h['nama_ayah']."</td>
</tr>
<tr>
<td>Nama Ibu</td>
<td>".$h['nama_ibu']."</td>
</tr>
<tr>
<td>Status</td>
<td>".$h['status']."</td>
</tr>
<tr>
<td>No. Telepon</td>
<td>".$h['no_telp']."</td>
</tr>
<tr>
<td>Kelas</td>
<td>".$h['nama_kelas']."</td>
</tr>
</table>
<tr>
<td><td>
<input type='button' onclick='history.back()' class='btn btn-primary' value='Kembali'>
</tr>";
?>
<?php include "footer.php"; ?>