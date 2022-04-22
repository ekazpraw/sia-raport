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
if(formZ.bulan.value=='')
{
alert('Bulan harus diisi!.');
formZ.bulan.focus();
return false;
}
if(formZ.1.value=='')
{
alert('Tanggal 1 harus diisi!.');
formZ.1.focus();
return false;
}
if(formZ.2.value=='')
{
alert('Tanggal 2 harus diisi!.');
formZ.2.focus();
return false;
}
if(formZ.3.value=='')
{
alert('Tanggal 3 harus diisi!.');
formZ.3.focus();
return false;
}
if(formZ.4.value=='')
{
alert('Tanggal 4 harus diisi!.');
formZ.4.focus();
return false;
}
if(formZ.5.value=='')
{
alert('Tanggal 5 harus diisi!.');
formZ.5.focus();
return false;
}
if(formZ.6.value=='')
{
alert('Tanggal 6 harus diisi!.');
formZ.6.focus();
return false;
}
if(formZ.7.value=='')
{
alert('Tanggal 7 harus diisi!.');
formZ.7.focus();
return false;
}
if(formZ.8.value=='')
{
alert('Tanggal 8 harus diisi!.');
formZ.8.focus();
return false;
}
if(formZ.9.value=='')
{
alert('Tanggal 9 harus diisi!.');
formZ.9.focus();
return false;
}
if(formZ.10.value=='')
{
alert('Tanggal 10 harus diisi!.');
formZ.10.focus();
return false;
}
if(formZ.11.value=='')
{
alert('Tanggal 11 harus diisi!.');
formZ.11.focus();
return false;
}
if(formZ.12.value=='')
{
alert('Tanggal 12 harus diisi!.');
formZ.12.focus();
return false;
}
if(formZ.13.value=='')
{
alert('Tanggal 13 harus diisi!.');
formZ.13.focus();
return false;
}
if(formZ.14.value=='')
{
alert('Tanggal 14 harus diisi!.');
formZ.14.focus();
return false;
}
if(formZ.15.value=='')
{
alert('Tanggal 15 harus diisi!.');
formZ.15.focus();
return false;
}
if(formZ.16.value=='')
{
alert('Tanggal 16 harus diisi!.');
formZ.16.focus();
return false;
}
if(formZ.17.value=='')
{
alert('Tanggal 17 harus diisi!.');
formZ.17.focus();
return false;
}
if(formZ.18.value=='')
{
alert('Tanggal 18 harus diisi!.');
formZ.18.focus();
return false;
}
if(formZ.19.value=='')
{
alert('Tanggal 19 harus diisi!.');
formZ.19.focus();
return false;
}
if(formZ.20.value=='')
{
alert('Tanggal 20 harus diisi!.');
formZ.20.focus();
return false;
}
if(formZ.21.value=='')
{
alert('Tanggal 21 harus diisi!.');
formZ.21.focus();
return false;
}
if(formZ.22.value=='')
{
alert('Tanggal 22 harus diisi!.');
formZ.22.focus();
return false;
}
if(formZ.23.value=='')
{
alert('Tanggal 23 harus diisi!.');
formZ.23.focus();
return false;
}
if(formZ.24.value=='')
{
alert('Tanggal 24 harus diisi!.');
formZ.24.focus();
return false;
}
if(formZ.25.value=='')
{
alert('Tanggal 25 harus diisi!.');
formZ.25.focus();
return false;
}
if(formZ.26.value=='')
{
alert('Tanggal 26 harus diisi!.');
formZ.26.focus();
return false;
}
if(formZ.27.value=='')
{
alert('Tanggal 27 harus diisi!.');
formZ.27.focus();
return false;
}
if(formZ.28.value=='')
{
alert('Tanggal 28 harus diisi!.');
formZ.28.focus();
return false;
}
if(formZ.29.value=='')
{
alert('Tanggal 29 harus diisi!.');
formZ.29.focus();
return false;
}
if(formZ.30.value=='')
{
alert('Tanggal 30 harus diisi!.');
formZ.30.focus();
return false;
}
if(formZ.31.value=='')
{
alert('Tanggal 31 harus diisi!.');
formZ.31.focus();
return false;
}
if(formZ.totalabs_hadir.value=='')
{
alert('Total absen hadir harus diisi!.');
formZ.31.focus();
return false;
}
if(formZ.totalabs_sakit.value=='')
{
alert('Total absen sakit harus diisi!.');
formZ.31.focus();
return false;
}
if(formZ.totalabs_alpa.value=='')
{
alert('Total absen alpa harus diisi!.');
formZ.31.focus();
return false;
}
if(formZ.totalabs_.value=='')
{
alert('Total absen libur harus diisi!.');
formZ.31.focus();
return false;
}
}
</script>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"> Tambah Absen Siswa
</h1>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i>Tambah Absen Siswa
</li>
</ol>
<form enctype='multipart/form-data' method='post' action='absen_simpan_admin.php' onsubmit="return checkForm(this)">
<form role="form">
<div class="row">
<div class="col-lg-12">
<div class="col-md-6">
<div class="form-group">
<label>NIS</label>
<input class="form-control" type="text" name="nis" placeholder="Isi dengan NIS Siswa">
</div>
<div class="form-group">
<label>Bulan</label>
<input class="form-control" type="text" name="bulan" placeholder="Isi dengan Bulan Absen Siswa">
</div>
<div class="form-group">
<label>Tanggal 1</label>
<input class="form-control" type="text" name="tgl1" placeholder="Isi dengan Tanggal 1">
</div>
<div class="form-group">
<label>Tanggal 2</label>
<input class="form-control" type="text" name="tgl2" placeholder="Isi dengan Tanggal 2">
</div>
<div class="form-group">
<label>Tanggal 3</label>
<input class="form-control" type="text" name="tgl3" placeholder="Isi dengan Tanggal 3">
</div>
<div class="form-group">
<label>Tanggal 4</label>
<input class="form-control" type="text" name="tgl4" placeholder="Isi dengan Tanggal 4">
</div>
<div class="form-group">
<label>Tanggal 5</label>
<input class="form-control" type="text" name="tgl5" placeholder="Isi dengan Tanggal 5">
</div>
<div class="form-group">
<label>Tanggal 6</label>
<input class="form-control" type="text" name="tgl6" placeholder="Isi dengan Tanggal 6">
</div>
<div class="form-group">
<label>Tanggal 7</label>
<input class="form-control" type="text" name="tgl7" placeholder="Isi dengan Tanggal 7">
</div>
<div class="form-group">
<label>Tanggal 8</label>
<input class="form-control" type="text" name="tgl8" placeholder="Isi dengan Tanggal 8">
</div>
<div class="form-group">
<label>Tanggal 9</label>
<input class="form-control" type="text" name="tgl9" placeholder="Isi dengan Tanggal 9">
</div>
<div class="form-group">
<label>Tanggal 10</label>
<input class="form-control" type="text" name="tgl10" placeholder="Isi dengan Tanggal 10">
</div>
<div class="form-group">
<label>Tanggal 11</label>
<input class="form-control" type="text" name="tgl11" placeholder="Isi dengan Tanggal 11">
</div>
<div class="form-group">
<label>Tanggal 12</label>
<input class="form-control" type="text" name="tgl12" placeholder="Isi dengan Tanggal 12">
</div>
<div class="form-group">
<label>Tanggal 13</label>
<input class="form-control" type="text" name="tgl13" placeholder="Isi dengan Tanggal 13">
</div>
<div class="form-group">
<label>Tanggal 14</label>
<input class="form-control" type="text" name="tgl14" placeholder="Isi dengan Tanggal 14">
</div>
<div class="form-group">
<label>Tanggal 15</label>
<input class="form-control" type="text" name="tgl15" placeholder="Isi dengan Tanggal 15">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Tanggal 16</label>
<input class="form-control" type="text" name="tgl16" placeholder="Isi dengan Tanggal 16">
</div>
<div class="form-group">
<label>Tanggal 17</label>
<input class="form-control" type="text" name="tgl17" placeholder="Isi dengan Tanggal 17">
</div>
<div class="form-group">
<label>Tanggal 18</label>
<input class="form-control" type="text" name="tgl18" placeholder="Isi dengan Tanggal 18">
</div>
<div class="form-group">
<label>Tanggal 19</label>
<input class="form-control" type="text" name="tgl19" placeholder="Isi dengan Tanggal 19">
</div>
<div class="form-group">
<label>Tanggal 20</label>
<input class="form-control" type="text" name="tgl20" placeholder="Isi dengan Tanggal 20">
</div>
<div class="form-group">
<label>Tanggal 21</label>
<input class="form-control" type="text" name="tgl21" placeholder="Isi dengan Tanggal 21">
</div>
<div class="form-group">
<label>Tanggal 22</label>
<input class="form-control" type="text" name="tgl22" placeholder="Isi dengan Tanggal 22">
</div>
<div class="form-group">
<label>Tanggal 23</label>
<input class="form-control" type="text" name="tgl23" placeholder="Isi dengan Tanggal 23">
</div>
<div class="form-group">
<label>Tanggal 24</label>
<input class="form-control" type="text" name="tgl24" placeholder="Isi dengan Tanggal 24">
</div>
<div class="form-group">
<label>Tanggal 25</label>
<input class="form-control" type="text" name="tgl25" placeholder="Isi dengan Tanggal 25">
</div>
<div class="form-group">
<label>Tanggal 26</label>
<input class="form-control" type="text" name="tgl26" placeholder="Isi dengan Tanggal 26">
</div>
<div class="form-group">
<label>Tanggal 27</label>
<input class="form-control" type="text" name="tgl27" placeholder="Isi dengan Tanggal 27">
</div>
<div class="form-group">
<label>Tanggal 28</label>
<input class="form-control" type="text" name="tgl28" placeholder="Isi dengan Tanggal 28">
</div>
<div class="form-group">
<label>Tanggal 29</label>
<input class="form-control" type="text" name="tgl29" placeholder="Isi dengan Tanggal 29">
</div>
<div class="form-group">
<label>Tanggal 30</label>
<input class="form-control" type="text" name="tgl30" placeholder="Isi dengan Tanggal 30">
</div>
<div class="form-group">
<label>Tanggal 31</label>
<input class="form-control" type="text" name="tgl31" placeholder="Isi dengan Tanggal 31">
</div>
<div class="form-group">
<label>Hadir</label>
<input class="form-control" type="text" name="totalabs_hadir" placeholder="Isi dengan Total Kehadiran Bulan Ini">
</div>
<div class="form-group">
<label>Sakit</label>
<input class="form-control" type="text" name="totalabs_sakit" placeholder="Isi dengan Total Surat Sakitnya Bulan Ini">
</div>
<div class="form-group">
<label>Alpa</label>
<input class="form-control" type="text" name="totalabs_alpa" placeholder="Isi dengan Total Jumlah Bolosnya Bulan Ini">
</div>
<div class="form-group">
<label>Libur</label>
<input class="form-control" type="text" name="totalabs_libur" placeholder="Isi dengan Total Libur Bulan Ini">
</div>
</div>
&nbsp;&nbsp;
<button type="submit" class="btn btn-default btn-success" value="simpan">Simpan</button>
<button type="reset" class="btn btn-default btn-primary" onclick="history.back()" value="Kembali">Kembali</button>
</div>
</div>
</div>
</form>
</form>
<?php include "footer.php"; ?>