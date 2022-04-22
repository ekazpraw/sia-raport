<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$id = $_GET['id'];
$sql = mysql_query("select * from mata_pelajaran where id_mapel = '$id'");
$hasil = mysql_fetch_array($sql);
?>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Form Edit Mata Pelajaran
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Edit Mata Pelajaran
</li>
</ol>
<form method='post' action='mapel_update.php'>
<form class="form">
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>Mata Pelajaran</label>
<input class="form-control" type="hidden" name="id_mapel" value="<?php echo $hasil['id_mapel'];?>">
<input class="form-control" type="text" name="nama_mapel" value="<?php echo $hasil['nama_mapel'];?>">
</div>
<div class="form-group">
<label>KKM</label>
<input class="form-control" type="text" name="kkm" value="<?php echo $hasil['kkm'];?>">
</div>
<div class="form-group" >
<label>Nama Guru</label>
<select class="form-control" name="id_guru">
<?php
$sql2 = mysql_query("select * from guru");
while($hasil2 = mysql_fetch_array($sql2)){
if($hasil['id_guru'] == $hasil2['id_guru']){
echo $sel = "selected";
}else{
echo $sel = "";
}
echo "<option ".$sel." value='".$hasil2['id_guru']."'>".$hasil2['nama_guru']."</option>";
}
?>
</select>
</div>
<button type="submit" class="btn btn-default btn-success" value="simpan">Simpan</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
</div>
</div>
</form>
</form>
<? include "footer.php"; ?>