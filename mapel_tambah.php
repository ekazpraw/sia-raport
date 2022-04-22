<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
?>
<script type="text/javascript">
function checkForm(formZ){
if(formZ.mata_pelajaran.value=='')
{
alert('Mata Pelajaran tidak boleh kosong.');
formZ.mata_pelajaran.focus();
return false;
}
if(formZ.kkm.value=='')
{
alert('KKM tidak boleh kosong.');
formZ.kkm.focus();
return false;
}
}
</script>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Form Tambah Mata Pelajaran
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Tambah Mapel
</li>
</ol>
<form method="post" action="mapel_simpan.php" enctype='multipart/form-data' onsubmit="return checkForm(this)">
<div class="row">
<div class="col-md-3">
<div class="form-group" >
<label>Mata Pelajaran</label>
<input class="form-control" type="text" name="nama_mapel" placeholder="Mata Pelajaran">
</div>
<div class="form-group" >
<label>KKM</label>
<input class="form-control" type="text" name="kkm" placeholder="KKM">
</div>
<div class="form-group" >
<label>Nama Guru</label>
<select class="form-control" name="id_guru">
<option value="">Pilih Guru</option>
<?php
$sql = mysql_query("select * from guru");
while($hasil = mysql_fetch_array($sql)){
echo "<option value='".$hasil['id_guru']."'>".$hasil['nama_guru']."</option>";
}
?>
</select>
</div>
</div>
</div>
<button type="submit" class="btn btn-default btn-success" value="simpan">Simpan</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
</form>
<?php include "footer.php" ?>