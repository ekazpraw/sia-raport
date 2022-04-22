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
alert('Kelas tidak boleh kosong.');
formZ.kelas.focus();
return false;
}
if(formZ.nama_walikelas.value=='')
{
alert('Nama wali kelas tidak boleh kosong.');
formZ.kelas.focus();
return false;
}
}
</script>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Form Tambah Kelas
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Tambah Kelas
</li>
</ol>
<form method="post" action="kelas_simpan.php" enctype='multipart/form-data' onsubmit="return checkForm(this)">
 <form role="form">
<div class="row">
<div class="col-md-3">
<div class="form-group" >
<label>Nama Kelas</label>
<input class="form-control" type="text" name="nama_kelas" placeholder="kelas">
</div>
</div>
</div>
<button type="submit" class="btn btn-default btn-success" value="simpan">Simpan</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
 </form>
</form>
<?php include "footer.php"; ?>