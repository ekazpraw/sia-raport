<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$id = $_GET['id']; 
$sql = mysql_query("select * from absen where nis='$id'");
$hasil = mysql_fetch_array($sql);
?>
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
<form enctype='multipart/form-data' method='post' action='absen_update_admin.php' onsubmit="return checkForm(this)">
<form role="form">
<div class="row">
<div class="col-lg-12">
<div class="col-md-6">
<div class="form-group">
<label>NIS</label>
<input class="form-control" type="text" name="nis" placeholder="Isi dengan NIS Siswa" value="<?php echo $hasil['nis'];?>">
</div>
<div class="form-group">
<label>Bulan</label>
<input class="form-control" type="text" name="bulan" placeholder="Isi dengan Bulan Absen Siswa" value="<?php echo $hasil['bulan'];?>">
</div>
<div class="form-group">
<label>Tanggal 1</label>
<input class="form-control" type="text" name="tgl1" placeholder="Isi dengan Tanggal 1" value="<?php echo $hasil['tgl1'];?>">
</div>
<div class="form-group">
<label>Tanggal 2</label>
<input class="form-control" type="text" name="tgl2" placeholder="Isi dengan Tanggal 2" value="<?php echo $hasil['tgl2'];?>">
</div>
<div class="form-group">
<label>Tanggal 3</label>
<input class="form-control" type="text" name="tgl3" placeholder="Isi dengan Tanggal 3" value="<?php echo $hasil['tgl3'];?>">
</div>
<div class="form-group">
<label>Tanggal 4</label>
<input class="form-control" type="text" name="tgl4" placeholder="Isi dengan Tanggal 4" value="<?php echo $hasil['tgl4'];?>">
</div>
<div class="form-group">
<label>Tanggal 5</label>
<input class="form-control" type="text" name="tgl5" placeholder="Isi dengan Tanggal 5" value="<?php echo $hasil['tgl5'];?>">
</div>
<div class="form-group">
<label>Tanggal 6</label>
<input class="form-control" type="text" name="tgl6" placeholder="Isi dengan Tanggal 6" value="<?php echo $hasil['tgl6'];?>">
</div>
<div class="form-group">
<label>Tanggal 7</label>
<input class="form-control" type="text" name="tgl7" placeholder="Isi dengan Tanggal 7" value="<?php echo $hasil['tgl7'];?>">
</div>
<div class="form-group">
<label>Tanggal 8</label>
<input class="form-control" type="text" name="tgl8" placeholder="Isi dengan Tanggal 8" value="<?php echo $hasil['tgl8'];?>">
</div>
<div class="form-group">
<label>Tanggal 9</label>
<input class="form-control" type="text" name="tgl9" placeholder="Isi dengan Tanggal 9" value="<?php echo $hasil['tgl9'];?>">
</div>
<div class="form-group">
<label>Tanggal 10</label>
<input class="form-control" type="text" name="tgl10" placeholder="Isi dengan Tanggal 10" value="<?php echo $hasil['tgl10'];?>">
</div>
<div class="form-group">
<label>Tanggal 11</label>
<input class="form-control" type="text" name="tgl11" placeholder="Isi dengan Tanggal 11" value="<?php echo $hasil['tgl11'];?>">
</div>
<div class="form-group">
<label>Tanggal 12</label>
<input class="form-control" type="text" name="tgl12" placeholder="Isi dengan Tanggal 12" value="<?php echo $hasil['tgl12'];?>">
</div>
<div class="form-group">
<label>Tanggal 13</label>
<input class="form-control" type="text" name="tgl13" placeholder="Isi dengan Tanggal 13" value="<?php echo $hasil['tgl13'];?>">
</div>
<div class="form-group">
<label>Tanggal 14</label>
<input class="form-control" type="text" name="tgl14" placeholder="Isi dengan Tanggal 14" value="<?php echo $hasil['tgl14'];?>">
</div>
<div class="form-group">
<label>Tanggal 15</label>
<input class="form-control" type="text" name="tgl15" placeholder="Isi dengan Tanggal 15" value="<?php echo $hasil['tgl15'];?>">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Tanggal 16</label>
<input class="form-control" type="text" name="tgl16" placeholder="Isi dengan Tanggal 16" value="<?php echo $hasil['tgl16'];?>">
</div>
<div class="form-group">
<label>Tanggal 17</label>
<input class="form-control" type="text" name="tgl17" placeholder="Isi dengan Tanggal 17" value="<?php echo $hasil['tgl17'];?>">
</div>
<div class="form-group">
<label>Tanggal 18</label>
<input class="form-control" type="text" name="tgl18" placeholder="Isi dengan Tanggal 18" value="<?php echo $hasil['tgl18'];?>">
</div>
<div class="form-group">
<label>Tanggal 19</label>
<input class="form-control" type="text" name="tgl19" placeholder="Isi dengan Tanggal 19" value="<?php echo $hasil['tgl19'];?>">
</div>
<div class="form-group">
<label>Tanggal 20</label>
<input class="form-control" type="text" name="tgl20" placeholder="Isi dengan Tanggal 20" value="<?php echo $hasil['tgl20'];?>">
</div>
<div class="form-group">
<label>Tanggal 21</label>
<input class="form-control" type="text" name="tgl21" placeholder="Isi dengan Tanggal 21" value="<?php echo $hasil['tgl21'];?>">
</div>
<div class="form-group">
<label>Tanggal 22</label>
<input class="form-control" type="text" name="tgl22" placeholder="Isi dengan Tanggal 22" value="<?php echo $hasil['tgl22'];?>">
</div>
<div class="form-group">
<label>Tanggal 23</label>
<input class="form-control" type="text" name="tgl23" placeholder="Isi dengan Tanggal 23" value="<?php echo $hasil['tgl23'];?>">
</div>
<div class="form-group">
<label>Tanggal 24</label>
<input class="form-control" type="text" name="tgl24" placeholder="Isi dengan Tanggal 24" value="<?php echo $hasil['tgl24'];?>">
</div>
<div class="form-group">
<label>Tanggal 25</label>
<input class="form-control" type="text" name="tgl25" placeholder="Isi dengan Tanggal 25" value="<?php echo $hasil['tgl25'];?>">
</div>
<div class="form-group">
<label>Tanggal 26</label>
<input class="form-control" type="text" name="tgl26" placeholder="Isi dengan Tanggal 26" value="<?php echo $hasil['tgl26'];?>">
</div>
<div class="form-group">
<label>Tanggal 27</label>
<input class="form-control" type="text" name="tgl27" placeholder="Isi dengan Tanggal 27" value="<?php echo $hasil['tgl27'];?>">
</div>
<div class="form-group">
<label>Tanggal 28</label>
<input class="form-control" type="text" name="tgl28" placeholder="Isi dengan Tanggal 28" value="<?php echo $hasil['tgl28'];?>">
</div>
<div class="form-group">
<label>Tanggal 29</label>
<input class="form-control" type="text" name="tgl29" placeholder="Isi dengan Tanggal 29" value="<?php echo $hasil['tgl29'];?>">
</div>
<div class="form-group">
<label>Tanggal 30</label>
<input class="form-control" type="text" name="tgl30" placeholder="Isi dengan Tanggal 30" value="<?php echo $hasil['tgl30'];?>">
</div>
<div class="form-group">
<label>Tanggal 31</label>
<input class="form-control" type="text" name="tgl31" placeholder="Isi dengan Tanggal 31" value="<?php echo $hasil['tgl31'];?>">
</div>
<div class="form-group">
<label>Hadir</label>
<input class="form-control" type="text" name="totalabs_hadir" placeholder="Isi dengan Total Kehadiran Bulan Ini" value="<?php echo $hasil['totalabs_hadir'];?>">
</div>
<div class="form-group">
<label>Sakit</label>
<input class="form-control" type="text" name="totalabs_sakit" placeholder="Isi dengan Total Surat Sakitnya Bulan Ini" value="<?php echo $hasil['totalabs_sakit'];?>">
</div>
<div class="form-group">
<label>Alpa</label>
<input class="form-control" type="text" name="totalabs_alpa" placeholder="Isi dengan Total Jumlah Bolosnya Bulan Ini" value="<?php echo $hasil['totalabs_alpa'];?>">
</div>
<div class="form-group">
<label>Libur</label>
<input class="form-control" type="text" name="totalabs_libur" placeholder="Isi dengan Total Libur Bulan Ini" value="<?php echo $hasil['totalabs_libur'];?>">
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