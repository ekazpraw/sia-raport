<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
echo "<h1 class='page-header'>
<img src='images/mtsicon.jpg' width='50' height='50'> Detail Absen Siswa
</h1>
<ol class='breadcrumb'>
<li>
<i class='fa fa-dashboard'></i><img src='images/mtsicon.png' width='20' height='20'><a href='beranda.php'> Home</a>
</li>
<li class='active'>
<i class='fa fa-table'></i> Detail Absen Siswa
</li>
</ol>";
$nis = $_GET['id'];
$s = mysql_query("select * from siswa sis
inner join kelas kls
on sis.id_kelas=kls.id_kelas
inner join absen abs
on sis.nis=abs.nis
where sis.nis='".$nis."'");
$h=mysql_fetch_array($s);
echo "<table class='table table-striped table-bordered table-hover'>
<tr>
<td>NIS:</td>
<td>".$h['nis']."</td>
</tr>
<tr>
<td>Bulan Absen:</td>
<td>".$h['bulan']."</td>
</tr>
<tr>
<td>Kelas:</td>
<td>".$h['nama_kelas']."</td>
</tr>
<tr>
<td>--------------------</td>
<td>---Batas Info---</td>
</tr>
<tr>
<td>Tanggal 1:</td>
<td>".$h['tgl1']."</td>
</tr>
<tr>
<td>Tanggal 2:</td>
<td>".$h['tgl2']."</td>
</tr>
<tr>
<td>Tanggal 3:</td>
<td>".$h['tgl3']."</td>
</tr>
<tr>
<td>Tanggal 4:</td>
<td>".$h['tgl4']."</td>
</tr>
<tr>
<td>Tanggal 5:</td>
<td>".$h['tgl5']."</td>
</tr>
<tr>
<td>Tanggal 6:</td>
<td>".$h['tgl6']."</td>
</tr>
<tr>
<td>Tanggal 7:</td>
<td>".$h['tgl7']."</td>
</tr>
<tr>
<td>Tanggal 8:</td>
<td>".$h['tgl8']."</td>
</tr>
<tr>
<td>Tanggal 9:</td>
<td>".$h['tgl9']."</td>
</tr>
<tr>
<td>Tanggal 10:</td>
<td>".$h['tgl10']."</td>
</tr>
<tr>
<td>Tanggal 11:</td>
<td>".$h['tgl11']."</td>
</tr>
<tr>
<td>Tanggal 12:</td>
<td>".$h['tgl12']."</td>
</tr>
<tr>
<td>Tanggal 13:</td>
<td>".$h['tgl13']."</td>
</tr>
<tr>
<td>Tanggal 14:</td>
<td>".$h['tgl14']."</td>
</tr>
<tr>
<td>Tanggal 15:</td>
<td>".$h['tgl15']."</td>
</tr>
<tr>
<td>Tanggal 16:</td>
<td>".$h['tgl16']."</td>
</tr>
<tr>
<td>Tanggal 17:</td>
<td>".$h['tgl17']."</td>
</tr>
<tr>
<td>Tanggal 18:</td>
<td>".$h['tgl18']."</td>
</tr>
<tr>
<td>Tanggal 19:</td>
<td>".$h['tgl19']."</td>
</tr>
<tr>
<td>Tanggal 20:</td>
<td>".$h['tgl20']."</td>
</tr>
<tr>
<td>Tanggal 21:</td>
<td>".$h['tgl21']."</td>
</tr>
<tr>
<td>Tanggal 22:</td>
<td>".$h['tgl22']."</td>
</tr>
<tr>
<td>Tanggal 23:</td>
<td>".$h['tgl23']."</td>
</tr>
<tr>
<td>Tanggal 24:</td>
<td>".$h['tgl24']."</td>
</tr>
<tr>
<td>Tanggal 25:</td>
<td>".$h['tgl25']."</td>
</tr>
<tr>
<td>Tanggal 26:</td>
<td>".$h['tgl26']."</td>
</tr>
<tr>
<td>Tanggal 27:</td>
<td>".$h['tgl27']."</td>
</tr>
<tr>
<td>Tanggal 28:</td>
<td>".$h['tgl28']."</td>
</tr>
<tr>
<td>Tanggal 29:</td>
<td>".$h['tgl29']."</td>
</tr>
<tr>
<td>Tanggal 30:</td>
<td>".$h['tgl30']."</td>
</tr>
<tr>
<td>Tanggal 31:</td>
<td>".$h['tgl31']."</td>
</tr>
<tr>
<td>Total Hadir:</td>
<td>".$h['totalabs_hadir']."</td>
</tr>
<tr>
<td>Total Sakit:</td>
<td>".$h['totalabs_sakit']."</td>
</tr>
<tr>
<td>Total Alpa/Membolos:</td>
<td>".$h['totalabs_alpa']."</td>
</tr>
<tr>
<td>Total Libur:</td>
<td>".$h['totalabs_libur']."</td>
</tr>
</table>
<tr>
<td><td>
<input type='button' onclick='history.back()' class='btn btn-primary' value='Kembali'>
</tr>";
?>
<?php include "footer.php"; ?>