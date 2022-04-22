<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$nis = $_POST['nis'];
$aqidah = $_POST['aqidah'];
$mtk = $_POST['mtk'];
$bindo = $_POST['bindo'];
$pkn = $_POST['pkn'];
$barab = $_POST['barab']; 
$pai = $_POST['pai'];
$fiqih = $_POST['fiqih'];
$kimia = $_POST['kimia'];
$fisika = $_POST['fisika'];
$sosiologi = $_POST['sosiologi'];
$binggris = $_POST['binggris'];
$senbud = $_POST['senbud'];
$penjas = $_POST['penjas'];
$qurdits = $_POST['qurdits'];
$ekonomi = $_POST['ekonomi'];
$biologi = $_POST['biologi'];
$geografi = $_POST['geografi'];
$plbj = $_POST['plbj'];
$ski = $_POST['ski'];
$tik = $_POST['tik'];
$tugas_harian = $_POST['tugas_harian'];
$ulangan_praktik = $_POST['ulangan_praktik'];
$h_aqidah = $_POST['h_aqidah'];
$h_mtk = $_POST['h_mtk'];
$h_bindo = $_POST['h_bindo'];
$h_pkn = $_POST['h_pkn'];
$h_barab = $_POST['h_barab']; 
$h_pai = $_POST['h_pai'];
$h_fiqih = $_POST['h_fiqih'];
$h_kimia = $_POST['h_kimia'];
$h_fisika = $_POST['h_fisika'];
$h_sosiologi = $_POST['h_sosiologi'];
$h_binggris = $_POST['h_binggris'];
$h_senbud = $_POST['h_senbud'];
$h_penjas = $_POST['h_penjas'];
$h_qurdits = $_POST['h_qurdits'];
$h_ekonomi = $_POST['h_ekonomi'];
$h_biologi = $_POST['h_biologi'];
$h_geografi = $_POST['h_geografi'];
$h_plbj = $_POST['h_plbj'];
$h_ski = $_POST['h_ski'];
$h_tik = $_POST['h_tik'];
$h_tugas_harian = $_POST['h_tugas_harian'];
$h_ulangan_praktik = $_POST['h_ulangan_praktik'];
$edit = mysql_query("update nilai set nilai_aqidah='$aqidah', nilai_mtk='$mtk', nilai_bindo='$bindo', nilai_pkn='$pkn', nilai_barab='$barab',
nilai_pai='$pai', nilai_fiqih='$fiqih', nilai_kimia='$kimia', nilai_fisika='$fisika', nilai_sosiologi='$sosiologi', nilai_binggris='$binggris',
nilai_senbud='$senbud', nilai_penjas='$penjas', nilai_qurdits='$qurdits', nilai_ekonomi='$ekonomi', nilai_biologi='$biologi', nilai_geografi='$geografi',
nilai_plbj='$plbj', nilai_ski='$ski', nilai_tik='$tik', tugas_harian='$tugas_harian', ulangan_praktik='$ulangan_praktik', huruf_aqidah='$h_aqidah',
huruf_mtk='$h_mtk', huruf_bindo='$h_bindo', huruf_pkn='$h_pkn', huruf_barab='$h_barab', huruf_pai='$h_pai', huruf_fiqih='$h_fiqih',
huruf_kimia='$h_kimia', huruf_fisika='$h_fisika', huruf_sosiologi='$h_sosiologi', huruf_binggris='$h_binggris', huruf_senbud='$h_senbud',
huruf_penjas='$h_penjas', huruf_qurdits='$h_qurdits', huruf_ekonomi='$h_ekonomi', huruf_biologi='$h_biologi', huruf_geografi='$h_geografi',
huruf_plbj='$h_plbj', huruf_ski='$h_ski', huruf_tik='$h_tik', huruf_tugas_harian='$h_tugas_harian', huruf_ulangan_praktik='$h_ulangan_praktik' where nis='$nis'");
if($edit){
echo "<script>
alert('Data Berhasil di Ganti');
window.location.href='nilai_tampil_admin.php';
</script>";
}else{
echo "Gagal mengganti nilai mata pelajaran";
}
?>