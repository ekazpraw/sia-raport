<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$id = $_GET['id'];
$sql = mysql_query("select * from guru where id_guru = '$id'");
$hasil = mysql_fetch_array($sql);
?>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Form Edit Guru
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Edit Guru
</li>
</ol>
<form enctype='multipart/form-data' method='post' action='guru_update.php'>
<form role="form">
<div class="row">
<div class="col-lg-12">
<div class="col-md-6">
<div class="form-group" >
<label>NIP</label>
<input class="form-control" type="text" name="id_guru" value="<?php echo $hasil['id_guru'];?>">
</div>
<div class="form-group" >
<label>Nama Lengkap</label>
<input class="form-control" type="text" name="nama_guru" value="<?php echo $hasil['nama_guru'];?>">
</div>
<div class="form-group" >
<label>Alamat</label>
<textarea class="form-control" rows="4" name="alamat_guru"><?php echo $hasil['alamat_guru'];?></textarea>
</div>
<div class="form-group" >
<label>Tempat Lahir</label>
<input class="form-control" type="text" name="tempat_lahir" value="<?php echo $hasil['tempat_lahir'];?>">
</div>
<div class="form-group" >
<label>Tanggal Lahir</label>
<input class="form-control" type="text" name="tanggal_lahir" value="<?php echo $hasil['tanggal_lahir'];?>">
</div>
</div>
<div class="col-md-6">
<div class="form-group" >
<label>Jenis Kelamin</label>
<select class="form-control" name="jenis_kelamin">
<?php
if($hasil['jenis_kelamin'] == 'Laki-laki'){
echo "<option selected value='Laki-laki'>Laki-laki</option>
<option value='Perempuan'>Perempuan</option>";
}else if($hasil['jenis_kelamin'] == 'Perempuan'){
echo "<option value='Laki-laki'>Laki-laki</option>
<option selected value='Perempuan'>Perempuan</option>";
}
?>
</select>
</div>
<div class="form-group" >
<label>Agama</label>
<select class="form-control" name="agama">
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Katolik">Katolik</option>
<option value="Hindu">Hindu</option>
<option value="Buddha">Buddha</option>
</select>
</div>
<div class="form-group" >
<label>No. Telepon</label>
<input class="form-control" type="text" name="no_telp" value="<?php echo $hasil['no_telp'];?>">
</div>
<div class="form-group" >
<label>Jabatan</label>
<select class="form-control" name="id_jabatan">
<?php
$sql2 = mysql_query("select * from jabatan");
while($hasil2 = mysql_fetch_array($sql2)){
if($hasil['id_jabatan'] == $hasil2['id_jabatan']){
echo $sel = "selected";
}else{
echo $sel = "";
}
echo "<option ".$sel." value='".$hasil2['id_jabatan']."'>".$hasil2['nama_jabatan']."</option>";
}
?>
</select>
</div>
<div class="form-group" >
<label>Pendidikan</label>
<select class="form-control" name="pendidikan">
<?php
if($hasil['pendidikan'] == 'SMA'){
echo "<option selected value='SMA'>SMA</option>
<option value='S1'>S1</option>
<option value='S2'>S2</option>
<option value='S3'>S3</option>";
}else if($hasil['pendidikan'] == 'S1'){
echo "<option value='SMA'>SMA</option>
<option selected value='S1'>S1</option>
<option value='S2'>S2</option>
<option value='S3'>S3</option>";
}else if($hasil['pendidikan'] == 'S2'){
echo "<option value='SMA'>SMA</option>
<option value='S1'>S1</option>
<option selected value='S2'>S2</option>
<option value='S3'>S3</option>";
}else if($hasil['pendidikan'] == 'S3'){
echo "<option value='SMA'>SMA</option>
<option value='S1'>S1</option>
<option value='S2'>S2</option>
<option selected value='S3'>S3</option>";
}
?>
</select>
</div>
<div class="form-group" >
<label>Wali Kelas</label>
<select class="form-control" name="id_kelas">
<?php
$sql2 = mysql_query("select * from kelas");
while($hasil2 = mysql_fetch_array($sql2)){
if($hasil['id_kelas'] == $hasil2['id_kelas']){
echo $sel = "selected";
}else{
echo $sel = "";
}
echo "<option ".$sel." value='".$hasil2['id_kelas']."'>".$hasil2['nama_kelas']."</option>";
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