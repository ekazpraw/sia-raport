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
if(formZ..value=='')
{
alert(' tidak boleh kosong.');
formZ..focus();
return false;
}
}
</script>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Form Tambah Jadwal Pelajaran
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Tambah Jadwal
</li>
</ol>
<form method="post" action="jadwal_simpan.php" onsubmit="return checkForm(this)">
<div class="row">
<div class="col-md-3">
<div class="form-group" >
<label>Mata Pelajaran</label>
<select class="form-control" name="mata_pelajaran">
<?php
$sql = mysql_query("select * from mata_pelajaran mp
inner join guru gr
on mp.id_guru=gr.id_guru");
while($hasil = mysql_fetch_array($sql)){
echo "<option value='".$hasil['id_mapel']."'>".$hasil['nama_mapel']." > ".$hasil['nama_guru']."</option>";
}
?>
</select>
</div>
<div class="form-group" >
<label>Hari</label>
<select class="form-control" name="hari">
<option value="">-Pilih Hari-</option>
<option value="1">Senin</option>
<option value="2">Selasa</option>
<option value="3">Rabu</option>
<option value="4">Kamis</option>
<option value="5">Jum'at</option>
<option value="6">Sabtu</option>
</select>
</div>
<div class="form-group" >
<label>Jam Ke-</label>
<select class="form-control" name="jam_ke">
<option value="">-Pilih Jam-</option>
<option value="1">1-2</option>
<option value="2">3-4</option>
<option value="3">5-6</option>
<option value="4">7-8</option>
<option value="5">9-10</option>
</select>
</div>
<div class="form-group" >
<label>Kelas</label>
<select class="form-control" name="kelas">
<option value="">-Pilih Kelas-</option>
<?php
$sql = mysql_query("select * from kelas");
while($hasil = mysql_fetch_array($sql)){
echo "<option value='".$hasil['id_kelas']."'>".$hasil['nama_kelas']."</option>";
}
?>
</select>
</div>
<button type="submit" class="btn btn-default btn-success" value="simpan">Simpan</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
</div>
</div>
</form>
<?php include "footer.php"; ?>