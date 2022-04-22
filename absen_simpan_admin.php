<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$nis = $_POST['nis'];
$bulan = $_POST['bulan'];
$tgl1 = $_POST['tgl1'];
$tgl2 = $_POST['tgl2'];
$tgl3 = $_POST['tgl3'];
$tgl4 = $_POST['tgl4'];
$tgl5 = $_POST['tgl5'];
$tgl6 = $_POST['tgl6'];
$tgl7 = $_POST['tgl7'];
$tgl8 = $_POST['tgl8'];
$tgl9 = $_POST['tgl9'];
$tgl10 = $_POST['tgl10'];
$tgl11 = $_POST['tgl11'];
$tgl12 = $_POST['tgl12'];
$tgl13 = $_POST['tgl13'];
$tgl14 = $_POST['tgl14'];
$tgl15 = $_POST['tgl15'];
$tgl16 = $_POST['tgl16'];
$tgl17 = $_POST['tgl17'];
$tgl18 = $_POST['tgl18'];
$tgl19 = $_POST['tgl19'];
$tgl20 = $_POST['tgl20'];
$tgl21 = $_POST['tgl21'];
$tgl22 = $_POST['tgl22'];
$tgl23 = $_POST['tgl23'];
$tgl24 = $_POST['tgl24'];
$tgl25 = $_POST['tgl25'];
$tgl26 = $_POST['tgl26'];
$tgl27 = $_POST['tgl27'];
$tgl28 = $_POST['tgl28'];
$tgl29 = $_POST['tgl29'];
$tgl30 = $_POST['tgl30'];
$tgl31 = $_POST['tgl31'];
$totalabs_hadir = $_POST['totalabs_hadir'];
$totalabs_sakit = $_POST['totalabs_sakit'];
$totalabs_alpa = $_POST['totalabs_alpa'];
$totalabs_libur = $_POST['totalabs_libur'];
$input = mysql_query("insert into absen (nis, bulan, tgl1, tgl2, tgl3, tgl4, tgl5, tgl6, tgl7, tgl8, tgl9, tgl10, tgl11, tgl12, tgl13, tgl14, tgl15, tgl16,
tgl17, tgl18, tgl19, tgl20, tgl21, tgl22, tgl23, tgl24, tgl25, tgl26, tgl27, tgl28, tgl29, tgl30, tgl31, totalabs_hadir, totalabs_sakit, totalabs_alpa, totalabs_libur) 
values ('$nis', '$bulan', '$tgl1', '$tgl2', '$tgl3', '$tgl4', '$tgl5', '$tgl6', '$tgl7', '$tgl8', '$tgl9', '$tgl10', '$tgl11', '$tgl12', '$tgl13', '$tgl14',
'$tgl15', '$tgl16', '$tgl17', '$tgl18', '$tgl19', '$tgl20', '$tgl21', '$tgl22', '$tgl23', '$tgl24', '$tgl25', '$tgl26', '$tgl27', '$tgl28', '$tgl29', '$tgl30',
'$tgl31', '$totalabs_hadir', '$totalabs_sakit', '$totalabs_alpa', '$totalabs_libur')");
if($input){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='absen_tampil_admin.php';
</script>";
}else{
echo "Gagal input absen siswa";
}
?>