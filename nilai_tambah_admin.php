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
alert('NIS harus diisi!.');
formZ.nis.focus();
return false;
}
if(formZ.aqidah.value=='')
{
alert('Nilai Aqidah Akhlak harus diisi!.');
formZ.aqidah.focus();
return false;
}
if(formZ.mtk.value=='')
{
alert('Nilai MTK harus diisi!.');
formZ.mtk.focus();
return false;
}
if(formZ.bindo.value=='')
{
alert('Nilai Bahasa Indonesia harus diisi!.');
formZ.bindo.focus();
return false;
}
if(formZ.pkn.value=='')
{
alert('Nilai PKN harus diisi!.');
formZ.pkn.focus();
return false;
}
if(formZ.barab.value=='')
{
alert('Nilai Bahasa Arab harus diisi!.');
formZ.barab.focus();
return false;
}
if(formZ.pai.value=='')
{
alert('Nilai Pendidikan Agama Islam harus diisi!.');
formZ.pai.focus();
return false;
}
if(formZ.fiqih.value=='')
{
alert('Nilai Fiqih harus diisi!.');
formZ.fiqih.focus();
return false;
}
if(formZ.kimia.value=='')
{
alert('Nilai Kimia harus diisi!.');
formZ.kimia.focus();
return false;
}
if(formZ.fisika.value=='')
{
alert('Nilai Fisika harus diisi!.');
formZ.fisika.focus();
return false;
}
if(formZ.sosiologi.value=='')
{
alert('Nilai Sosiologi harus diisi!.');
formZ.sosiologi.focus();
return false;
}
if(formZ.binggris.value=='')
{
alert('Nilai Bahasa Inggris harus diisi!.');
formZ.binggris.focus();
return false;
}
if(formZ.senbud.value=='')
{
alert('Nilai Seni Budaya harus diisi!.');
formZ.senbud.focus();
return false;
}
if(formZ.penjas.value=='')
{
alert('Nilai penjas harus diisi!.');
formZ.penjas.focus();
return false;
}
if(formZ.qurdits.value=='')
{
alert('Nilai Quran Hadits harus diisi!.');
formZ.qurdits.focus();
return false;
}
if(formZ.ekonomi.value=='')
{
alert('Nilai Ekonomi harus diisi!.');
formZ.ekonomi.focus();
return false;
}
if(formZ.biologi.value=='')
{
alert('Nilai Biologi harus diisi!.');
formZ.biologi.focus();
return false;
}
if(formZ.geografi.value=='')
{
alert('Nilai Geografi harus diisi!.');
formZ.geografi.focus();
return false;
}
if(formZ.plbj.value=='')
{
alert('Nilai PLBJ harus diisi!.');
formZ.plbj.focus();
return false;
}
if(formZ.ski.value=='')
{
alert('Nilai SKI harus diisi!.');
formZ.ski.focus();
return false;
}
if(formZ.tik.value=='')
{
alert('Nilai TIK harus diisi!.');
formZ.tik.focus();
return false;
}
if(formZ.tugas_harian.value=='')
{
alert('Nilai Tugas Harian harus diisi!.');
formZ.tugas_harian.focus();
return false;
}
if(formZ.ulangan_praktik.value=='')
{
alert('Nilai Ulangan Praktik harus diisi!.');
formZ.ulangan_praktik.focus();
return false;
}
if(formZ.h_aqidah.value=='')
{
alert('Huruf Aqidah Akhlak harus diisi!.');
formZ.h_aqidah.focus();
return false;
}
if(formZ.h_mtk.value=='')
{
alert('Huruf MTK harus diisi!.');
formZ.h_mtk.focus();
return false;
}
if(formZ.h_bindo.value=='')
{
alert('Huruf Bahasa Indonesia harus diisi!.');
formZ.h_bindo.focus();
return false;
}
if(formZ.h_pkn.value=='')
{
alert('Huruf PKN harus diisi!.');
formZ.h_pkn.focus();
return false;
}
if(formZ.h_barab.value=='')
{
alert('Huruf Bahasa Arab harus diisi!.');
formZ.h_barab.focus();
return false;
}
if(formZ.h_pai.value=='')
{
alert('Huruf Pendidikan Agama Islam harus diisi!.');
formZ.h_pai.focus();
return false;
}
if(formZ.h_fiqih.value=='')
{
alert('Huruf Fiqih harus diisi!.');
formZ.h_fiqih.focus();
return false;
}
if(formZ.h_kimia.value=='')
{
alert('Huruf Kimia harus diisi!.');
formZ.h_kimia.focus();
return false;
}
if(formZ.h_fisika.value=='')
{
alert('Huruf Fisika harus diisi!.');
formZ.h_fisika.focus();
return false;
}
if(formZ.h_sosiologi.value=='')
{
alert('Huruf Sosiologi harus diisi!.');
formZ.h_sosiologi.focus();
return false;
}
if(formZ.h_binggris.value=='')
{
alert('Huruf Bahasa Inggris harus diisi!.');
formZ.h_binggris.focus();
return false;
}
if(formZ.h_senbud.value=='')
{
alert('Huruf Seni Budaya harus diisi!.');
formZ.h_senbud.focus();
return false;
}
if(formZ.h_penjas.value=='')
{
alert('Huruf penjas harus diisi!.');
formZ.h_penjas.focus();
return false;
}
if(formZ.h_qurdits.value=='')
{
alert('Huruf Quran Hadits harus diisi!.');
formZ.h_qurdits.focus();
return false;
}
if(formZ.h_ekonomi.value=='')
{
alert('Huruf Ekonomi harus diisi!.');
formZ.h_ekonomi.focus();
return false;
}
if(formZ.h_biologi.value=='')
{
alert('Huruf Biologi harus diisi!.');
formZ.h_biologi.focus();
return false;
}
if(formZ.h_geografi.value=='')
{
alert('Huruf Geografi harus diisi!.');
formZ.h_geografi.focus();
return false;
}
if(formZ.h_plbj.value=='')
{
alert('Huruf PLBJ harus diisi!.');
formZ.h_plbj.focus();
return false;
}
if(formZ.h_ski.value=='')
{
alert('Huruf SKI harus diisi!.');
formZ.h_ski.focus();
return false;
}
if(formZ.h_tik.value=='')
{
alert('Huruf TIK harus diisi!.');
formZ.h_tik.focus();
return false;
}
if(formZ.h_tugas_harian.value=='')
{
alert('Huruf Tugas Harian harus diisi!.');
formZ.h_tugas_harian.focus();
return false;
}
if(formZ.h_ulangan_praktik.value=='')
{
alert('Huruf Ulangan Praktik harus diisi!.');
formZ.h_ulangan_praktik.focus();
return false;
}
}
</script>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Tambah Nilai Siswa
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Tambah Nilai Siswa
</li>
</ol>
<form enctype='multipart/form-data' method='post' action='nilai_simpan_admin.php' onsubmit="return checkForm(this)">
<form role="form">
<div class="row">
<div class="col-lg-22">
<div class="col-md-6">
<div class="form-group">
<label>Nilai Hasil Pelajaran NIS</label>
<select class="form-control" type='text' name='nis'>
	<option value='0'>- Pilih NIS Siswa -</option>
	<?php $sql = mysql_query("SELECT nis FROM siswa");
	while ($data = mysql_fetch_array($sql)){
	echo "<option value=".$data['nis'].">".$data['nis']."</option>";}?>
</select>
</div>
<div class="form-group">
<label>Aqidah Akhlak</label>
<input class="form-control" type="text" name="aqidah" placeholder="Isi dengan Nilai Aqidah Akhlak">
</div>
<div class="form-group">
<label>MTK</label>
<input class="form-control" type="text" name="mtk" placeholder="Isi dengan Nilai MTK">
</div>
<div class="form-group">
<label>Bahasa Indonesia</label>
<input class="form-control" type="text" name="bindo" placeholder="Isi dengan Nilai Bahasa Indonesia">
</div>
<div class="form-group">
<label>PKN</label>
<input class="form-control" type="text" name="pkn" placeholder="Isi dengan Nilai PKN">
</div>
<div class="form-group">
<label>Bahasa Arab</label>
<input class="form-control" type="text" name="barab" placeholder="Isi dengan Nilai Bahasa Arab">
</div>
<div class="form-group">
<label>Pendidikan Agama Islam</label>
<input class="form-control" type="text" name="pai" placeholder="Isi dengan Nilai Pendidikan Agama Islam">
</div>
<div class="form-group">
<label>Fiqih</label>
<input class="form-control" type="text" name="fiqih" placeholder="Isi dengan Nilai Fiqih">
</div>
<div class="form-group">
<label>Kimia</label>
<input class="form-control" type="text" name="kimia" placeholder="Isi dengan Nilai Kimia">
</div>
<div class="form-group">
<label>Fisika</label>
<input class="form-control" type="text" name="fisika" placeholder="Isi dengan Nilai Fisika">
</div>
<div class="form-group">
<label>Sosiologi</label>
<input class="form-control" type="text" name="sosiologi" placeholder="Isi dengan Nilai Sosiologi">
</div>
<div class="form-group">
<label>Bahasa Inggris</label>
<input class="form-control" type="text" name="binggris" placeholder="Isi dengan Nilai Bahasa Inggris">
</div>
<div class="form-group">
<label>Seni Budaya</label>
<input class="form-control" type="text" name="senbud" placeholder="Isi dengan Nilai Seni Budaya">
</div>
<div class="form-group">
<label>Penjaskes</label>
<input class="form-control" type="text" name="penjas" placeholder="Isi dengan Nilai Penjaskes">
</div>
<div class="form-group">
<label>Qur'an Hadits</label>
<input class="form-control" type="text" name="qurdits" placeholder="Isi dengan Nilai Qur'an Hadits">
</div>
<div class="form-group">
<label>Ekonomi</label>
<input class="form-control" type="text" name="ekonomi" placeholder="Isi dengan Nilai Ekonomi">
</div>
<div class="form-group">
<label>Biologi</label>
<input class="form-control" type="text" name="biologi" placeholder="Isi dengan Nilai Biologi">
</div>
<div class="form-group">
<label>Geografi</label>
<input class="form-control" type="text" name="geografi" placeholder="Isi dengan Nilai Geografi">
</div>
<div class="form-group">
<label>PLBJ</label>
<input class="form-control" type="text" name="plbj" placeholder="Isi dengan Nilai PLBJ">
</div>
<div class="form-group">
<label>SKI</label>
<input class="form-control" type="text" name="ski" placeholder="Isi dengan Nilai SKI">
</div>
<div class="form-group">
<label>TIK</label>
<input class="form-control" type="text" name="tik" placeholder="Isi dengan Nilai TIK">
</div>
<hr>
<div class="form-group">
<label>Tugas Harian</label>
<input class="form-control" type="text" name="tugas_harian" placeholder="Isi dengan Nilai Tugas Harian">
</div>
<div class="form-group">
<label>Ulangan Praktik</label>
<input class="form-control" type="text" name="ulangan_praktik" placeholder="Isi dengan Nilai Ulangan Praktik">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Aqidah Akhlak</label>
<input class="form-control" type="text" name="h_aqidah" placeholder="Isi dengan Huruf Aqidah Akhlak">
</div>
<div class="form-group">
<label>MTK</label>
<input class="form-control" type="text" name="h_mtk" placeholder="Isi dengan Huruf MTK">
</div>
<div class="form-group">
<label>Bahasa Indonesia</label>
<input class="form-control" type="text" name="h_bindo" placeholder="Isi dengan Huruf Bahasa Indonesia">
</div>
<div class="form-group">
<label>PKN</label>
<input class="form-control" type="text" name="h_pkn" placeholder="Isi dengan Huruf PKN">
</div>
<div class="form-group">
<label>Bahasa Arab</label>
<input class="form-control" type="text" name="h_barab" placeholder="Isi dengan Huruf Bahasa Arab">
</div>
<div class="form-group">
<label>Pendidikan Agama Islam</label>
<input class="form-control" type="text" name="h_pai" placeholder="Isi dengan Huruf Pendidikan Agama Islam">
</div>
<div class="form-group">
<label>Fiqih</label>
<input class="form-control" type="text" name="h_fiqih" placeholder="Isi dengan Huruf Fiqih">
</div>
<div class="form-group">
<label>Kimia</label>
<input class="form-control" type="text" name="h_kimia" placeholder="Isi dengan Huruf Kimia">
</div>
<div class="form-group">
<label>Fisika</label>
<input class="form-control" type="text" name="h_fisika" placeholder="Isi dengan Huruf Fisika">
</div>
<div class="form-group">
<label>Sosiologi</label>
<input class="form-control" type="text" name="h_sosiologi" placeholder="Isi dengan Huruf Sosiologi">
</div>
<div class="form-group">
<label>Bahasa Inggris</label>
<input class="form-control" type="text" name="h_binggris" placeholder="Isi dengan Huruf Bahasa Inggris">
</div>
<div class="form-group">
<label>Seni Budaya</label>
<input class="form-control" type="text" name="h_senbud" placeholder="Isi dengan Huruf Seni Budaya">
</div>
<div class="form-group">
<label>Penjaskes</label>
<input class="form-control" type="text" name="h_penjas" placeholder="Isi dengan Huruf Penjaskes">
</div>
<div class="form-group">
<label>Qur'an Hadits</label>
<input class="form-control" type="text" name="h_qurdits" placeholder="Isi dengan Huruf Qur'an Hadits">
</div>
<div class="form-group">
<label>Ekonomi</label>
<input class="form-control" type="text" name="h_ekonomi" placeholder="Isi dengan Huruf Ekonomi">
</div>
<div class="form-group">
<label>Biologi</label>
<input class="form-control" type="text" name="h_biologi" placeholder="Isi dengan Huruf Biologi">
</div>
<div class="form-group">
<label>Geografi</label>
<input class="form-control" type="text" name="h_geografi" placeholder="Isi dengan Huruf Geografi">
</div>
<div class="form-group">
<label>PLBJ</label>
<input class="form-control" type="text" name="h_plbj" placeholder="Isi dengan Huruf PLBJ">
</div>
<div class="form-group">
<label>SKI</label>
<input class="form-control" type="text" name="h_ski" placeholder="Isi dengan Huruf SKI">
</div>
<div class="form-group">
<label>TIK</label>
<input class="form-control" type="text" name="h_tik" placeholder="Isi dengan Huruf TIK">
</div>
<hr>
<div class="form-group">
<label>Tugas Harian</label>
<input class="form-control" type="text" name="h_tugas_harian" placeholder="Isi dengan Huruf Tugas Harian">
</div>
<div class="form-group">
<label>Ulangan Praktik</label>
<input class="form-control" type="text" name="h_ulangan_praktik" placeholder="Isi dengan Huruf Ulangan Praktik">
</div>
</div>
&nbsp;&nbsp;
<button type="submit" class="btn btn-default btn-success" value="simpan">Simpan</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
</div>
</div>
</form>
</form>
<?php include "footer.php"; ?>