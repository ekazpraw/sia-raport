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
<img src="images/mtsicon.jpg" width="50" height="50"> Mata Pelajaran
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Mata Pelajaran
</li>
</ol>
<a href='mapel_tambah.php' class='btn btn-primary'>Tambah Mapel</a>
<table id='lookup'class="table table-striped table-bordered table-hover">
<thead>
<tr style="font-weight:bold">
<td><center>No</center></td>
<td><center>Mata Pelajaran</center></td>
<td><center>KKM</center></td>
<td><center>Nama Guru</center></td>
<td><center>Aksi</center></td>
</thead>
</tr>
<?php
$sql = mysql_query("select * from mata_pelajaran mp
inner join guru gr
on mp.id_guru=gr.id_guru
order by mp.nama_mapel asc");
$i=1;
while($hasil = mysql_fetch_array($sql)){
echo "<tr>
<td>".$i++."</td>
<td>".$hasil['nama_mapel']."</td>
<td>".$hasil['kkm']."</td>
<td>".$hasil['nama_guru']."</td>
<td><center><a href='mapel_hapus.php?id=".$hasil['id_mapel']."' onClick=\"return confirm('Yakin hapus data ini?');\" class='btn btn-danger'>
<img src='images/hapus.png' width='20' height='20'></a>
<a href='mapel_edit.php?id=".$hasil['id_mapel']."' class='btn btn-success'><img src='images/edit.png' width='20' height='20'></a></center></td>
</tr>";
}
?>
</table>
<?php include "footer.php"; ?>