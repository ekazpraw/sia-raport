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
if(formZ.kelas.value=='')
{
alert('Jenis Absen tidak boleh kosong.');
formZ.kelas.focus();
return false;
}
}
</script>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Form Tambah Jenis Absen
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Tambah Jenis Absen
</li>
</ol>
<form method="post" action="jenisabsen_simpan.php" enctype='multipart/form-data' onsubmit="return checkForm(this)">
<form role="form">
<div class="row">
<div class="col-md-3">
<div class="form-group" >
<label>Jenis Absen</label>
<input class="form-control" type="text" name="jenis_absen" placeholder="Jenis Absen">
</div>
</div>
</div>
<button type="submit" class="btn btn-default btn-success" value="simpan">Simpan</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
 </form>
</form>
<?php include "footer.php"; ?>