<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
echo "<h1 class='page-header'>
<img src='images/mtsicon.jpg' width='50' height='50'> Detail Nilai Siswa
</h1>
<ol class='breadcrumb'>
<li>
<i class='fa fa-dashboard'></i><img src='images/mtsicon.png' width='20' height='20'><a href='beranda.php'> Home</a>
</li>
<li class='active'>
<i class='fa fa-table'></i> Detail Nilai Siswa
</li>
</ol>";
$nis = $_GET['id'];
$s = mysql_query("select * from siswa sis
inner join kelas kls
on sis.id_kelas=kls.id_kelas
inner join nilai nil
on sis.nis=nil.nis
where sis.nis='".$nis."'");
$h=mysql_fetch_array($s);
echo "<table class='table table-striped table-bordered table-hover'>
<tr>
<td>NIS:</td>
<td>".$h['nis']."</td>
<td>--------------------</td>
</tr>
<tr>
<td>Nama Lengkap:</td>
<td>".$h['nama_siswa']."</td>
<td>--------------------</td>
</tr>
<tr>
<td>Kelas:</td>
<td>".$h['nama_kelas']."</td>
<td>--------------------</td>
</tr>
<tr>
<td>--------------------</td>
<td>---Batas Info---</td>
<td>--------------------</td>
</tr>
<tr>
<td>Aqidah Akhlak:</td>
<td>".$h['nilai_aqidah']."</td>
<td>".$h['huruf_aqidah']."</td>
</tr>
<tr>
<td>MTK:</td>
<td>".$h['nilai_mtk']."</td>
<td>".$h['huruf_mtk']."</td>
</tr>
<tr>
<td>Bahasa Indonesia:</td>
<td>".$h['nilai_bindo']."</td>
<td>".$h['huruf_bindo']."</td>
</tr>
<tr>
<td>PKN:</td>
<td>".$h['nilai_pkn']."</td>
<td>".$h['huruf_pkn']."</td>
</tr>
<tr>
<td>Bahasa Arab:</td>
<td>".$h['nilai_barab']."</td>
<td>".$h['huruf_barab']."</td>
</tr>
<tr>
<td>Pendidikan Agama Islam:</td>
<td>".$h['nilai_pai']."</td>
<td>".$h['huruf_pai']."</td>
</tr>
<tr>
<td>Fiqih:</td>
<td>".$h['nilai_fiqih']."</td>
<td>".$h['huruf_fiqih']."</td>
</tr>
<tr>
<td>Kimia:</td>
<td>".$h['nilai_kimia']."</td>
<td>".$h['huruf_kimia']."</td>
</tr>
<tr>
<td>Fisika:</td>
<td>".$h['nilai_fisika']."</td>
<td>".$h['huruf_fisika']."</td>
</tr>
<tr>
<td>Sosiologi:</td>
<td>".$h['nilai_sosiologi']."</td>
<td>".$h['huruf_sosiologi']."</td>
</tr>
<tr>
<td>Bahasa Inggris:</td>
<td>".$h['nilai_binggris']."</td>
<td>".$h['huruf_binggris']."</td>
</tr>
<tr>
<td>Seni Budaya:</td>
<td>".$h['nilai_senbud']."</td>
<td>".$h['huruf_senbud']."</td>
</tr>
<tr>
<td>Penjaskes:</td>
<td>".$h['nilai_penjas']."</td>
<td>".$h['huruf_penjas']."</td>
</tr>
<tr>
<td>Qur'an Hadits:</td>
<td>".$h['nilai_qurdits']."</td>
<td>".$h['huruf_qurdits']."</td>
</tr>
<tr>
<td>Ekonomi:</td>
<td>".$h['nilai_ekonomi']."</td>
<td>".$h['huruf_ekonomi']."</td>
</tr>
<tr>
<td>Biologi:</td>
<td>".$h['nilai_biologi']."</td>
<td>".$h['huruf_biologi']."</td>
</tr>
<tr>
<td>Geografi:</td>
<td>".$h['nilai_geografi']."</td>
<td>".$h['huruf_geografi']."</td>
</tr>
<tr>
<td>PLBJ:</td>
<td>".$h['nilai_plbj']."</td>
<td>".$h['huruf_plbj']."</td>
</tr>
<tr>
<td>SKI:</td>
<td>".$h['nilai_ski']."</td>
<td>".$h['huruf_ski']."</td>
</tr>
<tr>
<td>TIK:</td>
<td>".$h['nilai_tik']."</td>
<td>".$h['huruf_tik']."</td>
</tr>
<tr>
<td>----------</td>
<td>---Batas Info---</td>
<td>--------------------</td>
</tr>
<tr>
<td>Tugas Harian:</td>
<td>".$h['tugas_harian']."</td>
<td>".$h['huruf_tugas_harian']."</td>
</tr>
<tr>
<td>Ulangan Praktik:</td>
<td>".$h['ulangan_praktik']."</td>
<td>".$h['huruf_ulangan_praktik']."</td>
</tr>
</table>
<tr>
<td><td>
<input type='button' onclick='history.back()' class='btn btn-primary' value='Kembali'>
</tr>";
?>
<?php include "footer.php"; ?>