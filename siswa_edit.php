<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$nis = $_GET['id'];
$sql = mysql_query("select*from siswa where nis='$nis'");
$hasil = mysql_fetch_array($sql);
?>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Form Edit Siswa
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Edit Siswa
</li>
</ol>
<form enctype='multipart/form-data' method='post' action='siswa_update.php'>
<form role="form">
<div class="col-lg-12">
<div class="col-md-6">
<div class="form-group" >
<label>NIS</label>
<input class="form-control" type="text" name="nis" value="<?php echo $hasil['nis'];?>">
</div>
<div class="form-group" >
<label>Nama Lengkap</label>
<input class="form-control" type="text" name="nama_siswa" value="<?php echo $hasil['nama_siswa'];?>">
</div>
<div class="form-group" >
<label>Alamat</label>
<textarea class="form-control" rows="4" name="alamat"><?php echo $hasil['alamat'];?></textarea>
</div>
<div class="form-group" >
<label>Tempat Lahir</label>
<input class="form-control" type="text" name="tempat_lahir" value="<?php echo $hasil['tempat_lahir'];?>">
</div>
<div class="form-group" >
<label>Tanggal Lahir</label>
<input class="form-control" type="text" name="tanggal_lahir" value="<?php echo $hasil['tanggal_lahir'];?>">
</div>
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
</div>
<div class="col-md-6">
<div class="form-group" >
<label>Agama</label>
<select class="form-control" name="agama">
<?php
if($hasil['agama'] == 'Islam'){
echo "<option selected value='Islam'>Islam</option>
<option value='Kristen'>Kristen</option>
<option value='Katolik'>Katolik</option>
<option value='Hindu'>Hindu</option>
<option value='Buddha'>Buddha</option>";
}else if($hasil['agama'] == 'Kristen'){
echo "<option value='Islam'>Islam</option>
<option selected value='Kristen'>Kristen</option>
<option value='Katolik'>Katolik</option>
<option value='Hindu'>Hindu</option>
<option value='Buddha'>Buddha</option>";
}else if($hasil['agama'] == 'Katolik'){
echo "<option value='Islam'>Islam</option>
<option value='Kristen'>Kristen</option>
<option selected value='Katolik'>Katolik</option>
<option value='Hindu'>Hindu</option>
<option value='Buddha'>Buddha</option>";
}else if($hasil['agama'] == 'Hindu'){
echo "<option value='Islam'>Islam</option>
<option value='Kristen'>Kristen</option>
<option value='Katolik'>Katolik</option>
<option selected value='Hindu'>Hindu</option>
<option value='Buddha'>Buddha</option>";
}else if($hasil['agama'] == 'Buddha'){
echo "<option value='Islam'>Islam</option>
<option value='Kristen'>Kristen</option>
<option value='Katolik'>Katolik</option>
<option value='Hindu'>Hindu</option>
<option selected value='Buddha'>Buddha</option>";
}
?>
</select>
</div>
<div class="form-group" >
<label>Nama Ayah</label>
<input class="form-control" type="text" name="nama_ayah" value="<?php echo $hasil['nama_ayah'];?>">
</div>
<div class="form-group" >
<label>Nama Ibu</label>
<input class="form-control" type="text" name="nama_ibu" value="<?php echo $hasil['nama_ibu'];?>">
</div>
<div class="form-group" >
<label>Status</label>
<select class="form-control" name="status">
<option value="AK">Anak Kandung</option>
<option value="AA">Anak Angkat</option>
<option value="YT">Yatim</option>
<option value="YP">Yatim Piatu</option>
</select>
</div>
<div class="form-group" >
<label>No. Telepon</label>
<input class="form-control" type="text" name="no_telp" value="<?php echo $hasil['no_telp'];?>">
</div>
<div class="form-group" >
<label>Kelas</label>
<select class="form-control" name="kelas">
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
<?php include "footer.php"; ?>