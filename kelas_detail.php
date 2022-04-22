<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$id_kelas = $_GET['id'];
$nama_kelas = $_GET['nama_kelas'];
?>
<h1 class="page-header">
<img src='images/mtsicon.jpg' width='50' height='50'> Detail Kelas <?php echo $nama_kelas;?>
</h1>
<ol class="breadcrumb">
<li>
<i class='fa fa-dashboard'></i><img src='images/mtsicon.png' width='20' height='20'><a href='beranda.php'> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Detail Kelas
</li>
</ol>
<table id='lookup' class="table table-striped table-bordered table-hover">
<thead style="font-weight:bold">
<tr>
<td>No</td>
<td>NIS</td>
<td>Nama</td>
<td>Kelas</td>
<td><center>Aksi</center></td>
</tr>
</thead>
<?php
$sql = mysql_query("select * from siswa sis
inner join kelas kls
on sis.id_kelas=kls.id_kelas
where kls.id_kelas = '".$id_kelas."'
order by sis.nama_siswa asc");
$i=1;
while($hasil = mysql_fetch_array($sql)){
echo "<tr>
<td>".$i++."</td>
<td>".$hasil['nis']."</td>
<td>".$hasil['nama_siswa']."</td>
<td>".$hasil['nama_kelas']."</td>
<td><center>
<a href='siswa_detail.php?id=".$hasil['nis']."' class='btn btn-info'>Detail Siswa</a>
<a href='siswa_hapus.php?id=".$hasil['nis']."' class='btn btn-danger disabled' onClick=\"return confirm('Yakin hapus data ini?');\">Hapus</a> 
<a href='siswa_edit.php?id=".$hasil['nis']."'class='btn btn-success disabled'>Edit</a></center></td>
</tr>";
}
?>
</table>
<input type='button' onclick='history.back()' class='btn btn-primary' value='Kembali'>
<?php include "footer.php"; ?>