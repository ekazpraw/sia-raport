<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$id = $_GET['id']; 
$sql = mysql_query("select * from nilai where nis='$id'");
$hasil = mysql_fetch_array($sql);
?>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Edit Nilai Siswa
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Edit Nilai Siswa
</li>
</ol>
<form enctype='multipart/form-data' method='post' action='nilai_update_admin.php'>
<form role="form">
<div class="row">
<div class="col-lg-12">
<div class="col-md-6">
<div class="form-group">
<label>NIS</label>
<input class="form-control" type="text" name="nis" value="<?php echo $hasil['nis'];?>">
</div>
<div class="form-group">
<label>Aqidah Akhlak</label>
<input class="form-control" type="text" name="aqidah" placeholder="Ganti dengan Nilai Aqidah Akhlak" value="<?php echo $hasil['nilai_aqidah'];?>">
</div>
<div class="form-group">
<label>MTK</label>
<input class="form-control" type="text" name="mtk" placeholder="Ganti dengan Nilai MTK" value="<?php echo $hasil['nilai_mtk'];?>">
</div>
<div class="form-group">
<label>Bahasa Indonesia</label>
<input class="form-control" type="text" name="bindo" placeholder="Ganti dengan Nilai Bahasa Indonesia" value="<?php echo $hasil['nilai_bindo'];?>">
</div>
<div class="form-group">
<label>PKN</label>
<input class="form-control" type="text" name="pkn" placeholder="Ganti dengan Nilai PKN" value="<?php echo $hasil['nilai_pkn'];?>">
</div>
<div class="form-group">
<label>Bahasa Arab</label>
<input class="form-control" type="text" name="barab" placeholder="Ganti dengan Nilai Bahasa Arab" value="<?php echo $hasil['nilai_barab'];?>">
</div>
<div class="form-group">
<label>Pendidikan Agama Islam</label>
<input class="form-control" type="text" name="pai" placeholder="Ganti dengan Nilai Pendidikan Agama Islam" value="<?php echo $hasil['nilai_pai'];?>">
</div>
<div class="form-group">
<label>Fiqih</label>
<input class="form-control" type="text" name="fiqih" placeholder="Ganti dengan Nilai Fiqih" value="<?php echo $hasil['nilai_fiqih'];?>">
</div>
<div class="form-group">
<label>Kimia</label>
<input class="form-control" type="text" name="kimia" placeholder="Ganti dengan Nilai Kimia" value="<?php echo $hasil['nilai_kimia'];?>">
</div>
<div class="form-group">
<label>Fisika</label>
<input class="form-control" type="text" name="fisika" placeholder="Ganti dengan Nilai Fisika" value="<?php echo $hasil['nilai_fisika'];?>">
</div>
<div class="form-group">
<label>Sosiologi</label>
<input class="form-control" type="text" name="sosiologi" placeholder="Ganti dengan Nilai Sosiologi" value="<?php echo $hasil['nilai_sosiologi'];?>">
</div>
<div class="form-group">
<label>Bahasa Inggris</label>
<input class="form-control" type="text" name="binggris" placeholder="Ganti dengan Nilai Bahasa Inggris" value="<?php echo $hasil['nilai_binggris'];?>">
</div>
<div class="form-group">
<label>Seni Budaya</label>
<input class="form-control" type="text" name="senbud" placeholder="Ganti dengan Nilai Seni Budaya" value="<?php echo $hasil['nilai_senbud'];?>">
</div>
<div class="form-group">
<label>Penjaskes</label>
<input class="form-control" type="text" name="penjas" placeholder="Ganti dengan Nilai Penjaskes" value="<?php echo $hasil['nilai_penjas'];?>">
</div>
<div class="form-group">
<label>Qur'an Hadits</label>
<input class="form-control" type="text" name="qurdits" placeholder="Ganti dengan Nilai Qur'an Hadits" value="<?php echo $hasil['nilai_qurdits'];?>">
</div>
<div class="form-group">
<label>Ekonomi</label>
<input class="form-control" type="text" name="ekonomi" placeholder="Ganti dengan Nilai Ekonomi" value="<?php echo $hasil['nilai_ekonomi'];?>">
</div>
<div class="form-group">
<label>Biologi</label>
<input class="form-control" type="text" name="biologi" placeholder="Ganti dengan Nilai Biologi" value="<?php echo $hasil['nilai_biologi'];?>">
</div>
<div class="form-group">
<label>Geografi</label>
<input class="form-control" type="text" name="geografi" placeholder="Ganti dengan Nilai Geografi" value="<?php echo $hasil['nilai_geografi'];?>">
</div>
<div class="form-group">
<label>PLBJ</label>
<input class="form-control" type="text" name="plbj" placeholder="Ganti dengan Nilai PLBJ" value="<?php echo $hasil['nilai_plbj'];?>">
</div>
<div class="form-group">
<label>SKI</label>
<input class="form-control" type="text" name="ski" placeholder="Ganti dengan Nilai SKI" value="<?php echo $hasil['nilai_ski'];?>">
</div>
<div class="form-group">
<label>TIK</label>
<input class="form-control" type="text" name="tik" placeholder="Ganti dengan Nilai TIK" value="<?php echo $hasil['nilai_tik'];?>">
</div>
<hr>
<div class="form-group">
<label>Tugas Harian</label>
<input class="form-control" type="text" name="tugas_harian" placeholder="Ganti dengan Nilai Tugas Harian" value="<?php echo $hasil['tugas_harian'];?>">
</div>
<div class="form-group">
<label>Ulangan Praktik</label>
<input class="form-control" type="text" name="ulangan_praktik" placeholder="Ganti dengan Nilai Ulangan Praktik" value="<?php echo $hasil['ulangan_praktik'];?>">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Aqidah Akhlak</label>
<input class="form-control" type="text" name="h_aqidah" placeholder="Ganti dengan Huruf Aqidah Akhlak" value="<?php echo $hasil['huruf_aqidah'];?>">
</div>
<div class="form-group">
<label>MTK</label>
<input class="form-control" type="text" name="h_mtk" placeholder="Ganti dengan Huruf MTK" value="<?php echo $hasil['huruf_mtk'];?>">
</div>
<div class="form-group">
<label>Bahasa Indonesia</label>
<input class="form-control" type="text" name="h_bindo" placeholder="Ganti dengan Huruf Bahasa Indonesia" value="<?php echo $hasil['huruf_bindo'];?>">
</div>
<div class="form-group">
<label>PKN</label>
<input class="form-control" type="text" name="h_pkn" placeholder="Ganti dengan Huruf PKN" value="<?php echo $hasil['huruf_pkn'];?>">
</div>
<div class="form-group">
<label>Bahasa Arab</label>
<input class="form-control" type="text" name="h_barab" placeholder="Ganti dengan Huruf Bahasa Arab" value="<?php echo $hasil['huruf_barab'];?>">
</div>
<div class="form-group">
<label>Pendidikan Agama Islam</label>
<input class="form-control" type="text" name="h_pai" placeholder="Ganti dengan Huruf Pendidikan Agama Islam" value="<?php echo $hasil['huruf_pai'];?>">
</div>
<div class="form-group">
<label>Fiqih</label>
<input class="form-control" type="text" name="h_fiqih" placeholder="Ganti dengan Huruf Fiqih" value="<?php echo $hasil['huruf_fiqih'];?>">
</div>
<div class="form-group">
<label>Kimia</label>
<input class="form-control" type="text" name="h_kimia" placeholder="Ganti dengan Huruf Kimia" value="<?php echo $hasil['huruf_kimia'];?>">
</div>
<div class="form-group">
<label>Fisika</label>
<input class="form-control" type="text" name="h_fisika" placeholder="Ganti dengan Huruf Fisika" value="<?php echo $hasil['huruf_fisika'];?>">
</div>
<div class="form-group">
<label>Sosiologi</label>
<input class="form-control" type="text" name="h_sosiologi" placeholder="Ganti dengan Huruf Sosiologi" value="<?php echo $hasil['huruf_sosiologi'];?>">
</div>
<div class="form-group">
<label>Bahasa Inggris</label>
<input class="form-control" type="text" name="h_binggris" placeholder="Ganti dengan Huruf Bahasa Inggris" value="<?php echo $hasil['huruf_binggris'];?>">
</div>
<div class="form-group">
<label>Seni Budaya</label>
<input class="form-control" type="text" name="h_senbud" placeholder="Ganti dengan Huruf Seni Budaya" value="<?php echo $hasil['huruf_senbud'];?>">
</div>
<div class="form-group">
<label>Penjaskes</label>
<input class="form-control" type="text" name="h_penjas" placeholder="Ganti dengan Huruf Penjaskes" value="<?php echo $hasil['huruf_penjas'];?>">
</div>
<div class="form-group">
<label>Qur'an Hadits</label>
<input class="form-control" type="text" name="h_qurdits" placeholder="Ganti dengan Huruf Qur'an Hadits" value="<?php echo $hasil['huruf_qurdits'];?>">
</div>
<div class="form-group">
<label>Ekonomi</label>
<input class="form-control" type="text" name="h_ekonomi" placeholder="Ganti dengan Huruf Ekonomi" value="<?php echo $hasil['huruf_ekonomi'];?>">
</div>
<div class="form-group">
<label>Biologi</label>
<input class="form-control" type="text" name="h_biologi" placeholder="Ganti dengan Huruf Biologi" value="<?php echo $hasil['huruf_biologi'];?>">
</div>
<div class="form-group">
<label>Geografi</label>
<input class="form-control" type="text" name="h_geografi" placeholder="Ganti dengan Huruf Geografi" value="<?php echo $hasil['huruf_geografi'];?>">
</div>
<div class="form-group">
<label>PLBJ</label>
<input class="form-control" type="text" name="h_plbj" placeholder="Ganti dengan Huruf PLBJ" value="<?php echo $hasil['huruf_plbj'];?>">
</div>
<div class="form-group">
<label>SKI</label>
<input class="form-control" type="text" name="h_ski" placeholder="Ganti dengan Huruf SKI" value="<?php echo $hasil['huruf_ski'];?>">
</div>
<div class="form-group">
<label>TIK</label>
<input class="form-control" type="text" name="h_tik" placeholder="Ganti dengan Huruf TIK" value="<?php echo $hasil['huruf_tik'];?>">
</div>
<hr>
<div class="form-group">
<label>Tugas Harian</label>
<input class="form-control" type="text" name="h_tugas_harian" placeholder="Ganti dengan Huruf Tugas Harian" value="<?php echo $hasil['huruf_tugas_harian'];?>">
</div>
<div class="form-group">
<label>Ulangan Praktik</label>
<input class="form-control" type="text" name="h_ulangan_praktik" placeholder="Ganti dengan Huruf Ulangan Praktik" value="<?php echo $hasil['huruf_ulangan_praktik'];?>">
</div>
</div>
&nbsp;&nbsp;
<button type="submit" class="btn btn-default btn-success" value="simpan">Ganti</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
</div>
</div>
</form>
</form>
<?php include "footer.php"; ?>