<?php
session_start();
include "koneksi.php";
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$id = $_GET['id'];
$sql = mysql_query("select * from jenis_absen where id_jenisabsen = '$id'");
$hasil = mysql_fetch_array($sql);
?>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Form Edit Jenis Absen
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Edit Jenis Absen
</li>
</ol>
<form method="post" action="jenisabsen_update.php">
<form role="form">
<div class="row">
<div class="col-md-3">
 <div class="form-group" >
<label>Jenis Absen</label>
<input class="form-control" type="hidden" name="id_jenisabsen" value="<?php echo $hasil['id_jenisabsen'];?>">
<input class="form-control" type="text" name="nama_jenisabsen" value="<?php echo $hasil['nama_jenisabsen'];?>">
</div>
</div>
</div>
<button type="submit" class="btn btn-default btn-success" value="simpan">Simpan</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
</form>
</form>
<?php include "footer.php"; ?>