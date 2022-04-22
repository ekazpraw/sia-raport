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
$input = mysql_query("insert into nilai (nis, nilai_aqidah, nilai_mtk, nilai_bindo, nilai_pkn, nilai_barab, nilai_pai, nilai_fiqih, nilai_kimia, nilai_fisika, nilai_sosiologi, nilai_binggris, nilai_senbud, nilai_penjas, nilai_qurdits, nilai_ekonomi, nilai_biologi, nilai_geografi, nilai_plbj, nilai_ski, nilai_tik, tugas_harian, ulangan_praktik, huruf_aqidah, huruf_mtk, huruf_bindo, huruf_pkn, huruf_barab, huruf_pai, huruf_fiqih, huruf_kimia, huruf_fisika, huruf_sosiologi, huruf_binggris, huruf_senbud, huruf_penjas, huruf_qurdits, huruf_ekonomi, huruf_biologi, huruf_geografi, huruf_plbj, huruf_ski, huruf_tik, huruf_tugas_harian, huruf_ulangan_praktik)
values ('$nis', '$aqidah', '$mtk', '$bindo', '$pkn', '$barab', '$pai', '$fiqih', '$kimia', '$fisika', '$sosiologi', '$binggris', '$senbud', '$penjas', '$qurdits', '$ekonomi', '$biologi', '$geografi', '$plbj', '$ski', '$tik', '$tugas_harian', '$ulangan_praktik', '$h_aqidah', '$h_mtk', '$h_bindo', '$h_pkn', '$h_barab', '$h_pai', '$h_fiqih', '$h_kimia', '$h_fisika', '$h_sosiologi', '$h_binggris', '$h_senbud', '$h_penjas', '$h_qurdits', '$h_ekonomi', '$h_biologi', '$h_geografi', '$h_plbj', '$h_ski', '$h_tik', '$h_tugas_harian', '$h_ulangan_praktik')");
if($input){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='nilai_tampil_admin.php';
</script>";
}else{
echo "Gagal input nilai mata pelajaran";
}
?>