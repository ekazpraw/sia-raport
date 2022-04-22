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
if(formZ.nis.value=='')
{
alert('NIS tidak boleh kosong.');
formZ.nis.focus();
return false;
}
if(formZ.nama_siswa.value=='')
{
alert('Nama Siswa tidak boleh kosong.');
formZ.nama_siswa.focus();
return false;
}if(formZ.tempat_lahir.value=='')
{
alert('Tempat Lahir tidak boleh kosong.');
formZ.tempat_lahir.focus();
return false;
}if(formZ.tanggal_lahir.value=='')
{
alert('Tanggal Lahir tidak boleh kosong.');
formZ.tanggal_lahir.focus();
return false;
}if(formZ.jenis_kelamin.value=='')
{
alert('Jenis Kelamin tidak boleh kosong.');
formZ.jenis_kelamin.focus();
return false;
}if(formZ.agama.value=='')
{
alert('Agama tidak boleh kosong.');
formZ.agama.focus();
return false;
}if(formZ.alamat.value=='')
{
alert('Alamat tidak boleh kosong.');
formZ.alamat.focus();
return false;
}if(formZ.nama_ayah.value=='')
{
alert('Nama Ayah tidak boleh kosong.');
formZ.nama_ayah.focus();
return false;
}if(formZ.nama_ibu.value=='')
{
alert('Nama Ibu tidak boleh kosong.');
formZ.nama_ibu.focus();
return false;
}if(formZ.status.value=='')
{
alert('Status tidak boleh kosong.');
formZ.status.focus();
return false;
}if(formZ.no_telp.value=='')
{
alert('No Telepon tidak boleh kosong.');
formZ.no_telp.focus();
return false;
}if(formZ.nama_kelas.value=='')
{
alert('Kelas tidak boleh kosong.');
formZ.nama_kelas.focus();
return false;
}
}
</script>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50">Form Tambah Siswa
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php">&nbsp;&nbsp;Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Tambah Siswa
</li>
</ol>
<form enctype='multipart/form-data' method='post' action='siswa_simpan.php' onsubmit="return checkForm(this)">
<form role="form">
<div class="row">
<div class="col-lg-12">
<div class="col-md-6">
<div class="form-group">
<label>NIS</label>
<input class="form-control" type="text" name="nis" placeholder="No Induk Siswa">
</div>
<div class="form-group">
<label>Nama Lengkap</label>
<input class="form-control" type="text" name="nama_siswa" placeholder="nama siswa">
</div>
<div class="form-group" >
<label>Alamat</label>
<textarea class="form-control" rows="4" name="alamat" placeholder="alamat"></textarea>
</div>
<div class="form-group">
<label>Tempat Lahir</label>
<input class="form-control" type="text" name="tempat_lahir" placeholder="tempat lahir">
</div>
<div class="form-group">
<label>Tanggal Lahir</label>
<input class="form-control" type="text" name="tanggal_lahir" placeholder="tanggal lahir // tahun-bulan-tanggal // 0000-00-00">
</div>
<div class="form-group" >
<label>Jenis Kelamin</label>
<select class="form-control" name="jenis_kelamin">
<option value="">-Pilih Jenis Kelamin-</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group" >
<label>Agama</label>
<select class="form-control" name="agama">
<option value="">-Pilih Agama-</option>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Katolik">Katolik</option>
<option value="Hindu">Hindu</option>
<option value="Buddha">Buddha</option>
</select>
</div>
<div class="form-group">
<label>Nama Ayah</label>
<input class="form-control" type="text" name="nama_ayah" placeholder="nama ayah">
</div>
<div class="form-group">
<label>Nama Ibu</label>
<input class="form-control" type="text" name="nama_ibu" placeholder="nama ibu">
</div>
<div class="form-group" >
<label>Status</label>
<select class="form-control" name="status">
<option value="">-Pilih Status-</option>
<option value="AK">Anak Kandung</option>
<option value="AA">Anak Angkat</option>
<option value="YT">Yatim</option>
<option value="YP">Yatim Piatu</option>
</select>
</div>
<div class="form-group">
<label>No Telepon</label>
<input class="form-control" type="text" name="no_telp" placeholder="no telepon">
</div>
<div class="form-group">
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
</div>
</form>
</form>
<?php include "footer.php"; ?>