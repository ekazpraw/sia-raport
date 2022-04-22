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
<img src="images/mtsicon.jpg" width="50" height="50"> Form Tambah Guru
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Tambah Guru
</li>
</ol>
<form method="post" action="guru_simpan.php" enctype='multipart/form-data' onsubmit="return checkForm(this)">
<form role="form">
<div class="row">
<div class="col-lg-12">
<div class="col-md-6">
<div class="form-group">
<label>NIP</label>
<input class="form-control" type="text" name="id_guru" placeholder="NIP" required>
</div>
<div class="form-group" >
<label>Nama Lengkap</label>
<input class="form-control" type="text" name="nama_guru" placeholder="nama lengkap">
</div>
<div class="form-group" >
<label>Alamat</label>
<textarea class="form-control" rows="4" name="alamat_guru" placeholder="alamat"></textarea>
</div>
<div class="form-group" >
<label>Tempat Lahir</label>
<input class="form-control" type="text" name="tempat_lahir" placeholder="tempat lahir">
</div>
<div class="form-group" >
<label>Tanggal Lahir</label>
<input class="form-control" type="text" name="tanggal_lahir" placeholder="tanggal lahir // tahun-bulan-tanggal // 0000-00-00">
</div>
</div>
<div class="col-md-6">
<div class="form-group" >
<label>Jenis Kelamin</label>
<select class="form-control" name="jenis_kelamin">
<option value="">-Pilih Jenis Kelamin-</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</div>
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
<div class="form-group" >
<label>No. Telepon</label>
<input class="form-control" type="text" name="no_telp" placeholder="no. telepon">
</div>
<div class="form-group" >
<label>Jabatan</label>
<select class="form-control" name="id_jabatan">
<option value="">-Pilih Jabatan-</option>
<?php
$sql = mysql_query("select * from jabatan");
while($hasil = mysql_fetch_array($sql)){
echo "<option value='".$hasil['id_jabatan']."'>".$hasil['nama_jabatan']."</option>";
}
?>
</select>
</div>
<div class="form-group" >
<label>Pendidikan</label>
<select class="form-control" name="pendidikan">
<option value="">-Pilih Pendidikan-</option>
<option value="SMA">SMA</option>
<option value="S1">S1</option>
<option value="S2">S2</option>
<option value="S3">S3</option>
</select>
</div>
<div class="form-group" >
<label>Wali Kelas</label>
<select class="form-control" name="id_kelas">
<option value="">-Pilih Kelas-</option>
<?php
$sql2 = mysql_query("select * from kelas");
while($hasil2 = mysql_fetch_array($sql2)){
echo "<option value='".$hasil2['id_kelas']."'>".$hasil2['nama_kelas']."</option>";
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